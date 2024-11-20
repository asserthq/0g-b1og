<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')
    ->middleware(['role:admin'])
    ->group(function() {
        Route::get('/', [MainController::class,'index'])->name('admin.index');
        Route::resource('/categories', CategoryController::class);
        Route::resource('/tags', TagController::class);
        Route::resource('/posts', PostController::class);
});