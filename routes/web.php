<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Route::get('/{path}', [\App\Http\Controllers\PageController::class, 'show'])
//    ->where('path', '^(?!admin)[a-zA-Z0-9-_\/]+$')
//    ->name('site.page');

Route::get('/', [\App\Http\Controllers\PageController::class, 'show'])
    ->name('site.index');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
