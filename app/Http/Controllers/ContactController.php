<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // ______________________________________________________________________
    public function index()
    {
        return view('contact.index');
    }
    // ______________________________________________________________________
    public function contactSubmit(Request $request)
    {
        // echo $request->name . '<br>';
        // dd($request->all());
        $request->validate([
            'name' => 'required|min:3|max:20',
            'email' => 'required|email',
            'message' => 'required|min:10|max:200',
        ]);
        // Process the validated data here
        dd($request->all());
    }
}
