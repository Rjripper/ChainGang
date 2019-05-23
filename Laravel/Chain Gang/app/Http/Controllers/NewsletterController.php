<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WantsNewsletter;

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

        return back();


        //Validate Email Input
        //Create Migration Non-Registered newsletter people
        //id, unique email
        //NewsletterEntry -> email fillable
        //Mail::to (email) 
        
    }
}
