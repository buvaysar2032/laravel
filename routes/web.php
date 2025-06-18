<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('app'));


Route::prefix('api')->group(function (): void {
    Route::get('/docs', fn () => view('swagger/ui', [
        'jsonUrl' => url('/api/openapi.json')
    ]))->middleware('moonshine.basic');
});
