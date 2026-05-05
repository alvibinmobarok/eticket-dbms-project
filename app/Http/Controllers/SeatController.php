<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SeatController extends Controller
{
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

        $eventName = Str::slug($request->event_name, '_');
        $seatType = $request->seat_type;

        for ($i = 1; $i <= $request->seat_count; $i++) {
            $seatNumber = strtoupper(substr($seatType, 0, 1)) . $i;

            $fullSeatNumber = $eventName . '_' . $seatType . '_' . $seatNumber;

            DB::insert(
                "INSERT INTO seats 
                (seat_type, status, seat_number, price, venue_id, event_id)
                VALUES (?, ?, ?, ?, ?, ?)",
                [
                    $seatType,
                    'available',
                    $fullSeatNumber,
                    $request->price,
                    $request->venue_id,
                    $request->event_id
                ]
            );
        }

        return redirect()->back()->with('success', 'Seats generated successfully!');
    }
}