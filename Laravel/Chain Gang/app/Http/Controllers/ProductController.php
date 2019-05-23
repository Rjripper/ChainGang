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

        //get prices lowest and min
        // $pricesAsc = Product::orderBy('price')->first()->get();
        // $pricesDesc = Product::max('price');

        

        return view('klant.body.products.products', compact('products', 'brands', 'categories', 'types', 'pricesAsc', 'pricesDesc'));
    }

    public function show(Request $request, Product $product)
    {
        //Get Product to show from route {product}
        //Return the view with the product id

        return view('klant.body.product-details.details', compact('product'));
    }

    public function indexWithCategory(Category $category)
    {
        // Get the categories by id
        // Return the vieuw with only the selected categorie
        $products = Product::whereIn('category_id', Category::whereId($category->id)->get()->pluck('id'))->get();//->paginate(9);

        $categories = Category::orderBy('title', 'asc')->get();

        $brands = Brand::orderBy('title', 'asc')->get();

        $types = Type::orderBy('title', 'asc')->get();

        return view('klant.body.products.products', compact('products', 'brands', 'categories', 'types'));
    }

    public function indexWithBrand(Brand $brand)
    {
        // Get the brand by id
        // Rerturn the view with only the selected brand
        $products = Product::whereIn('brand_id', Brand::whereId($brand->id)->get()->pluck('id'))->get();//->paginate(9);

        $brands = Brand::orderBy('id', 'asc')->get();

        $categories = Category::orderBy('title', 'asc')->get();

        $types = Type::orderBy('title', 'asc')->get();

        return view('klant.body.products.products', compact('products', 'brands', 'categories', 'types'));
    }

    public function indexWithType(Type $type)
    {
        // Get the type by id
        // Return the view with only the selected type
        $products = Product::whereIn('type_id', Type::whereId($type->id)->get()->pluck('id'))->get();//->paginate(9);

        $types = Type::orderBy('title', 'asc')->get();

        $brands = Brand::orderBy('title', 'asc')->get();

        $categories = Category::orderBy('title', 'asc')->get();

        return view('klant.body.products.products', compact('products', 'brands', 'categories', 'types'));
    }
}
