<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sale;
use App\Product;
use App\User;
use Carbon\Carbon;

class SaleController extends Controller
{
    //

    public function indexSale(){

        $sales = Sale::all();
        
        return view('dashboard.body.sales.index', compact('sales'));
    }

    public function showSale($id){

        $sale = Sale::findOrFail($id);
        $products = Product::all();
        $users = User::all();
        
        //gebruik compact zodat de info gezien kan worden
        return view('dashboard.body.sales.view', compact('sale', 'products', 'users'));
    }

    public function deleteSale($id){

        $sale = Sale::findOrFail($id);

        $sale->delete();

        return response()->json(['success' => true], 200);

    }

    public function createSale(){
        
        //haal alle info + foreign key info op.
        $sale = Sale::all();
        $products = Product::all();
        $users = User::all();


        //gebruik compact zodat de info gezien kan worden
        return view('dashboard.body.sales.create', compact('sale', 'products', 'users'));

    }

    public function storeSale(Request $request){

        
        $request->validate([ 
            'title' => 'required',           
            'sale' => 'required',
            'product_id' => 'required',
            'user_id' => 'required',
            'start_date' => 'required', 
            'end_date' => 'required',           
         ]);


        //maak product
        $sale = new Sale;

        //haal request data op en sla op in product variabelen
        $sale->title = $request->title;
        $sale->sale = $request->sale;
        $sale->product_id = $request->product_id;
        $sale->user_id = $request->user_id;
        $sale->start_date =  Carbon::parse($request->start_date);   
        $sale->end_date = Carbon::parse($request->end_date);      
 

        //is je data niet zeker? gebruik dd();
        // dd($sale);
        //dd($request);

        //sla product op
        $sale->save();

        //return naar index
        return redirect()->action('SaleController@indexSale');

    }


    public function editSale($id){

        $sale = Sale::findOrFail($id);
        $products = Product::all();
        $users = User::all();


        //gebruik compact zodat de info gezien kan worden
        return view('dashboard.body.sales.update', compact('sale', 'products', 'users'));
        
    }


    public function updateSale(Request $request, $id){

        $sale = Sale::findOrFail($id);

        $request->validate([ 
            'title' => 'required',           
            'sale' => 'required',
            'product_id' => 'required',
            'user_id' => 'required',
            'start_date' => 'required', 
            'end_date' => 'required',           
         ]);



        //haal request data op en sla op in product variabelen
        $sale->title = $request->title;
        $sale->sale = $request->sale;
        $sale->product_id = $request->product_id;
        $sale->user_id = $request->user_id;
        $sale->start_date =  Carbon::parse($request->start_date);   
        $sale->end_date = Carbon::parse($request->end_date);      
 

        //is je data niet zeker? gebruik dd();
        // dd($sale);
        //dd($request);

        //sla product op
        $sale->save();
   

         return redirect()->action('SaleController@indexSale'); 

    }


    public function delete(Sale $sale)
    {
        $sale = Sale::findOrFail($sale->id);
        $sale->delete();
 
        return response()->json(['success' => true], 200);
    }

}