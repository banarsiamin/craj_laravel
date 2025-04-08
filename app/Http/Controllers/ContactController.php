<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function show()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'phone' => 'nullable|string|max:20',
            'organization' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
        ]);

        // Save to database
        $contact = Contact::create($validated);

        // Send email
        try {
            Mail::to(config('mail.from.address'))->send(new ContactFormMail($contact));
        } catch (\Exception $e) {
            // Log the error but don't stop the process
            \Log::error('Failed to send contact form email: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }
}
