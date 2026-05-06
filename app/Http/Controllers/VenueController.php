<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VenueController extends Controller
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
            'venue_name' => 'required|string|max:255',
            'capacity' => 'required|integer|min:1',
            'location' => 'required|string|max:255',
        ]);

        $conn = $this->connect();

        $venueName = mysqli_real_escape_string($conn, $request->venue_name);
        $capacity = $request->capacity;
        $location = mysqli_real_escape_string($conn, $request->location);

        $sql = "
            INSERT INTO venue (venue_name, capacity, location)
            VALUES ('$venueName', $capacity, '$location')
        ";

        mysqli_query($conn, $sql);

        return redirect()->back()->with('success', 'Venue added successfully!');
    }

    public function showVenues()
    {
        $conn = $this->connect();

        $sql = "SELECT * FROM venue";

        $result = mysqli_query($conn, $sql);

        $venues = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $venues[] = (object) $row;
        }

        return view('venues', compact('venues'));
    }
}