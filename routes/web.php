<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('frontend.pages.index');
});

// shop routes start
Route::get('/shop', function () {
    return view('frontend.pages.shop');
});
Route::get('/shop/vanities', function () {
    return view('frontend.pages.vanities');
});
Route::get('/shop/doors', function () {
    return view('frontend.pages.doors');
});
Route::get('/shop/drawers', function () {
    return view('frontend.pages.drawers');
});
Route::get('/shop/fittings', function () {
    return view('frontend.pages.fittings');
});
Route::get('/shop/kitchen-organizers', function () {
    return view('frontend.pages.kitchen-organizers');
});
Route::get('/shop/cabinet-handles', function () {
    return view('frontend.pages.cabinet-handles');
});
Route::get('/shop/crown-moulding', function () {
    return view('frontend.pages.crown-moulding');
});
Route::get('/shop/counter-tops', function () {
    return view('frontend.pages.counter-tops');
});
Route::get('/shop-kitchen-cabinets', function () {
    return view('frontend.pages.shop-kitchen-cabinets');
});
// shop routes end
Route::get('/company-policies', function () {
    return view('frontend.pages.company-policies');
});
Route::get('/terms-of-service', function () {
    return view('frontend.pages.terms-of-service');
});
Route::get('/projects', function () {
    return view('frontend.pages.projects');
});
Route::get('/contact', function () {
    return view('frontend.pages.contact');
});
Route::get('/tutorials', function () {
    return view('frontend.pages.tutorials');
});
Route::get('/why-rey', function () {
    return view('frontend.pages.why-rey');
});
Route::get('/home', function () {
    return view('frontend.pages.home');
});
Route::get('/products-and-finishes', function () {
    return view('frontend.pages.products-and-finishes
    ');
});
Route::get('/create-account', function () {
    return view('frontend.pages.create-account');
});
Route::get('/product-details', function () {
    return view('frontend.pages.product-details');
});


// admin routes
Route::prefix('admin')->group(function () {
  Route::get('/', function () {
    return view('backend.pages.dashboard.index');
});
  Route::get('/dashboard', function () {
    return view('backend.pages.dashboard.index');
});
  Route::get('/dashboard/edit', function () {
    return view('backend.pages.dashboard.edit');
});
  Route::get('/dashboard/view', function () {
    return view('backend.pages.dashboard.view');
});


});

