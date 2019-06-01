<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Product;
use App\Brand;
use App\Review;
use App\Sale;
use App\Category;
use App\Type;


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


    /*
        Show all Products for Dashboard Index
    */
    public function productIndex(){

        $products = Product::all();

        return view('dashboard.body.products.index', compact('products'));
    }

    public function productShow($id){

        $products = Product::findOrFail($id);

        return view('dashboard.body.products.view', compact('products'));
    }

    public function createProduct(){
        
        //haal alle info + foreign key info op.
        $product = Product::all();
        $brands = Brand::all();
        $types = Type::all();
        $categories = Category::all();

        //gebruik compact zodat de info gezien kan worden
        return view('dashboard.body.products.create', compact('product', 'brands', 'categories', 'types'));

    }

    public function storeProduct(Request $request){

        //valideer
        $request->validate([            
            'product_name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required',
            'description' => 'required|min:1',
            'specifications' => 'required',
            'brand_id' => 'required',
            'type_id' => 'required',
            'category_id' => 'required',            
         ]);


        //maak product
        $product = new Product;

        //haal request data op en sla op in product variabelen   
        $product->product_name = $request->product_name;  
        $product->price = $request->price;    
        $product->description = $request->description; 
        $product->specifications = $request->specifications;
        $product->brand_id = $request->brand_id;
        $product->type_id = $request->type_id;
        $product->category_id = $request->category_id;

        //plaatje opslaan    
        if(empty($request->image))
        {
            $product->product_images = public_path('images/products/uploads/default.jpg');
        } else {            
            $product->product_images = $this->resizeImage(
                                                        $request->image,
                                                        'images/products/uploads/',
                                                        '150',
                                                        '150',
                                                        Input::file('image'));
        }

        //is je data niet zeker? gebruik dd();
        //dd($product);
        //dd($request);

        //sla product op
        $product->save();

        //return naar index
        return redirect()->action('ProductController@productIndex');

    }

    public function editProduct($id){

        $product = Product::findOrFail($id);
        $brands = Brand::all();
        $types = Type::all();
        $categories = Category::all();


        return view('dashboard.body.products.update', compact('product', 'brands', 'categories', 'types'));
        
    }


    public function updateProduct(Request $request, Product $product){

        $request->validate([            
            'product_name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required',
            'description' => 'required|min:1',
            'specifications' => 'required',
            'brand_id' => 'required',
            'type_id' => 'required',
            'category_id' => 'required',            
         ]);


         $product->product_name = $request->product_name;  
         $product->price = $request->price;    
         $product->description = $request->description; 
         $product->specifications = $request->specifications;
         $product->brand_id = $request->brand_id;
         $product->type_id = $request->type_id;
         $product->category_id = $request->category_id;
 
 
         if(empty($request->image))
         {
             $product->product_images = public_path('images/products/uploads/default.jpg');
         } else {            
             $product->product_images = $this->resizeImage(
                                                         $request->image,
                                                         'images/products/uploads/',
                                                         '150',
                                                         '150',
                                                         Input::file('image'));
         }

         $product->save();

         return redirect()->action('ProductController@productIndex');
 

    }
}
