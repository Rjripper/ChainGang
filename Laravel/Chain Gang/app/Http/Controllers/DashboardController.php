<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Order;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function index()
    {
        $now = Carbon::now()->locale('nl_NL');
        $month_name = ucfirst(trans($now->monthName));
        $current_year = $now->year;
        $orders = Order::whereMonth('order_date', '=', $now->month)->get();
        $total_price = 0;

        foreach($orders as $order) {
            $total_price += $order->total_price($order);
        }

        return view('dashboard.body.home.view', compact('month_name', 'current_year', 'orders', 'total_price'));
    }
}
