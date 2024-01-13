<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('frontend-views.pages.index');
});
Route::get('/shop', function () {
    return view('frontend-views.pages.shop');
});
Route::get('/home', function () {
    return view('frontend-views.pages.home');
});
Route::get('/products-&-finishes', function () {
    return view('frontend-views.pages.products-&-finishes
    ');
});
Route::get('/create-account', function () {
    return view('frontend-views.pages.create-account');
});
Route::get('/product-details', function () {
    return view('frontend-views.pages.product-details');
});
Route::get('/shop-kitchen-cabinets', function () {
    return view('frontend-views.pages.shop-kitchen-cabinets');
});


