<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WantsNewsletter;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function signUp(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|unique:wanting_newsletters|max:255'
        ]);

        $wants = new WantsNewsletter;
        $wants->email = $data['email'];

        $wants->save();

        Mail::to($wants->email)->send("U heeft zich geregistreerd voor de nieuwsletters van Chain Gang");

        return back();


        //Validate Email Input
        //Create Migration Non-Registered newsletter people
        //id, unique email
        //NewsletterEntry -> email fillable
        //Mail::to (email) 
        
    }
}
