<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fundraiser;
use App\Models\Donation; // Import the Donation model


class AnimalController extends Controller
{

    public function show()
    {
        // Fetch fundraisers from the database
        $fundraisers = Fundraiser::where('cause', 'animal')->get(); // Fetch educational fundraisers
        $donations = Donation::all(); // Fetch donations from the database

        return view('Main.education', compact('donations', 'fundraisers'));  // Pass donations and fundraisers to the view
    }
}
