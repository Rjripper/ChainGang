<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{

    public function search(Request $request)
    {
        $search = $request->get('search');

        if(!empty($search))
        {
            $products = Product::where('product_name', 'LIKE', "%$search%")->orWhere('description', 'LIKE', "%$search%")
            ->orWhere('specifications', 'LIKE', "%$search%")->latest()->paginate(9);
        } else {
            $products = Product::latest()->paginate(9);
        }

        return view('klant.body.products.products', compact('products'));
    }

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

        return view('klant.body.product-details.products-details', compact('product'));
    }

    public function indexWithCategory(Category $category)
    {
        $products = Product::where('category_id', $category->id)->paginate(9);

        return view('klant.body.products.products', compact('products'));
    }

    public function sort(Request $request)
    {
        $products = Product::orderBy($request->input('sort'), $request->input('order_by'))->paginate(9);
        return view('klant.body.products.products', compact('products'));
    }
}
