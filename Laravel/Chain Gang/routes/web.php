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

Route::get('/', function () 
{
    return view('klant.body.home.home');
});

/*
        About 
*/
Route::get('/about', function () 
{
    return view('klant.body.about.about');
});

/*
        Products
*/
// link zou dan /products/herenfietsen worden
// '/products/{$category}'
Route::get('/products', function () 
{
    return view('klant.body.products.products');
});
