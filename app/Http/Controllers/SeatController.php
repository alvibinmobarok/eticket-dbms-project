<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seat;
use Illuminate\Support\Str;

class SeatController extends Controller
{
    public function generate(Request $request)
    {
        $request->validate([
            'event_id' => 'required|exists:events,id',
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

            Seat::create([
                'seat_type' => $seatType,
                'status' => 'available',
                'seat_number' => $eventName . '_' . $seatType . '_' . $seatNumber,
                'price' => $request->price,
                'venue_id' => $request->venue_id,
                'event_id' => $request->event_id,
            ]);
        }

        return redirect()->back()->with('success', 'Seats generated successfully!');
    }
}
