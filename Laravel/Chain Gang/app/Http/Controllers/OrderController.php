<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderItem;
use App\Status;
use App\User;
use App\Customer;
use App\Product;

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

    public function create()
    {
        //Get statusses, users, customers, products
        $statusses = Status::All();
        $users = User::All();
        $customers = Customer::All();
        $products = Product::All();

        return view('dashboard.body.orders.create', compact('statusses', 'users', 'customers', 'products'));

    }
}
