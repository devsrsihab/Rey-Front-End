<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('frontend-views.rey-website-part-1.pages.home');
});
Route::get('/products-&-finishes', function () {
    return view('frontend-views.rey-website-part-1.pages.products-&-finishes
    ');
});
Route::get('/create-account', function () {
    return view('frontend-views.rey-website-part-1.pages.create-account');
});
Route::get('/product-details', function () {
    return view('frontend-views.rey-website-part-1.pages.product-details');
});
Route::get('/shop-kitchen-cabinets', function () {
    return view('frontend-views.rey-website-part-1.pages.shop-kitchen-cabinets');
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
Route::get('/tutorials', function () {
    return view('frontend-views.pages2.Tutorials');
});
