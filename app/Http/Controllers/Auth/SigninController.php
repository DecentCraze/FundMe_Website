<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Assuming you're using the User model
use Illuminate\Support\Facades\Auth; // For authentication
use Illuminate\Support\Facades\Hash; // For hashing passwords
use Illuminate\Support\Facades\Validator; // For validation

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
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed', // Add confirmation validation if you have a password_confirmation field
        ]);

        // Create the new user
        User::create([
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
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed, redirect to the main page
            return redirect()->route('home')->with('success', 'Login successful!');
        }

        // Authentication failed, redirect back with an error message
        return redirect()->back()->with('error', 'Invalid credentials')->withInput();
    }

    // Show the main page after login
    public function home()
    {
        return view('home'); // Adjust the view path as necessary
    }
}