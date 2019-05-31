<?php

namespace App\Http\Controllers\Auth;

use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'min:2'],
            'last_name' => ['required', 'string','min:2'],
            'address' => ['required', 'string'],
            'city' => ['required', 'string'],
            'zip_code' => ['required', 'string' , 'min:6', 'max:6'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
            'phonenumber' => ['required', 'string', 'min:9'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'has_newsletter'=> ['boolean'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Customer
     */
    protected function create(array $data)
    {
        return Customer::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'address' => $data['address'],
            'city' => $data['city'],
            'zip_code' => $data['zip_code'],
            'email' => $data['email'],
            'phonenumber' => $data['phonenumber'],
            'password' => Hash::make($data['password']),
            'has_newsletter' => $data['has_newsletter'],
        ]);
    }
}
