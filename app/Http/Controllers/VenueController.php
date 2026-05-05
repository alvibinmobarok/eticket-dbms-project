<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VenueController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'venue_name' => 'required|string|max:255',
            'capacity' => 'required|integer|min:1',
            'location' => 'required|string|max:255',
        ]);

        DB::insert(
            "INSERT INTO venue (venue_name, capacity, location)
             VALUES (?, ?, ?)",
            [
                $request->venue_name,
                $request->capacity,
                $request->location
            ]
        );

        return redirect()->back()->with('success', 'Venue added successfully!');
    }
}