<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminAuthController extends Controller
{
    public function showLogin()
    {
        return view('admin_login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = DB::selectOne(
            "SELECT * FROM users WHERE email = ?",
            [$request->email]
        );

        if (!$user || !password_verify($request->password, $user->password)) {
            return back()->withErrors([
                'email' => 'Invalid credentials',
            ]);
        }

        if ($user->role !== 'admin') {
            return back()->withErrors([
                'email' => 'Not authorized as admin',
            ]);
        }

        session([
            'user_id' => $user->id,
            'user_name' => $user->user_name,
            'user_email' => $user->email,
            'user_role' => $user->role,
            'user_balance' => $user->balance
        ]);

        return redirect()->route('admin.dashboard');
    }

    public function dashboard()
    {
        if (session('user_role') !== 'admin') {
            abort(403);
        }

        $venues = DB::select("SELECT * FROM venue");

        $events = DB::select("
            SELECT 
                e.*,
                v.venue_name,
                v.location
            FROM events e
            LEFT JOIN venue v ON e.id = v.id
        ");

        return view('admin_dashboard', compact('venues', 'events'));
    }
}