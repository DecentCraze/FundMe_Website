<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fundraiser;

class FundraiserController extends Controller
{
    public function create()
    {
        return view('Signin.fundraiser'); // Adjust the view path as necessary
    }

    public function store(Request $request)

    {
        // Validation rules
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'adhar' => 'required|string|max:12',
            'cause' => 'required|string|in:personal,education,animal',
            'reason' => 'required|string',
            'maxAmount' => 'required|numeric',
            'days' => 'required|integer',
            'imageVideo' => 'nullable|file|mimes:jpeg,png,jpg,gif,mp4,avi,mkv|max:2048',
            'message' => 'required|string',
        ]);

        // Handle file upload if present
        $imagePath = null;
        if ($request->hasFile('imageVideo')) {
            $imagePath = $request->file('imageVideo')->store('fundraisers', 'public');
        }

        // Store the data into the database
        Fundraiser::create([
            'name' => $request->name,
            'email' => $request->email,
            'adhar' => $request->adhar,
            'cause' => $request->cause,
            'reason' => $request->reason,
            'maxAmount' => $request->maxAmount,
            'days' => $request->days,
            'image_video' => $imagePath,
            'message' => $request->message,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Fundraiser Created Successfully!');
    }
}
