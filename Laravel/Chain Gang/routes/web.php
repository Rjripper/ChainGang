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
// route naar de index 

Route::get('/', function () 
{
    return view('klant.body.home.index');
});

// route naar de mijn account
Route::get('/myaccount', function()
{
    return view('klant.body.user-details.myaccount');
});

// route naar de checkout
Route::get('/checkout', function()
{
    return view('klant.body.checkout.checkout');
});

// route naar de login
Route::get('/login', function()
{
    return view('klant.body.login.login');
});

/*
    Home
*/
Route::get('/home', function () 
{
    return view('klant.body.home.home');
});
