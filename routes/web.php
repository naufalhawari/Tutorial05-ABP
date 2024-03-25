<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('form-mhs');
});

Route::get('/lihat-data', [SiteController::class, 'view_data']);

Route::resource('product', ProductController::class);