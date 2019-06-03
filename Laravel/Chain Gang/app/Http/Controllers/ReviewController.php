<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Review;
use App\Product;
use App\Customer;

class ReviewController extends Controller
{
    //

    public function reviewIndex()
    {
        $reviews = Review::all();

        return view("dashboard.body.reviews.index", compact("reviews"));
    }

    public function reviewShow(Request $request, Review $review)
    {
        $review = Review::where('id', $review->id)->get();

        return view('dashboard.body.reviews.view', compact('review'));
    }

    public function createReview()
    {
        $review = Review::all();
        $customers = Customer::all();
        $products = Product::all();

        return view('dashboard.body.reviews.create', compact('review', 'customers', 'products'));
    }

    public function storeReview(Request $request)
    {
        $request->validate(
            [
                'title' => 'required',
                'message' => 'required',
                'rating' => 'integer|required|min:1'    
            ]);
            
            $review = new Review;

            $review = new Review;
            $user = Auth::user();
            $review->id = $request->id;     
            $review->customer_id = $user->id;   
            $review->product_id = $request->product_id; 
            $review->rating = $request->rating;
            $review->title = $request->title;
            $review->message = $request->message;

            // dd($review);
            // dd($request);

            $review->save();

            return redirect()->action('ReviewController@reviewIndex');
    }

    public function store(Request $request, Product $product)
    {
        
        $request->validate([            
            'title' => 'required',
            'message' => 'required',
            'rating' => 'integer|required|min:1'
         ]);

         $review = new Review;
         $user = Auth::user();
         $review->id = $request->id;     
         $review->customer_id = $user->id;   
         $review->product_id = $product->id; 
         $review->rating = $request->rating;
         $review->title = $request->title;
         $review->message = $request->message;
         
         dd($product);
         dd($request);
         //Save Review
         $review->save();

         return redirect()->back();
    }
}
