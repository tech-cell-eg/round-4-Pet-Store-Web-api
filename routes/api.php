<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\BlogController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hello', function () {
  return "Hello World!";
});

Route::get('dog',[DogController::class,'index']);
Route::get('product',[ProductController::class,'index']);
Route::get('customer',[CustomerController::class,'index']);
Route::get('seller',[SellerController::class,'index']);
Route::get('blog',[BlogController::class,'index']);