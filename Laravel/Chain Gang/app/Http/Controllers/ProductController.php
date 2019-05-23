<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Review;
use App\Sale;


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
        $products = Product::orderBy(DB::raw('RAND()'))->take(4)->get();

        $product_in_sale = Sale::where('product_id', $product->id)->first();

        if($product_in_sale != null)
        {
            $price_off = round(($product->price / 100 ) * $product_in_sale->sale, 2);
            $new_price = $product->price - $price_off;
        } else {
            $new_price = null;
        }

        $reviews_amount = $reviews->count();

        return view('klant.body.product-details.products-details',
               compact('product', 'reviews', 'brands', 'products', 'product_in_sale', 'price_off', 'new_price', 'reviews_amount' ));
    }

}
