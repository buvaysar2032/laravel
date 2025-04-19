<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('vue');
});


Route::prefix('api')->group(function () {
    Route::get('/docs', fn () => view('swagger-ui', [
        'jsonUrl' => url('/api/openapi.json')
    ]));
});
