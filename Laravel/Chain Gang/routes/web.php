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


//Sidepanels
Route::get('/', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::get('/users', function() {
    return view('dashboard.body.users.index');
})->name('users');

Route::get('/customers', function() {
    return view('dashboard.body.customers.index');
})->name('customers');

Route::get('/products', function() {
    return view('dashboard.body.products.index');
})->name('products');

Route::get('/orders', function() {
    return view('dashboard.body.orders.index');
})->name('orders');

Route::get('/newsletters', function() {
    return view('dashboard.body.newsletters.index');
})->name('newsletters');

Route::get('/reviews', function() {
    return view('dashboard.body.reviews.index');
})->name('reviews');

Route::get('/sales', function() {
    return view('dashboard.body.sales.index');
})->name('sales');



// User
Route::get('/user/create/', function() {
    return view('dashboard.body.users.create');
});

Route::get('/user/edit/1/', function() {
    return view('dashboard.body.users.update');
});

Route::get('/user/1/', function() {
    return view('dashboard.body.users.view');
});

Route::get('/user/delete/', function() {
    return view('dashboard.body.users.delete');
});







