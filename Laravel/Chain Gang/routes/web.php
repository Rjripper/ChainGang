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
    return view('klant.body.home.home');
});

/*
    Account
 */
// route naar de mijn account
Route::get('/my-account', function()
{
    return view('klant.body.user-details.my-account');
});

// route naar mijn orders
Route::get('my-orders',function()
{
    return view('klant.body.user-details.my-orders');
});

// route naar de checkout
Route::get('/checkout', function()
{
    return view('klant.body.checkout.checkout');
});

/*
    login
*/

// route naar de login
Route::get('/login', function()
{
    return view('klant.body.login.login');
});

// route naar de forgotpassword 
Route::get('/forgotPassword', function()
{
    return view('klant.body.forgot-password.forgot-password');
});

// route naar de registratie pagina
Route::get('/registreer',function()
{
    return view('klant.body.register.register');
});

// Route naar verzenden en reoutneren
Route::get('/shipping-retour', function()
{
    return view('klant.body.shipping-retour.shipping-retour');
});

// Route naar de FAQ
Route::get('/faq', function()
{
    return view('klant.body.faq.faq');
});

/*
        About 
*/
Route::get('/about', function () 
{
    return view('klant.body.about.about');
});