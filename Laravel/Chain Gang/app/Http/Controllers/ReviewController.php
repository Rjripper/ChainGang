<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Review;
use App\Product;

class ReviewController extends Controller
{
    //

    public function index()
    {
        $reviews = Review::all();
        return view("dashboard.body.product-details.details", compact("reviews"));
    }

    public function store(Request $request, Product $product)
    {
        
        $request->validate([            
            'title' => 'required',
            'message' => 'required',
         ]);

         $review = new Review;
         $user = Auth::user();
         $review->id = $request->id;     
         $review->customer_id = $user->id;   
         $review->product_id = $product->id; 
         $review->rating = $request->rating;
         $review->title = $request->title;
         $review->message = $request->message;
         
         
         //Save Review
         $review->save();

         return redirect()->back();
    }
}
