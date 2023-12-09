<?php

use App\Http\Controllers\Api\AccordionController;
use App\Http\Controllers\Api\CarouselController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});

Route::get('/products', [ProductController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/orders', [OrderController::class, 'store']);
Route::get('/orders', [OrderController::class, 'index']);
Route::delete('/orders/{order}', [OrderController::class, 'destroy']);
Route::patch('/orders/{order}', [OrderController::class, 'updateStatus']);


Route::get('/accordions', [AccordionController::class, 'index']);
Route::get('/carousel', [CarouselController::class, 'index']);