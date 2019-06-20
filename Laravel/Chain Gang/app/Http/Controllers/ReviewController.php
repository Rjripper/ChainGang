<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Review;
use App\Product;
use App\Customer;
use Tymon\JWTAuth\Claims\Custom;
use Validator;

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

    //Handle frontend review
    public function store(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);
        $request->validate(
            [
                'title' => 'required|min:5',
                'message' => 'required|min:5',
                'rating' => 'integer|required|min:1'    
            ]);

            $review = new Review();
            $user = Auth::user();
            
            $review->customer_id = $user->id;   
            $review->product_id = $product->id; 
            $review->rating = $request->rating;
            $review->title = $request->title;
            $review->message = $request->message;

            // dd($review);
            // dd($request);

            $review->save();

            return redirect()->action('ReviewController@reviewIndex');
    }

    // Handle backend review
    public function storeReview(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|min:5',
                'message' => 'required|min:5',
                'rating' => 'integer|required|min:1'    
            ]);

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

    public function storeReviewAdmin(Request $request) 
    {
        $rules = $this->rulesReview();
        
        $data = Validator::make($request->all(), $rules);
        if ($data->fails()) {
            return response()->json(['errors'=>$data->errors()], 422);
        }

        $review = new Review;

        $review->id = $request->id;     
        $review->customer_id = $request->customer_id;   
        $review->product_id = $request->product_id; 
        $review->rating = $request->rating;
        $review->title = $request->title;
        $review->message = $request->message;

        // dd($review);
        // dd($request);

        $review->save();

        return response()->json(['succes' => true], 200);
    }

    public function editReview($id)
    {
        $review = Review::findOrFail($id);
        $customers = Customer::all();
        $products = Product::all();

        return view('dashboard.body.reviews.update', compact('review', 'customers', 'products'));
    }

    public function updateReview(Request $request, Review $review)
    {
        $review = Review::findOrFail($review->id);

        $rules = $this->rulesUpdateReview();
        
        $data = Validator::make($request->all(), $rules);
        if ($data->fails()) {
            return response()->json(['errors'=>$data->errors()], 422);
        }
            
        $review->customer_id = $request->customer_id;
        $review->product_id = $request->product_id; 
        $review->rating = $request->rating;
        $review->title = $request->title;
        $review->message = $request->message;

        // dd($review);
        // dd($request);

        $review->save();

        return response()->json(['succes' => true], 200);
    }

    public function deleteReview(Review $review)
    {
        $review = Review::findOrFail($review->id);

        $review->delete();

        return response()->json(['success' => true], 200);
    }

    protected function rulesReview()
    {
        return [
            'title' => ['required', 'min:5'],
            'message' => ['required', 'min:5'],
            'rating' => ['required', 'integer', 'min:1']
        ];
    }

    protected function rulesUpdateReview()
    {
        return [
            'title' => ['required', 'min:5'],
            'message' => ['required', 'min:5'],
            'rating' => ['required', 'integer', 'min:1'],
            'created_at' => ['required']
        ];
    }
}
