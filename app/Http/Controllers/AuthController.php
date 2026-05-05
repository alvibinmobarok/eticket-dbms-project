<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('register');
    }

    public function showLogin()
    {
        return view('login');
    }

    public function register(Request $request)
    {
        $request->validate([
            'user_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required|min:4'
        ]);

        $existingUser = DB::selectOne(
            "SELECT * FROM users WHERE email = ?",
            [$request->email]
        );

        if ($existingUser) {
            return back()->with('error', 'Email already exists');
        }

        $hashedPassword = password_hash($request->password, PASSWORD_DEFAULT);

        DB::insert(
            "INSERT INTO users (user_name, email, phone, password, role, balance)
             VALUES (?, ?, ?, ?, ?, ?)",
            [
                $request->user_name,
                $request->email,
                $request->phone,
                $hashedPassword,
                'customer',
                0
            ]
        );

        return redirect('/login')->with('success', 'Registration successful. Please login.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = DB::selectOne(
            "SELECT * FROM users WHERE email = ?",
            [$request->email]
        );

        if ($user && password_verify($request->password, $user->password)) {
            session([
                'user_id' => $user->id,
                'user_name' => $user->user_name,
                'user_email' => $user->email,
                'user_role' => $user->role,
                'user_balance' => $user->balance
            ]);

            return redirect('/user_profile');
        }

        return back()->with('error', 'Invalid email or password');
    }

    public function logout()
    {
        session()->flush();
        return redirect('/login')->with('success', 'Logged out successfully');
    }
}
