<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

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
            'venue_id' => 'required|exists:venue,id', // use venues,id if your table is venues
        ]);

        Event::create([
            'event_name' => $request->event_name,
            'event_date' => $request->event_date,
            'event_time' => $request->event_time,
            'category_name' => $request->category_name,
            'description' => $request->description,
            'venue_id' => $request->venue_id,
        ]);

        return redirect()->back()->with('success', 'Event added successfully!');
    }
}
