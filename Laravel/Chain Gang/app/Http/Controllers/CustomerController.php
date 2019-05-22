<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;

class CustomerController extends Controller
{
    /**
     * Display Authenticated Users Details
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        return view('klant.index', compact('user'));
    }

    /**
     * Display Orders resource
    */
    public function orders()
    {
        $currentUser = Auth::user();
        $orders = App\Orders::where('customer_id', $currentUser->id)->get();

        return view('klant.user-details.my-orders', compact('orders'));
    }
}
