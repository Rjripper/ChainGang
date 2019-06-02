<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderItem;
use App\Status;
use App\User;
use App\Customer;
use App\Product;
use Validator;
use Carbon\Carbon;

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

    public function store(Request $request) {
        $order_items = [];
        $order_items = $request->order_items;

        $rules = $this->rulesCreateOrder();
        
        $data = Validator::make($request->all(), $rules);
        if ($data->fails()) {
            return response()->json(['errors'=>$data->errors()], 422);
        }
        
        $status_id = Status::where('title', '=', $request->status)->first();
        $user_id = User::where('username', '=', $request->creator)->first();
        $customer_id = Customer::where('email', '=', $request->customer)->first();

        $order = new Order;
        $order->status_id = $status_id->id;
        $order->user_id = $user_id->id;
        $order->customer_id = $customer_id->id;
        $order->track_and_trace = $request->track_and_trace;
        $order->order_date = Carbon::parse($request->order_date);
        $order->shipped_date = Carbon::parse($request->ship_date);
        $order->save();
    }

    protected function rulesCreateOrder()
    {
        return [
            'title' => ['required'],
            'status' => ['required'],
            'creator' => ['required'],
            'customer' => ['required'],
            'track_and_trace' => ['required'],
            'order_date' => ['required'],
            'status' => ['required'],
            'ship_date' => ['required'],
            'order_items' => ['required'],
        ];
    }
}
