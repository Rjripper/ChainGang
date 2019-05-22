<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function  index()
    {
        // Get 9 Products
        // Paginate It
        // Return view with products
        
        // Loop them in the view
        // add the urls to add them to cart

        $products = Product::paginate(9);

        return view('klant.body.products.products', compact('products'));
    }
}
