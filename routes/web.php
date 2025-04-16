<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('vue');
});



Route::prefix('api/v1')->group(function () {
    // Маршрут для отображения документации Swagger UI
    Route::get('/docs', fn () => view('swagger-ui', [
        'jsonUrl' => url('/api/v1/openapi.json')
    ]));
});
