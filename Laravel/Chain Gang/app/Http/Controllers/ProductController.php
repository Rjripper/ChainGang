<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Brand;
use App\Review;
use App\Sale;
use App\Category;
use App\Type;
use phpDocumentor\Reflection\Types\Float_;

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

        // get all brands
        $brands = Brand::orderBy('title', 'asc')->get();

        // get all categories
        $categories = Category::orderBy('title', 'asc')->get();

        // get all types
        $types = Type::orderBy('title', 'asc')->get();

        return view('klant.body.products.products', compact('products', 'brands', 'categories', 'types'));
    }

    public function index(Request $request)
    {
        // Get 9 Products
        // Paginate It
        // Return view with products

        // Loop them in the view
        // add the urls to add them to cart
        $sort = $request->get('sort');
        $order_by = $request->get('order_by');

        if(!empty($sort) && !empty($order_by))
        {
            $products = Product::orderBy($sort, $order_by)->get();
        } else {
            $products = Product::get();
        }

        // get all brands
        $brands = Brand::orderBy('title', 'asc')->get();

        // get all categories
        $categories = Category::orderBy('title', 'asc')->get();

        // get all types
        $types = Type::orderBy('title', 'asc')->get();

        return view('klant.body.products.products', compact('products', 'brands', 'categories', 'types'));
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

    public function indexWithCategory(Request $request, Category $category)
    {
        // Get the categories by id
        // Return the vieuw with only the selected categorie

        $sort = $request->get('sort');
        $order_by = $request->get('order_by');

        if(!empty($sort) && !empty($order_by))
        {
            $products = Product::orderBy($sort, $order_by)
                ->whereIn('category_id', Category::whereId($category->id)->get()->pluck('id'))->get();
        } else {
            $products = Product::whereIn('category_id', Category::whereId($category->id)->get()->pluck('id'))->get();

        }

        $categories = Category::orderBy('title', 'asc')->get();

        $brands = Brand::orderBy('title', 'asc')->get();

        $types = Type::orderBy('title', 'asc')->get();

        return view('klant.body.products.products', compact('products', 'brands', 'categories', 'types'));
    }

    // public function sort(Request $request)
    // {
    //     $products = Product::orderBy($request->input('sort'), $request->input('order_by'))->paginate(9);
    //     return view('klant.body.products.products', compact('products'));
    // }

    public function indexWithBrand(Request $request, Brand $brand)
    {
        // Get the brand by id
        // Rerturn the view with only the selected brand
        $sort = $request->get('sort');
        $order_by = $request->get('order_by');

        if(!empty($sort) && !empty($order_by))
        {
            $products = Product::orderBy($sort, $order_by)
                ->whereIn('brand_id', Brand::whereId($brand->id)->get()->pluck('id'))->get();
        } else {
            $products = Product::whereIn('brand_id', Brand::whereId($brand->id)->get()->pluck('id'))->get();

        }
        
        $brands = Brand::orderBy('id', 'asc')->get();

        $categories = Category::orderBy('title', 'asc')->get();

        $types = Type::orderBy('title', 'asc')->get();

        return view('klant.body.products.products', compact('products', 'brands', 'categories', 'types'));
    }

    public function indexWithType(Request $request, Type $type)
    {
        // Get the type by id
        // Return the view with only the selected type
        $sort = $request->get('sort');
        $order_by = $request->get('order_by');

        if(!empty($sort) && !empty($order_by))
        {
            $products = Product::orderBy($sort, $order_by)
                ->whereIn('type_id', Type::whereId($type->id)->get()->pluck('id'))->get();
        } else {
            $products = Product::whereIn('type_id', Type::whereId($type->id)->get()->pluck('id'))->get();
        }

        $types = Type::orderBy('title', 'asc')->get();

        $brands = Brand::orderBy('title', 'asc')->get();

        $categories = Category::orderBy('title', 'asc')->get();

        return view('klant.body.products.products', compact('products', 'brands', 'categories', 'types'));
    }
}
