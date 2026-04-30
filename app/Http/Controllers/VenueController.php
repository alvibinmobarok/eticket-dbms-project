<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venue;

class VenueController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'venue_name' => 'required|string|max:255',
            'capacity' => 'required|integer|min:1',
            'location' => 'required|string|max:255',
        ]);

        Venue::create([
            'venue_name' => $request->venue_name,
            'capacity' => $request->capacity,
            'location' => $request->location,
        ]);

        return redirect()->back()->with('success', 'Venue added successfully!');
    }
}
