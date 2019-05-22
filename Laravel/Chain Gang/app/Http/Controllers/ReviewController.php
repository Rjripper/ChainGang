<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewController extends Controller
{
    //

    public function index()
    {
        $reviews = Review::all();
        return view("dashboard.body.product-details.details", compact("reviews"));
    }
}
