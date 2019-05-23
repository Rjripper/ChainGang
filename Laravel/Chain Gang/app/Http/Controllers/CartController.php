<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    //CartController@addItem
    public function addItem(Request $request, Product $product)
    {
        return response()->json(['success' => true]);
    }
}
