<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class SendContactEmailController extends Controller
{
    public function send(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|email|min:2|max:255',
            'message' => 'required|string|min:2|max:255'
        ]);

        Mail::to("chaingangtestacc@gmail.com")->send(new ContactMail($data));
        return response()->json(['success' => true], 200);
    }
}
