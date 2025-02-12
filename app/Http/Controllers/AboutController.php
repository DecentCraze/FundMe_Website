<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show()
    {
        return view('about');  // Serve the About Us view
    }
}

