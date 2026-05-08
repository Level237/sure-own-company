<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PartnerMail;
use Illuminate\Support\Facades\Mail;

class PartnerController extends Controller
{
    public function index()
    {
        return view('partner');
    }

    public function sendPartnerRequest(Request $request)
    {
        $validatedData = $request->validate([
            'company_name' => 'required|string|max:255',
            'industry' => 'required|string|max:255',
            'full_name' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        Mail::to('direction@sureowncompany.com')->send(new PartnerMail($validatedData));

        return back()->with('success', 'Votre candidature a été envoyée avec succès. Notre équipe vous contactera sous 48h.');
    }
}
