<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function sendContact(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'job_title' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        Mail::to('direction@sureowncompany.com')->send(new ContactMail($validatedData));

        return back()->with('success', 'Votre message a été envoyé avec succès. Nous vous contacterons bientôt.');
    }
}
