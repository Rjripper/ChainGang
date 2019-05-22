<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Display Checkout Resource
    */
    public function checkout()
    {
        return view('klant.body.checkout.checkout');
    }

    /**
     * Display Cart Resource
     */
    public function cart()
    {
        return view('klant.body.cart.cart');
    }

    public function faq()
    {
        return view('klant.body.faq.faq');
    }
    
    public function shippingAndReturn()
    {
        return view('klant.body.shipping-retour.shipping-retour');
    }
}
