<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\User;

Route::get('/user', function (Request $request) {
    echo 'test';
})->middleware('auth:sanctum');

Route::get('/createToken', function (Request $request) {
    $user = User::where('email', 'admin')->first();
    return $user->createToken('android')->plainTextToken;
});

Route::resource('product', ProductController::class);