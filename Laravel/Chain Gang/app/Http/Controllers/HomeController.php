<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Sale;
use App\Review;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     //$this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Newest Product
        // Product in Sale
        // Reviews

        $newest_products = Product::paginate(6);
        $products_in_sale = Sale::paginate(6);
        $reviews = Review::paginate(3);

        return view('klant.body.home.home', compact('newest_products', 'products_in_sale', 'reviews'));
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

    /**
     * Display FAQ Resource
     */
    public function faq()
    {
        return view('klant.body.faq.faq');
    }
    
    /**
     * Display Shipping & Return Resource
     */
    public function shippingAndReturn()
    {
        return view('klant.body.shipping-retour.shipping-retour');
    }

    /**
     * Display About Resource
     */
    public function about()
    {
        return view('klant.body.about.about');
    }

    /**
     * Display Contact Resource
     */
    public function contact()
    {
        return view('klant.body.contact.contact');
    }

    
}
