<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend-views.pages.home');
});
Route::get('/products', function () {
    return view('frontend-views.pages.product');
});
Route::get('/create-account', function () {
    return view('frontend-views.pages.createAccount');
});
Route::get('/product-details', function () {
    return view('frontend-views.pages.productDetails');
});
Route::get('/contact', function () {
    return view('frontend-views.pages.contact');
});
// page two pages
Route::get('/home2', function () {
    return view('frontend-views.pages2.home');
});
Route::get('/shop', function () {
    return view('frontend-views.pages2.shop');
});
