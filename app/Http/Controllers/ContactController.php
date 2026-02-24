<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    // ______________________________________________________________________
    public function index()
    {
        return view('contact.index');
    }
    // ______________________________________________________________________
    public function contactSubmit()
    {
        // Handle form submission logic here (e.g., validation, sending email, etc.)
        // For now, we'll just redirect back to the contact page with a success message.
        dd("WORKING");
    }
}
