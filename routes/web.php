<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lihat-data', [SiteController::class, 'view_data']);

Route::view('/login', 'form_login')->name('login');
Route::post('/auth', [SiteController::class, 'autentikasi']);
Route::get('/logout', [SiteController::class, 'logout']);

Route::resource('product', ProductController::class)->middleware('auth');