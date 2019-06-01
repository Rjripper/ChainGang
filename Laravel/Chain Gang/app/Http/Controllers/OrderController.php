<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderItem;

class OrderController extends Controller
{
    public function show(Order $order)
    {
        //Get the order->id
        
        $order_items = OrderItem::where('order_id', $order->id)->get();

        return view('klant.body.user-details.my-order-items', compact('order_items', 'order'));
    }


    // Admin Part
    public function index()
    {
        //Get All Orders
        $orders = Order::All();

        return view('dashboard.body.orders.index', compact('orders'));
    }
}
