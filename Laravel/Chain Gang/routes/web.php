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
    return view('dashboard.body.home.view');
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


// Customer
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


//Products
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


/*
        Reviews
*/
Route::get('/reviews', function() {
    return view('dashboard.body.reviews.index');
});

Route::get('/reviews/create', function() {
    return view('dashboard.body.reviews.create');
})->name('reviews-create');

Route::get('/reviews/1/', function() {
    return view('dashboard.body.reviews.view');
})->name('reviews-view');

Route::get('/reviews/update', function() {
    return view('dashboard.body.reviews.update');
})->name('reviews-edit');




