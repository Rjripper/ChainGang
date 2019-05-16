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

Route::get('/newsletter', function() {
    return view('dashboard.body.newsletter.index');
});

Route::get('/newsletter/1/', function() {
    return view('dashboard.body.newsletter.view');
})->name('newsletter-view');

Route::get('/newsletter/update', function() {
    return view('dashboard.body.newsletter.update');
})->name('newsletter-edit');

Route::get('/newsletter/create', function() {
    return view('dashboard.body.newsletter.create');
})->name('newsletter-create');