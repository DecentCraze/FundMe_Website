<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('Signin.login');
    }

    // Handle the login submission
    public function login(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Attempt to log the user in using AuthDb model and log the attempt
        \Log::info('Login attempt initiated', ['email' => $request->email]);
        \Log::info('Attempting to log in user', ['email' => $request->email]);
        if (Auth::guard('auth_db')->attempt($request->only('email', 'password'), $request->has('remember'))) {
            // If login is successful, redirect to the intended page or home
            return redirect()->intended('/welcome');
        }

        // If login fails, log the failure and redirect back with an error message
        \Log::warning('Login attempt failed', ['email' => $request->email]);
        return back()->withErrors([
            'email' => 'The provided email do not match our records.',
        ]);
    }
}
