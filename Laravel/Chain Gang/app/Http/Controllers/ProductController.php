<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function  index()
    {
        // Get 9 Products
        // Paginate It
        // Return view with products
        // Loop them in the view
        // add the urls to add them to cart

        return view('klant.body.products.products');
    }
}
