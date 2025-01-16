<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/productdDetails', function () {
    return view('productDetails');
});
Route::get('/cart', function () {
    return view('cart');
});




// Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.details');

