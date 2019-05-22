<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use App\Category;
use App\Type;

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

        // get all brands
        $brands = Brand::all();

        // get all categories
        $categories = Category::all();

        // get all types
        $types = Type::all();

        return view('klant.body.products.products', compact('products', 'brands', 'categories', 'types'));
    }

    public function show(Request $request, Product $product)
    {
        //Get Product to show from route {product}
        //Return the view with the product id

        return view('klant.body.product-details.details', compact('product'));
    }

    // public function getBrands()
    // {
    //     $brands = Brand::all();

    //     return view('klant.body.products.products', compact('brands'));
    // }
}
