<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('dashboard.index');
});


/*
        Newsletters
*/
Route::get('/newsletter', function() {
    return view('dashboard.body.newsletter.index');
});

Route::get('/newsletter/create', function() {
    return view('dashboard.body.newsletter.create');
})->name('newsletter-create');


Route::get('/newsletter/1/', function() {
    return view('dashboard.body.newsletter.view');
})->name('newsletter-view');

Route::get('/newsletter/update', function() {
    return view('dashboard.body.newsletter.update');
})->name('newsletter-edit');


/*
        Orders
*/
Route::get('/orders', function() {
    return view('dashboard.body.orders.index');
});

Route::get('/orders/create', function() {
    return view('dashboard.body.orders.create');
})->name('orders-create');

Route::get('/orders/1/', function() {
    return view('dashboard.body.orders.view');
})->name('order-view');

Route::get('/orders/update', function() {
    return view('dashboard.body.orders.update');
})->name('orders-edit');


/*
        Sales
*/

Route::get('/sales', function() {
    return view('dashboard.body.sales.index');
});

Route::get('/sales/create', function() {
    return view('dashboard.body.sales.create');
})->name('sales-create');

Route::get('/sales/1/', function() {
    return view('dashboard.body.sales.view');
})->name('sales-view');

Route::get('/sales/update', function() {
    return view('dashboard.body.sales.update');
})->name('sales-edit');


