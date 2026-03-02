<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactStoreRequest;
use App\Models\Contact;
use Illuminate\Contracts\View\View;

class ContactController extends Controller
{
    // INFO: _________________________________________________________________
    public function index(): View
    {
        return view('contact.index');
    }

    // INFO: _________________________________________________________________
    /**
     * Validate the incoming request data and process the contact form submission.
     * The ContactStoreRequest will automatically handle validation based on the rules defined
     *If the validation fails, the user will be redirected back to the form with error messages.
     * If it passes, the validated data can be accessed and processed as needed.
     */
    public function contactSubmit(ContactStoreRequest $request): void
    {
        // Process the validated data here
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        dd("Contact form submitted successfully!");
    }
}
