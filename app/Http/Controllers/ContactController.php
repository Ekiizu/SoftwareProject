<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Show the contact form
    public function index()
    {
        return view('contact.index');
    }

    // Handle form submission
    public function store(Request $request)
    {
        // Validate and process the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // You can send an email, save to the database, etc.

        return redirect()->route('contact.index')->with('success', 'Your message has been sent!');
    }
}
