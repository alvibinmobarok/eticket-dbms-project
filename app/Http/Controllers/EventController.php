<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
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

        DB::insert(
            "INSERT INTO events
            (event_name, event_date, event_time, category_name, description, venue_id)
            VALUES (?, ?, ?, ?, ?, ?)",
            [
                $request->event_name,
                $request->event_date,
                $request->event_time,
                $request->category_name,
                $request->description,
                $request->venue_id
            ]
        );

        return redirect()->back()->with('success', 'Event added successfully!');
    }
}