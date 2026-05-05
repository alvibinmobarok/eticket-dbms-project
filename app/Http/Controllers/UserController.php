<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function register()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function LoginStore(Request $request)
    {
        //
    }

    /**

    * Display the specified resource.
     */
    public function RegisterStore(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
    public function loadBalance(Request $request)
    {
        $request->validate([
            'card_number' => 'required|min:12|max:19',
            'amount' => 'required|numeric|min:1',
        ]);

        $userId = session('user_id');

        if (!$userId) {
            return redirect()->route('login')->with('error', 'Please login first');
        }

        // Get current balance
        $user = DB::selectOne(
            "SELECT balance FROM users WHERE id = ?",
            [$userId]
        );

        $newBalance = $user->balance + $request->amount;

        DB::update("UPDATE users SET balance = ? WHERE id = ?", [$newBalance, $userId]);

        session(['user_balance' => $newBalance]);

        return back()->with('success', 'Balance loaded successfully!');
    }
    public function userProfile()
    {
        if (!session()->has('user_id')) {
            return redirect()->route('login');
        }

        $events = DB::select("
        SELECT 
            e.id,
            e.event_name,
            e.event_date,
            e.event_time,
            e.category_name,
            e.description,
            v.venue_name,
            v.location,

            MIN(CASE WHEN s.seat_type = 'regular' THEN s.price END) AS regular_price,
            MIN(CASE WHEN s.seat_type = 'vip' THEN s.price END) AS vip_price,

            SUM(CASE WHEN s.seat_type = 'regular' AND s.status = 'available' THEN 1 ELSE 0 END) AS regular_left,
            SUM(CASE WHEN s.seat_type = 'vip' AND s.status = 'available' THEN 1 ELSE 0 END) AS vip_left

        FROM events e
        JOIN venue v ON e.id = v.id
        LEFT JOIN seats s ON e.id = s.event_id
        GROUP BY 
            e.id,
            e.event_name,
            e.event_date,
            e.event_time,
            e.category_name,
            e.description,
            v.venue_name,
            v.location
        ");

        return view('user_profile', compact('events'));
}
}
