<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuthUser ; // Use the custom AuthUser  model
use Illuminate\Support\Facades\Auth; // For authentication
use Illuminate\Support\Facades\Hash; // For hashing passwords

class AuthController extends Controller
{
    // Show the signup form
    public function showSignUpForm()
    {
        return view('Signin.signup'); // Adjust the view path as necessary
    }

    // Handle the signup request
    public function signup(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:auth_db,email', // Change to auth_db
            'password' => 'required|string|min:8|confirmed', // Add confirmation validation if you have a password_confirmation field
        ]);

        // Create the new user
        AuthUser ::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Encrypt password
        ]);

        // Redirect to the login page with a success message
        return redirect()->route('login.form')->with('success', 'Signup successful! Please log in.');
    }

    // Show the login form
    public function showLoginForm()
    {
        return view('Signin.login'); // Adjust the view path as necessary
    }

    // Handle the login request
    public function login(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Attempt to log the user in
        if (Auth::attempt($request->only('email', 'password'))) {
            // If login is successful, redirect to the intended page or home
            return redirect()->intended('/home')->with('success', 'Login successful!');
        }

        // If login fails, redirect back with an error message
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
    }

    // Show the main page after login
    public function home()
    {
        return view('Welcome'); // Adjust the view path as necessary
    }
}