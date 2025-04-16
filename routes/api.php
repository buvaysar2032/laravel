<?php

use App\Http\Controllers\SwaggerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum', 'verified');

// middleware verified используется для проверки, что пользователь подтвердил свою электронную почту.

require __DIR__.'/auth.php';


Route::prefix('v1')->group(function () {
    // Маршрут для генерации JSON документации
    Route::get('/openapi.json', [SwaggerController::class, 'json']);
});
