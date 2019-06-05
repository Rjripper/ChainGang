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

// Admin login 
Route::get('/admin/login', 'Auth\UserLoginController@showLoginForm')->name('userLogin');
Route::post('/admin/login', 'Auth\UserLoginController@login')->name('userLoginSubmit');

Route::group(['middleware' => ['auth:user']], function () {

        Route::get('/admin/dashboard', 'DashboardController@index')->name('dashboard');

        //?????
        Route::get('/admin/customers', function() {
            return view('dashboard.body.customers.index');
        })->name('customers'); 

        // Route::get('/admin/users', function() {
        //     return view('dashboard.body.users.index');
        // })->name('users');

        // ?????


        //index products
        Route::get('/admin/products', 'ProductController@productIndex')->name('products');


        /*
            Users
        */
        // Alle Users
        Route::get('/admin/users', 'UserController@index')->name('users');

        // Aanmaken User
        Route::get('/admin/user/create/', 'UserController@createUser')->name('userCreate');
        Route::post('/admin/users/', 'UserController@storeUser')->name('userStore');

        // Update User
        Route::get('/admin/user/edit/{user}', 'UserController@editUser')->name('editUser');
        Route::patch('/admin/user/{user}/update', 'UserController@updateUser')->name('userUpdate');

        // Delete User
        Route::delete('/admin/users/delete/{user}', 'UserController@deleteUser')->name('deleteUser');

        // View User
        Route::get('/admin/user/{id}', 'UserController@userShow')->name('showUser');

        /*
            Customers
        */
        Route::get('/admin/customer/create/', function() {
            return view('dashboard.body.customers.create');
        });

        Route::get('/admin/customer/edit/1/', function() {
            return view('dashboard.body.customers.update');
        });

        Route::get('/admin/customer/1/', function() {
            return view('dashboard.body.customers.view');
        });

        Route::get('/admin/customer/delete/', function() {
            return view('dashboard.body.customers.delete');
        });


        /*
            Products
        */
        //aanmaken product
        Route::get('/admin/product/create/', 'ProductController@createProduct')->name('productCreate');
        Route::post('/admin/product/', 'ProductController@storeProduct')->name('productStore');


        //updaten product
        Route::get('/admin/product/edit/{product}', 'ProductController@editProduct')->name('editProduct');
        Route::patch('/admin/product/update/{id}', 'ProductController@updateProduct')->name('productUpdate');

        //show product
        Route::get('/admin/product/{product}/', 'ProductController@productShow')->name('productShow');

        //delete
        Route::delete('/admin/product/delete/{product}', 'ProductController@delete')->name('deleteSale');



        //== RJ's Routes
        /*
            Newsletters
        */
        Route::get('/admin/newsletters', function() {
            return view('dashboard.body.newsletters.index');
        })->name('newsletters');

        Route::get('/admin/newsletter/create', function() {
            return view('dashboard.body.newsletters.create');
        });

        Route::get('/admin/newsletter/1/', function() {
            return view('dashboard.body.newsletters.view');
        });

        Route::get('/admin/newsletter/edit/1', function() {
            return view('dashboard.body.newsletters.update');
        });


        /*
            Orders
        */
        Route::get('/admin/orders', function() {
            return view('dashboard.body.orders.index');
        })->name('orders');

        Route::get('/admin/order/create', function() {
            return view('dashboard.body.orders.create');
        });

        Route::get('/admin/order/1/', function() {
            return view('dashboard.body.orders.view');
        });

        Route::get('/admin/order/edit/1', function() {
            return view('dashboard.body.orders.update');
        });


        /*
            Sales
        */

        //index
        Route::get('/admin/sales', 'SaleController@indexSale')->name('sales');

        //aanmaken sale
        Route::get('/admin/sale/create/', 'SaleController@createSale')->name('createSale');
        Route::post('/admin/sales/', 'SaleController@storeSale')->name('storeSale');

        // Route::get('/admin/sale/create', function() {
        //     return view('dashboard.body.sales.create');
        // });

        //updaten sale
        Route::get('/admin/sale/edit/{id}', 'SaleController@editSale')->name('editSale');
        Route::patch('/admin/sale/update/{id}', 'SaleController@updateSale')->name('updateSale');

        //show sale
        Route::get('/admin/sale/{id}/', 'SaleController@showSale')->name('showSale');

        //delete
        Route::delete('/admin/sale/delete/{sale}', 'SaleController@delete')->name('deleteSale');


        // Route::get('/admin/sale/1/', function() {
        //     return view('dashboard.body.sales.view');
        // });

    


        /*
            Reviews
        */
        Route::get('/admin/reviews', function() {
            return view('dashboard.body.reviews.index');
        })->name('reviews');

        Route::get('/admin/review/create', function() {
            return view('dashboard.body.reviews.create');
        });

        Route::get('/admin/review/1/', function() {
            return view('dashboard.body.reviews.view');
        });

        Route::get('/admin/review/edit/1', function() {
            return view('dashboard.body.reviews.update');
        });

        /*
            Brand
        */

        //index
        Route::get('/admin/brands', 'BrandController@index')->name('brands');

        // //aanmaken brand
        Route::get('/admin/brand/create/', 'BrandController@create')->name('createBrand');
        Route::post('/admin/brands/', 'BrandController@store')->name('storeBrand');

        // //updaten brand
        Route::get('/admin/brand/edit/{id}', 'BrandController@edit')->name('editBrand');
        Route::patch('/admin/brand/update/{id}', 'BrandController@update')->name('updateBrand');

        // //show brand
        Route::get('/admin/brand/{id}/', 'BrandController@show')->name('showBrand');

        // //delete
        Route::delete('/admin/brand/delete/{brand}', 'BrandController@delete')->name('deleteBrand');


         /*
            Type
        */        
        //index
        Route::get('/admin/types', 'TypeController@index')->name('types');

        // aanmaken type
        Route::get('/admin/type/create/', 'TypeController@create')->name('createType');
        Route::post('/admin/types/', 'TypeController@store')->name('storeType');

        // updaten type
        Route::get('/admin/type/edit/{id}', 'TypeController@edit')->name('editType');
        Route::patch('/admin/type/update/{id}', 'TypeController@update')->name('updateType');

        // show type
        Route::get('/admin/type/{id}/', 'TypeController@show')->name('showType');

        // //delete
        Route::delete('/admin/type/delete/{type}', 'TypeController@delete')->name('deleteType');


        /*
            Category
        */        
        //index
        Route::get('/admin/categories', 'CategoryController@index')->name('categories');

        // aanmaken type
        Route::get('/admin/category/create/', 'CategoryController@create')->name('createCategory');
        Route::post('/admin/categories/', 'CategoryController@store')->name('storeCategory');

        // updaten type
        Route::get('/admin/category/edit/{id}', 'CategoryController@edit')->name('editCategory');
        Route::patch('/admin/category/update/{id}', 'CategoryController@update')->name('updateCategory');

        // show type
        Route::get('/admin/category/{id}/', 'CategoryController@show')->name('showCategory');
      
        // //delete
        Route::delete('/admin/category/delete/{category}', 'CategoryController@delete')->name('deleteCategory');


});