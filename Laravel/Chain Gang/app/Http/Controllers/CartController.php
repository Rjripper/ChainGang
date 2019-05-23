<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function addItem(Request $request, Product $product)
    {
        // Get ID of Product adding to cart
        // check if session exists,
        // if session exists check if product->id exists?
        // if product->id exists, put the amount +1.
        // save the new session and return the session
        $cart_session = session('cart_session');

        if($cart_session != null) {

            if(array_key_exists($product->id, $cart_session)) {

                $cart_session[$product->id]['amount']++;

            } else {

                $cart_session[$product->id] = ['amount' => 1];
            }

        } else {
            $cart_session = array();

            $cart_session[$product->id] = ['amount' => 1];
        }

        // // Store a piece of data in the session...
        session(['cart_session' => $cart_session]);

        return response()->json(['cart_session' => $cart_session]);
    }

    public function removeItem(Request $request, Product $product)
    {
        // Get ID of Product adding to cart
        // check if session exists,
        // if session exists check if product->id exists?
        // if product->id exists, put the amount +1.
        // save the new session and return the session
        $cart_session = session('cart_session');

        if($cart_session != null) {

            if(array_key_exists($product->id, $cart_session)) {

                $cart_session[$product->id]['amount'] = null;
                unset($cart_session[$product->id]);
            }

        }

        // // Store a piece of data in the session...
        session(['cart_session' => $cart_session]);

        return response()->json(['cart_session' => $cart_session]);
    }
}
