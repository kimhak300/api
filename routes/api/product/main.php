<?php

use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Product\ProductTypeController;
use Illuminate\Support\Facades\Route;

Route::get('/products',         [ProductController::class, 'listing']);
Route::post('/products',        [ProductController::class, 'create']);
Route::post('/products/{id}',   [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'delete']);

Route::group(['prefix' => 'product'], function () {
    Route::get('/types',            [ProductTypeController::class, 'listing']);
    Route::post('/types',           [ProductTypeController::class, 'create']);
    Route::post('/types/{id}',      [ProductTypeController::class, 'update']);
    Route::delete('/types/{id}',    [ProductTypeController::class, 'delete']);
});
