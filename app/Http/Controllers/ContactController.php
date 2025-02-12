<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // For using raw queries

class ContactController extends Controller
{
    // Show form method
    public function showForm()
    {
        return view('welcome');  // Return the form view (contact.blade.php)
    }

    // Handle form submission
    public function submitForm(Request $request)
    {
        // Validate the form input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Insert data directly using DB facade (raw query)
        DB::table('contact_messages')->insert([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'message' => $validatedData['message'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect back to the form with success message
        return redirect()->route('contact')->with('success', 'Message sent successfully');
    }
}
