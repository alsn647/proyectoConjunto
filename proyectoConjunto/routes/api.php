<?php

use App\Http\Controllers\Api\ProductApiController;
use App\Http\Controllers\Api\CategoryApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/products/{id}/{counter}', [ProductApiController::class, 'showProducts'])
     ->name('productsApi.showProducts');

Route::get('/products/{counter}', [ProductApiController::class, 'index'])
    ->name('productsApi.index');

Route::apiResource('/products', ProductApiController::class)
    ->name('store', 'productsApi.store')
    ->name('update', 'productsApi.update')
    ->name('show', 'productsApi.show')
    ->name('destroy', 'productsApi.destroy')
    ->name('showProducts', 'productsApi.showProducts');

Route::apiResource('/categories', CategoryApiController::class)
    ->name('index', 'categoriesApi.index')
    ->name('store', 'categoriesApi.store')
    ->name('update', 'categoriesApi.update')
    ->name('show', 'categoriesApi.show')
    ->name('destroy', 'categoriesApi.destroy');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
