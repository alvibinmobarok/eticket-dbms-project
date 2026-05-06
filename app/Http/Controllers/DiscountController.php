<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscountController extends Controller
{
    private function connect()
    {
        $conn = mysqli_connect("localhost", "root", "", "laravel");

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $conn;
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'discount_percent' => 'required|numeric|min:1|max:100',
            'expiry_date' => 'required|date',
        ]);

        $conn = $this->connect();

        $code = mysqli_real_escape_string($conn, $request->code);
        $discountPercent = $request->discount_percent;
        $expiryDate = $request->expiry_date;

        $sql = "
            INSERT INTO discount (code, discount_percent, expiry_date)
            VALUES ('$code', $discountPercent, '$expiryDate')
        ";

        mysqli_query($conn, $sql);

        return back()->with('success', 'Discount code added successfully!');
    }
}