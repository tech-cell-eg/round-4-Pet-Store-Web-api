<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DogController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\SellerController;
use App\Http\Controllers\Api\BlogController;
use App\Http\Resources\BlogResource;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::apiResource('dog',DogController::class);
Route::apiResource('product',ProductController::class);
Route::apiResource('customer',CustomerController::class);
Route::apiResource('seller',SellerController::class);
Route::apiResource('blog',BlogController::class);