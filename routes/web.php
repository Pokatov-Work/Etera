<?php

use Illuminate\Support\Facades\Route;

Route::get('/{path}', [\App\Http\Controllers\PageController::class, 'show'])
    ->where('path', '^(?!admin)[a-zA-Z0-9-_\/]+$')
    ->name('site.page');

Route::get('/', [\App\Http\Controllers\PageController::class, 'show'])
    ->name('site.index');
