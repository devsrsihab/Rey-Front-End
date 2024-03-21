<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
Route::prefix('dashboard')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard.index');
    Route::get('/edit', [AdminController::class, 'edit'])->name('admin.dashboard.edit');
    Route::get('/view', [AdminController::class, 'view'])->name('admin.dashboard.view');
    // Add more admin routes as needed
});
