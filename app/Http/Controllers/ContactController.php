<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // ______________________________________________________________________
    public function index(): View
    {
        return view('contact.index');
    }

    // ______________________________________________________________________
    /**
    * Validate the incoming request data and process the contact form submission.
     *
    * @param Request $request The incoming HTTP request containing the contact form data.
     */
    public function contactSubmit(Request $request): void
    {
        // echo $request->name . '<br>';
        // dd($request->all());
        $request->validate(
            [
                // 'name' => 'required|min:3|max:20',
                'name' => ['required', 'min:3', 'max:20'],
                'email' => 'required|email',
                'message' => 'required|min:10|max:200',
            ],
            [
                'name.required' => 'Please enter your name.',
                'name.min' => 'Name must be at least 3 characters.',
                'name.max' => 'Name cannot exceed 20 characters.',
                'email.required' => 'Please enter your email address.',
                'email.email' => 'Please enter a valid email address.',
                'message.required' => 'Please enter your message.',
                'message.min' => 'Message must be at least 10 characters.',
                'message.max' => 'Message cannot exceed 200 characters.',
            ]
        );
        ;
        // Process the validated data here
        dd($request->all());
    }
}
