<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
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
            'event_name' => 'required|string|max:255',
            'event_date' => 'required|date',
            'event_time' => 'required',
            'category_name' => 'required|string|max:255',
            'description' => 'required|string',
            'venue_id' => 'required'
        ]);

        $conn = $this->connect();

        $eventName = mysqli_real_escape_string($conn, $request->event_name);
        $eventDate = $request->event_date;
        $eventTime = $request->event_time;
        $categoryName = mysqli_real_escape_string($conn, $request->category_name);
        $description = mysqli_real_escape_string($conn, $request->description);
        $venueId = $request->venue_id;

        $sql = "
            INSERT INTO events
            (
                event_name,
                event_date,
                event_time,
                category_name,
                description,
                venue_id
            )
            VALUES
            (
                '$eventName',
                '$eventDate',
                '$eventTime',
                '$categoryName',
                '$description',
                $venueId
            )
        ";

        mysqli_query($conn, $sql);

        return redirect()->back()->with('success', 'Event added successfully!');
    }
}