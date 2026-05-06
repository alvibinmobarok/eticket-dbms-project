<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    private function connect()
    {
        $conn = mysqli_connect("localhost", "root", "", "laravel");

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $conn;
    }

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

        $conn = $this->connect();

        $userName = mysqli_real_escape_string($conn, $request->user_name);
        $email = mysqli_real_escape_string($conn, $request->email);
        $phone = mysqli_real_escape_string($conn, $request->phone);
        $hashedPassword = password_hash($request->password, PASSWORD_DEFAULT);

        $checkSql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $checkSql);

        if (mysqli_num_rows($result) > 0) {
            return back()->with('error', 'Email already exists');
        }

        $sql = "
            INSERT INTO users 
            (user_name, email, phone, password, role, balance)
            VALUES
            ('$userName', '$email', '$phone', '$hashedPassword', 'customer', 0)
        ";

        mysqli_query($conn, $sql);

        return redirect('/login')->with('success', 'Registration successful. Please login.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $conn = $this->connect();

        $email = mysqli_real_escape_string($conn, $request->email);

        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        $user = mysqli_fetch_assoc($result);

        if ($user && password_verify($request->password, $user['password'])) {
            session([
                'user_id' => $user['id'],
                'user_name' => $user['user_name'],
                'user_email' => $user['email'],
                'user_role' => $user['role'],
                'user_balance' => $user['balance']
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