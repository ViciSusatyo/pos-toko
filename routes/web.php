<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// CRUD Kategori (JSON API)
Route::apiResource('categories', CategoryController::class);

// CRUD Produk (JSON API)
Route::apiResource('products', ProductController::class);