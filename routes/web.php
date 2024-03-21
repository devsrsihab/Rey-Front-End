<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ShopController;

// Frontend routes
Route::get('/', [FrontendController::class, 'index']);
Route::get('/home', [FrontendController::class, 'home'])->name('frontend.home');

// Shop routes
Route::prefix('shop')->group(function () {
    Route::get('/', [ShopController::class, 'index'])->name('frontend.shop');
    Route::get('/vanities', [ShopController::class, 'vanities'])->name('frontend.shop.vanities');
    Route::get('/doors', [ShopController::class, 'doors'])->name('frontend.shop.doors');
    Route::get('/drawers', [ShopController::class, 'drawers'])->name('frontend.shop.drawers');
    Route::get('/fittings', [ShopController::class, 'fittings'])->name('frontend.shop.fittings');
    Route::get('/kitchen-organizers', [ShopController::class, 'kitchenOrganizers'])->name('frontend.shop.kitchen_organizers');
    Route::get('/cabinet-handles', [ShopController::class, 'cabinetHandles'])->name('frontend.shop.cabinet_handles');
    Route::get('/crown-moulding', [ShopController::class, 'crownMoulding'])->name('frontend.shop.crown_moulding');
    Route::get('/counter-tops', [ShopController::class, 'counterTops'])->name('frontend.shop.counter_tops');
    Route::get('/kitchen-cabinets', [ShopController::class, 'kitchenCabinets'])->name('frontend.shop.kitchen_cabinets');
});

// Other frontend pages (Example for one route)
Route::get('/products-and-finishes', [FrontendController::class, 'productsFinishes'])->name('frontend.products_and_finishes');
Route::get('/company-policies', [FrontendController::class, 'companyPolicies'])->name('frontend.company_policies');
Route::get('/terms-of-service', [FrontendController::class, 'termsSfService'])->name('frontend.terms_of_service');
Route::get('/why-rey', [FrontendController::class, 'whyRey'])->name('frontend.why_rey');
Route::get('/tutorials', [FrontendController::class, 'tutorials'])->name('frontend.tutorials');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::get('/create-account', [FrontendController::class, 'createAccount'])->name('frontend.create_account');
Route::get('/projects', [FrontendController::class, 'projects'])->name('frontend.projects');
Route::get('/product-details', [FrontendController::class, 'productDetails'])->name('frontend.product_details');
