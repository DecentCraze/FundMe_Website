<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Donation;  // Assuming you have a Donation model to interact with the database

class DonationController extends Controller
{
    // Show the donation form (GET request)
    public function showForm()
    {
        return view('Signin.donate'); // This loads the donate.blade.php form
    }

    // Handle form submission and save the donation (POST request)
    public function storeDonation(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'amount' => 'required|numeric|min:1',
            'cause' => 'required|in:education,medical,animal,personal',
        ]);

        try {
            // Save the donation data to the database
            Donation::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'amount' => $request->input('amount'),
                'cause' => $request->input('cause'),
            ]);

            return redirect()->route('donate.form')->with('success', 'Donation saved successfully!');
        } catch (\Exception $e) {
            return redirect()->route('donate.form')->with('error', 'Failed to save donation: ' . $e->getMessage());
        }
    }

    // New method to fetch all donations
    public function index()
    {
        $donations = Donation::all(); // Fetch all donations from the database
        return view('donations.index', compact('donations')); // Pass donations to the view
    }
}
