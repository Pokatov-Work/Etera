<?php

use App\Admin\Http\Controllers\AdminPageController;
use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard'); app/Admin/Http/AdminController.php

Route::get('/', [\App\Admin\Http\Controllers\AdminController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/pages', AdminPageController::class)->middleware(['auth', 'verified']);

//Route::prefix('pages')->middleware(['auth', 'verified'])->group(function () {
//    Route::get('/', [\App\Admin\Http\Controllers\AdminController::class, 'pages'])->name('admin.pages');


//    Route::post('/newPage', [\App\Admin\Http\Controllers\AdminPageController::class, 'addPage']);
//});
