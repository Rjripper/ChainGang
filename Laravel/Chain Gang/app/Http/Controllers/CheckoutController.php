<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Order;
use App\OrderItem;
use Carbon\Carbon;

class CheckoutController extends Controller
{
    public function store(Request $request)
    {
        // Check Session cart
        // If session doesn't exist
        // Return
        // if exists?
        // create Order
        // create OrderItem for each item in session
        // return with response YAY!

        $cart_session = session('cart_session');

        if($cart_session != null) {


            $order = new Order;
            $order->customer_id = Auth::user()->id;
            $order->order_date = Carbon::now();

            $order->save();

            $products = array();
            foreach ($cart_session as $key => $value) {
                $product = Product::where('id', $key)->first();
                $product->amount = $cart_session[$key]['amount'];
                array_push($products, $product);
            }

            foreach($products as $product) {
                $order_item = new OrderItem;
                $order_item->order_id = $order->id;
                $order_item->product_id = $product->id;
                $order_item->amount = $product->amount;
                $order_item->save();
            }

            $request->session()->forget('cart_session');

            return redirect('/account/bestellingen');

        } else {
            return back();
        }
    }
}
