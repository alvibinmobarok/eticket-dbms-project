<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SeatController extends Controller
{
    private function connect()
    {
        $conn = mysqli_connect("localhost", "root", "", "laravel");

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $conn;
    }

    public function generate(Request $request)
    {
        $request->validate([
            'event_id' => 'required',
            'venue_id' => 'required',
            'event_name' => 'required|string',
            'seat_type' => 'required|in:vip,regular',
            'seat_count' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        $conn = $this->connect();

        $eventName = Str::slug($request->event_name, '_');
        $seatType = $request->seat_type;
        $price = $request->price;
        $venueId = $request->venue_id;
        $eventId = $request->event_id;

        for ($i = 1; $i <= $request->seat_count; $i++) {

            $seatNumber = strtoupper(substr($seatType, 0, 1)) . $i;

            $fullSeatNumber = $eventName . '_' . $seatType . '_' . $seatNumber;

            $sql = "
                INSERT INTO seats
                (seat_type, status, seat_number, price, venue_id, event_id)
                VALUES
                (
                    '$seatType',
                    'available',
                    '$fullSeatNumber',
                    $price,
                    $venueId,
                    $eventId
                )
            ";

            mysqli_query($conn, $sql);
        }

        return redirect()->back()->with('success', 'Seats generated successfully!');
    }
}