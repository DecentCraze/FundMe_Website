<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Donation;

use App\Models\Fundraiser;

class PersonalController extends Controller
{
    public function show()
    {
        // Fetch fundraisers from the database
        $fundraisers = Fundraiser::where('cause', 'personal')->get(); // Fetch personal fundraisers
        $donations = Donation::all(); // Fetch personal donations from the database

        return view('Main.personal', compact('donations', 'fundraisers'));  // Pass donations and fundraisers to the view

        return view('Main.personal', compact('exampleCampaigns'));  // Pass campaigns to the view
    }
}
