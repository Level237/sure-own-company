<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderRequestMail;
use Illuminate\Support\Facades\Mail;

class OrderRequestController extends Controller
{
    public function index()
    {
        return view('order-request');
    }

    public function store(Request $request)
    {
        $type = $request->input('request_type_selection');

        if ($type === 'existing_order') {
            $validated = $request->validate([
                'company_name' => 'required|string|max:255',
                'contact_person' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'service_type' => 'required|string',
                'message' => 'nullable|string',
                'order_file' => 'required|file|mimes:pdf,docx,jpg,png|max:5120', // 5MB limit
            ]);
        } else {
            $validated = $request->validate([
                'company_name' => 'required|string|max:255',
                'contact_person' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'type_of_request' => 'required|string',
                'desired_date' => 'required|date',
                'message' => 'nullable|string',
            ]);
        }

        $validated['submission_type'] = $type;

        // Send Email
        Mail::to('direction@sureowncompany.com')->send(new OrderRequestMail($validated, $request->file('order_file')));

        return redirect()->route('order.success');
    }

    public function success()
    {
        return view('order-request-success');
    }
}
