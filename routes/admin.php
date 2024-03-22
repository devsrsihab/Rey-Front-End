<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

Route::middleware(['web'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

    // dashboard routes
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard.index');
        Route::get('/edit', [AdminController::class, 'edit'])->name('admin.dashboard.edit');
        Route::get('/view', [AdminController::class, 'view'])->name('admin.dashboard.view');
    });

    // categories routes
    Route::resource('categories', CategoryController::class);
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/categories/edit/{id}', 'edit')->name('categories.edit');
        Route::get('/categories/{id}', 'show')->name('categories.show');
        Route::get('/categories/destroy/{id}', 'destroy')->name('categories.destroy');
    });
});

