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
        $brands = Brand::orderBy('title', 'asc')->get();

        // get all categories
        $categories = Category::orderBy('title', 'asc')->get();

        // get all types
        $types = Type::orderBy('title', 'asc')->get();

        // Get products by brand
        Product::where('brand_id',2)->paginate(3);

        return view('klant.body.products.products', compact('products', 'brands', 'categories', 'types'));
    }

    public function show(Request $request, Product $product)
    {
        //Get Product to show from route {product}
        //Return the view with the product id

        return view('klant.body.product-details.details', compact('product'));
    }

    public function category($id)
    {
        // Get the categories by id
        // Return the vieuw with only the selected categories
        $categories = Category::where('id', $id);

        return view('klant.body.products.products', compact('categories'));
    }
}
