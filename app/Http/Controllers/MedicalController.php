<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalController extends Controller
{
    public function show()
    {
        // Fetch example campaigns from the database
        $exampleCampaigns = []; 

        return view('Main.medical', compact('exampleCampaigns'));  // Pass campaigns to the view
    }
}
