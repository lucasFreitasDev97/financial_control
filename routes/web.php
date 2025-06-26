<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/form/{category?}', [CategoryController::class, 'form'])->name('categories.form');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::post('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::get('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
