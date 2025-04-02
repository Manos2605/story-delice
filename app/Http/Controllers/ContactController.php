<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        
        // Logique d'envoi d'email ici
        // Mail::to('contact@storydelice.com')->send(new ContactMail($validated));
        
        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}