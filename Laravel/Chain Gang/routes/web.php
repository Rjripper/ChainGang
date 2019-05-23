<?php
use Illuminate\Support\Facades\Route;

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

/*
        Auth 
*/

Auth::routes(['verify' => true]);


Route::get('/', 'HomeController@index')->name('home');

/**
 *  Customer Routes (Group -> Customers)
 */
Route::middleware(['auth'])->group(function(){
    Route::get('/account/overzicht', 'CustomerController@index');
    Route::patch('/account/update/details/{user}', 'CustomerController@updateCustomerInformation');
    Route::patch('/account/update/inlog/{user}', 'CustomerController@customerAccount');
    Route::get('/account/bestellingen', 'CustomerController@orders');
    Route::get('/account/bestellingen/overzicht/{order}', 'OrderController@show');
    Route::post('/review/create/{product}', 'ReviewController@store');
    

    /**
     * Order Routes -> Get, Post, Patch
     */
    Route::post('/order/create', 'CheckoutController@store');
});

// DIT MOET NOG IN DE AUTH MAAR OMDAT DE AUTH NOG NIET KLAAR IS
// NOG NIET MET AUTH
// Route::post('/review/create/{product}', 'ReviewController@store');


/**
 *  Standard Routes
 */
Route::get('/faq', 'HomeController@faq');
Route::get('/shipping-retour', 'HomeController@shippingAndReturn');
Route::get('/overons', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');


/**
 *  Products Routes -> Get, Post, Patch
 */
Route::get('/producten', 'ProductController@index');
Route::get('/producten/categorie/{category}', 'ProductController@indexWithCategory');
Route::get('/producten/merk/{brand}', 'ProductController@indexWithBrand');
Route::get('/producten/type/{type}', 'ProductController@indexWithType');
Route::get('/product/{product}', 'ProductController@show');
Route::get('/producten/zoeken', 'ProductController@search');

/**
 *  Products order
*/
//Route::get('/producten/sort', 'ProductController@sort');

/**
 * Cart Routes -> Get, Post, Patch + Checkout
 */
Route::get('/betalen', 'HomeController@checkout'); // -> Checkout
Route::get('/winkelwagen', 'HomeController@cart'); // -> Cart

Route::post('/product/add/cart/{product}', 'CartController@addItem'); // GET -> Parameter, amount? -> AJAX
Route::post('/product/remove/cart/{product}', 'CartController@removeItem'); // GET -> Parameter id of orderitem in cart -> AJAX

/**
 * NewsLetter Signup
 */
Route::post('/newsletter/signup', 'NewsletterController@signUp');


/**
 * Contact Us Form
 */
Route::post('/contact/send', 'SendContactEmailController@send');



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
