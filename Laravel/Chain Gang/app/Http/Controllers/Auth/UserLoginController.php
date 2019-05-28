<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    protected $redirectTo = '/admin/dashboard';

    public function __construct()
    {
        $this->middleware('guest');

    }

    public function showLoginForm() 
    {
        return view('dashboard.auth.login');
    }

    public function login(Request $request) 
    {
        // Validate the form data
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        // Attempt to login
        if (Auth::guard('user')->attempt(['username' => $request->username, 'password' => $request->password])) {
            // redirect to dashboard
            return redirect()->intended(route('dashboard'));
        }

        return redirect()->back()->withInput($request->only('email'))->withErrors("Username and password where incorrect");
    }

}
