<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Review;

class ProductController extends Controller
{
    public function index()
    {
        // Get 9 Products
        // Paginate It
        // Return view with products

        // Loop them in the view
        // add the urls to add them to cart

        $products = Product::paginate(9);

        return view('klant.body.products.products', compact('products'));
    }

    public function show(Request $request, Product $product)
    {
        //Get Product to show from route {product}
        //Return the view with the product id
        $reviews = Review::where('product_id', $product->id)->get();
        

        return view('klant.body.product-details.products-details', compact('product', 'reviews'));
    }
}
