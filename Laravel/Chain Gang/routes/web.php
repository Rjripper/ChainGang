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
})->name('home');

/*
    About 
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
        Auth 
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


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
Route::get('/products', function () 
{
    return view('klant.body.products.products');
});

/*
    Products details
*/
Route::get('/products/category/fiets', function () 
{
    return view('klant.body.product-details.products-details');
});

/*
    Contact
*/
Route::get('/contact', function () 
{
    return view('klant.body.contact.contact');
});



//========= ADMIN ==========//

//Sidepanels
Route::get('/admin/dashboard', function () {
    return view('dashboard.body.home.view');
})->name('dashboard');

Route::get('/admin/users', function() {
    return view('dashboard.body.users.index');
})->name('users');

Route::get('/admin/customers', function() {
    return view('dashboard.body.customers.index');
})->name('customers');

Route::get('/admin/products', function() {
    return view('dashboard.body.products.index');
})->name('products');


/*
    Users
*/
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


/*
    Customers
*/
Route::get('/customer/create/', function() {
    return view('dashboard.body.customers.create');
});

Route::get('/customer/edit/1/', function() {
    return view('dashboard.body.customers.update');
});

Route::get('/customer/1/', function() {
    return view('dashboard.body.customers.view');
});

Route::get('/customer/delete/', function() {
    return view('dashboard.body.customers.delete');
});


/*
    Products
*/
Route::get('/product/create/', function() {
    return view('dashboard.body.products.create');
});

Route::get('/product/edit/1/', function() {
    return view('dashboard.body.products.update');
});

Route::get('/product/1/', function() {
    return view('dashboard.body.products.view');
});

Route::get('/product/delete/', function() {
    return view('dashboard.body.products.delete');
});



//== RJ's Routes
/*
    Newsletters
*/
Route::get('/newsletters', function() {
    return view('dashboard.body.newsletters.index');
})->name('newsletters');

Route::get('/newsletter/create', function() {
    return view('dashboard.body.newsletters.create');
});

Route::get('/newsletter/1/', function() {
    return view('dashboard.body.newsletters.view');
});

Route::get('/newsletter/edit/1', function() {
    return view('dashboard.body.newsletters.update');
});


/*
    Orders
*/
Route::get('/orders', function() {
    return view('dashboard.body.orders.index');
})->name('orders');

Route::get('/order/create', function() {
    return view('dashboard.body.orders.create');
});

Route::get('/order/1/', function() {
    return view('dashboard.body.orders.view');
});

Route::get('/order/edit/1', function() {
    return view('dashboard.body.orders.update');
});


/*
    Sales
*/
Route::get('/sales', function() {
    return view('dashboard.body.sales.index');
})->name('sales');

Route::get('/sale/create', function() {
    return view('dashboard.body.sales.create');
});

Route::get('/sale/1/', function() {
    return view('dashboard.body.sales.view');
});

Route::get('/sale/edit/1', function() {
    return view('dashboard.body.sales.update');
});


/*
    Reviews
*/
Route::get('/reviews', function() {
    return view('dashboard.body.reviews.index');
})->name('reviews');

Route::get('/review/create', function() {
    return view('dashboard.body.reviews.create');
});

Route::get('/review/1/', function() {
    return view('dashboard.body.reviews.view');
});

Route::get('/review/edit/1', function() {
    return view('dashboard.body.reviews.update');
});
