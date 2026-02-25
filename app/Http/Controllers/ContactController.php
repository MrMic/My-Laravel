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
        // dd($request->all());
        echo $request->name . '<br>';
    }
}
