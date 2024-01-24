<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('frontend-views.pages.index');
});
Route::get('/shop', function () {
    return view('frontend-views.pages.shop');
});
Route::get('/projects', function () {
    return view('frontend-views.pages.projects');
});
Route::get('/contact', function () {
    return view('frontend-views.pages.contact');
});
Route::get('/tutorials', function () {
    return view('frontend-views.pages.tutorials');
});
Route::get('/why-rey', function () {
    return view('frontend-views.pages.why-rey');
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


