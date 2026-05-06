<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private function connect()
    {
        $conn = mysqli_connect("localhost", "root", "", "laravel");

        if (!$conn) {
            die("Database connection failed: " . mysqli_connect_error());
        }

        return $conn;
    }

    public function loadBalance(Request $request)
    {
        $request->validate([
            'card_number' => 'required|min:12|max:19',
            'amount' => 'required|numeric|min:1',
        ]);

        if (!session()->has('user_id')) {
            return redirect()->route('login')->with('error', 'Please login first');
        }

        $conn = $this->connect();
        $userId = session('user_id');
        $amount = $request->amount;

        $sql = "SELECT balance FROM users WHERE id = $userId";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);

        $newBalance = $user['balance'] + $amount;

        $sql = "UPDATE users SET balance = $newBalance WHERE id = $userId";
        mysqli_query($conn, $sql);

        session(['user_balance' => $newBalance]);

        return back()->with('success', 'Balance loaded successfully!');
    }

    public function userProfile()
    {
        if (!session()->has('user_id')) {
            return redirect()->route('login');
        }

        $conn = $this->connect();

        $sql = "
            SELECT 
                e.id,
                e.event_name,
                e.event_date,
                e.event_time,
                e.category_name,
                e.description,
                v.venue_name,
                v.location,

                MIN(CASE WHEN s.seat_type = 'regular' THEN s.price END) AS regular_price,
                MIN(CASE WHEN s.seat_type = 'vip' THEN s.price END) AS vip_price,

                SUM(CASE WHEN s.seat_type = 'regular' AND s.status = 'available' THEN 1 ELSE 0 END) AS regular_left,
                SUM(CASE WHEN s.seat_type = 'vip' AND s.status = 'available' THEN 1 ELSE 0 END) AS vip_left

            FROM events e
            JOIN venue v ON e.venue_id = v.id
            LEFT JOIN seats s ON e.id = s.event_id
            GROUP BY 
                e.id,
                e.event_name,
                e.event_date,
                e.event_time,
                e.category_name,
                e.description,
                v.venue_name,
                v.location
        ";

        $result = mysqli_query($conn, $sql);

        $events = [];

        while ($row = mysqli_fetch_object($result)) {
            $events[] = $row;
        }

        return view('user_profile', compact('events'));
    }

    public function addToCart(Request $request)
    {
        if (!session()->has('user_id')) {
            return redirect('/login')->with('error', 'Please login first');
        }

        $request->validate([
            'event_id' => 'required',
            'ticket_type' => 'required|in:regular,vip',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        $conn = $this->connect();

        $userId = session('user_id');
        $eventId = $request->event_id;
        $ticketType = $request->ticket_type;
        $quantity = $request->quantity;
        $price = $request->price;

        $sql = "SELECT * FROM cart 
                WHERE user_id = $userId 
                AND event_id = $eventId 
                AND ticket_type = '$ticketType'";

        $result = mysqli_query($conn, $sql);
        $existingCartItem = mysqli_fetch_assoc($result);

        if ($existingCartItem) {
            $newQuantity = $existingCartItem['quantity'] + $quantity;
            $newTotal = $newQuantity * $existingCartItem['price'];
            $cartId = $existingCartItem['cart_id'];

            $sql = "UPDATE cart 
                    SET quantity = $newQuantity, total_price = $newTotal
                    WHERE cart_id = $cartId";

            mysqli_query($conn, $sql);
        } else {
            $totalPrice = $quantity * $price;

            $sql = "INSERT INTO cart 
                    (user_id, event_id, ticket_type, quantity, price, total_price)
                    VALUES 
                    ($userId, $eventId, '$ticketType', $quantity, $price, $totalPrice)";

            mysqli_query($conn, $sql);
        }

        $sql = "SELECT SUM(quantity) AS total FROM cart WHERE user_id = $userId";
        $result = mysqli_query($conn, $sql);
        $cartCount = mysqli_fetch_assoc($result);

        session(['cart_count' => $cartCount['total'] ?? 0]);

        return back()->with('success', 'Added to cart successfully!');
    }

    public function checkout()
    {
        if (!session()->has('user_id')) {
            return redirect('/login')->with('error', 'Please login first');
        }

        $conn = $this->connect();
        $userId = session('user_id');

        $sql = "
            SELECT 
                c.cart_id,
                c.event_id,
                c.ticket_type,
                c.quantity,
                c.price,
                c.total_price,
                e.event_name,
                e.event_date,
                e.event_time
            FROM cart c
            JOIN events e ON c.event_id = e.id
            WHERE c.user_id = $userId
        ";

        $result = mysqli_query($conn, $sql);

        $cartItems = [];

        while ($row = mysqli_fetch_object($result)) {
            $cartItems[] = $row;
        }

        $sql = "SELECT SUM(total_price) AS subtotal FROM cart WHERE user_id = $userId";
        $result = mysqli_query($conn, $sql);
        $subtotalRow = mysqli_fetch_assoc($result);
        $discountPercent = session('discount_percent', 0);
        $discountAmount = ($subtotalRow['subtotal'] ?? 0) * ($discountPercent / 100);
        $totalAfterDiscount = ($subtotalRow['subtotal'] ?? 0) - $discountAmount;

        return view('checkout', [
            'cartItems' => $cartItems,
            'subtotal' => $subtotalRow['subtotal'] ?? 0,
            'balance' => session('user_balance', 0),
            'discountPercent' => $discountPercent,
            'discountAmount' => $discountAmount,
            'totalAfterDiscount' => $totalAfterDiscount
        ]);
    }

    public function increaseCart($cart_id)
    {
        $conn = $this->connect();
        $userId = session('user_id');

        $sql = "UPDATE cart 
                SET quantity = quantity + 1
                WHERE cart_id = $cart_id AND user_id = $userId";
        mysqli_query($conn, $sql);

        $sql = "UPDATE cart 
                SET total_price = quantity * price
                WHERE cart_id = $cart_id AND user_id = $userId";
        mysqli_query($conn, $sql);

        return back();
    }

    public function decreaseCart($cart_id)
    {
        $conn = $this->connect();
        $userId = session('user_id');

        $sql = "SELECT * FROM cart WHERE cart_id = $cart_id AND user_id = $userId";
        $result = mysqli_query($conn, $sql);
        $item = mysqli_fetch_assoc($result);

        if (!$item) {
            return back()->with('error', 'Cart item not found');
        }

        if ($item['quantity'] <= 1) {
            $sql = "DELETE FROM cart WHERE cart_id = $cart_id AND user_id = $userId";
            mysqli_query($conn, $sql);
        } else {
            $sql = "UPDATE cart 
                    SET quantity = quantity - 1
                    WHERE cart_id = $cart_id AND user_id = $userId";
            mysqli_query($conn, $sql);

            $sql = "UPDATE cart 
                    SET total_price = quantity * price
                    WHERE cart_id = $cart_id AND user_id = $userId";
            mysqli_query($conn, $sql);
        }

        return back();
    }

    public function removeCart($cart_id)
    {
        $conn = $this->connect();
        $userId = session('user_id');

        $sql = "DELETE FROM cart WHERE cart_id = $cart_id AND user_id = $userId";
        mysqli_query($conn, $sql);

        return back()->with('success', 'Item removed from cart');
    }

    public function confirmCheckout()
    {
        if (!session()->has('user_id')) {
            return redirect('/login')->with('error', 'Please login first');
        }

        $conn = $this->connect();
        $userId = session('user_id');

        $sql = "SELECT * FROM cart WHERE user_id = $userId";
        $result = mysqli_query($conn, $sql);

        $cartItems = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $cartItems[] = $row;
        }

        if (count($cartItems) == 0) {
            return back()->with('error', 'Your cart is empty');
        }

        $sql = "SELECT SUM(total_price) AS total FROM cart WHERE user_id = $userId";
        $result = mysqli_query($conn, $sql);
        $totalRow = mysqli_fetch_assoc($result);
        $total = $totalRow['total'];

        $discountPercent = session('discount_percent', 0);
        $discountAmount = $total * ($discountPercent / 100);
        $finalTotal = $total - $discountAmount;

        $sql = "SELECT balance FROM users WHERE id = $userId";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);

        if ($user['balance'] < $finalTotal) {
            return back()->with('error', 'Not enough balance');
        }

        foreach ($cartItems as $item) {
            $eventId = $item['event_id'];
            $ticketType = $item['ticket_type'];
            $quantity = $item['quantity'];
            $price = $item['price'];
            $totalPrice = $item['total_price'];

            $sql = "INSERT INTO booking_details
                    (user_id, event_id, ticket_type, quantity, price, total_price)
                    VALUES
                    ($userId, $eventId, '$ticketType', $quantity, $price, $totalPrice)";

            mysqli_query($conn, $sql);

            $sql = "UPDATE seats
                    SET status = 'unavailable'
                    WHERE event_id = $eventId
                    AND seat_type = '$ticketType'
                    AND status = 'available'
                    LIMIT $quantity";

            mysqli_query($conn, $sql);
        }

        $sql = "UPDATE users SET balance = balance - $finalTotal WHERE id = $userId";
        mysqli_query($conn, $sql);

        $sql = "DELETE FROM cart WHERE user_id = $userId";
        mysqli_query($conn, $sql);

        $sql = "SELECT balance FROM users WHERE id = $userId";
        $result = mysqli_query($conn, $sql);
        $newBalance = mysqli_fetch_assoc($result);

        session([
            'user_balance' => $newBalance['balance'],
            'cart_count' => 0
        ]);

        session()->forget(['discount_code', 'discount_percent']);

        return redirect('/user_profile')->with('success', 'Booking confirmed successfully!');
    }
    public function submitReview(Request $request)
    {
        $request->validate([
            'venue_id' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string'
        ]);

        $conn = mysqli_connect("localhost", "root", "", "laravel");

        $venueId = $request->venue_id;
        $userId = session('user_id');
        $rating = $request->rating;
        $comment = mysqli_real_escape_string($conn, $request->comment);

        $sql = "
            INSERT INTO reviews (user_id, rating, comment, venue_id)
            VALUES ($userId, $rating, '$comment', $venueId)
        ";

        mysqli_query($conn, $sql);

        return redirect()->back()->with('success', 'Review submitted!');
    }
    public function showReviews($venueId)
    {
        $conn = mysqli_connect("localhost", "root", "", "laravel");

        $venueId = (int) $venueId;

        $sql = "
            SELECT
                reviews.rating,
                reviews.comment,
                users.user_name AS user_name
            FROM reviews
            JOIN users
                ON reviews.user_id = users.id
            WHERE reviews.venue_id = $venueId
            ORDER BY reviews.review_id DESC
        ";

        $result = mysqli_query($conn, $sql);

        $reviews = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $reviews[] = $row;
        }

        return response()->json($reviews);
    }
    public function applyDiscount(Request $request)
    {
        $request->validate([
            'discount_code' => 'required'
        ]);

        $conn = $this->connect();

        $code = mysqli_real_escape_string($conn, $request->discount_code);

        $sql = "
            SELECT * FROM discount
            WHERE code = '$code'
            AND expiry_date >= CURDATE()
        ";

        $result = mysqli_query($conn, $sql);
        $discount = mysqli_fetch_assoc($result);

        if (!$discount) {
            session()->forget(['discount_code', 'discount_percent']);

            return back()->with('error', 'Invalid or expired discount code');
        }

        session([
            'discount_code' => $discount['code'],
            'discount_percent' => $discount['discount_percent']
        ]);

        return back()->with('success', 'Discount code applied successfully!');
    }

}