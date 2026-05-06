<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    private function connect()
    {
        $conn = mysqli_connect("localhost", "root", "", "laravel");

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $conn;
    }

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

        $conn = $this->connect();

        $email = mysqli_real_escape_string($conn, $request->email);

        $sql = "SELECT * FROM users WHERE email = '$email'";

        $result = mysqli_query($conn, $sql);

        $user = mysqli_fetch_assoc($result);

        if (!$user || !password_verify($request->password, $user['password'])) {
            return back()->withErrors([
                'email' => 'Invalid credentials',
            ]);
        }

        if ($user['role'] !== 'admin') {
            return back()->withErrors([
                'email' => 'Not authorized as admin',
            ]);
        }

        session([
            'user_id' => $user['id'],
            'user_name' => $user['user_name'],
            'user_email' => $user['email'],
            'user_role' => $user['role'],
            'user_balance' => $user['balance']
        ]);

        return redirect()->route('admin.dashboard');
    }

    public function dashboard()
    {
        if (session('user_role') !== 'admin') {
            abort(403);
        }

        $conn = $this->connect();

        $venueSql = "SELECT * FROM venue";
        $venueResult = mysqli_query($conn, $venueSql);

        $venues = [];

        while ($row = mysqli_fetch_object($venueResult)) {
            $venues[] = $row;
        }

        $eventSql = "
            SELECT 
                e.*,
                v.venue_name,
                v.location
            FROM events e
            LEFT JOIN venue v ON e.venue_id = v.id
        ";

        $eventResult = mysqli_query($conn, $eventSql);

        $events = [];

        while ($row = mysqli_fetch_object($eventResult)) {
            $events[] = $row;
        }

        return view('admin_dashboard', compact('venues', 'events'));
    }
}