<?php

use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard'); app/Admin/Http/AdminController.php

Route::get('/', [\App\Admin\Http\Controllers\AdminController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
