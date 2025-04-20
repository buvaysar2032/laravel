<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});


Route::prefix('api')->group(function () {
    Route::get('/docs', fn () => view('swagger/ui', [
        'jsonUrl' => url('/api/openapi.json')
    ]));
});
