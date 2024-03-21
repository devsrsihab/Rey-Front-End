<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/dashboard/edit', 'AdminController@edit')->name('admin.dashboard.edit');
    Route::get('/dashboard/view', 'AdminController@view')->name('admin.dashboard.view');
    // Add more admin routes as needed
});
