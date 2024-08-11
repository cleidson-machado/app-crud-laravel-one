<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'createPage'])->name('product.create');

/* CRUD METHODS */
Route::post('/product', [ProductController::class, 'saveOne'])->name('product.saveOne');
Route::get('/product/{product}/edit', [ProductController::class, 'editOne'])->name('product.editOne');
Route::put('/product/{product}/update', [ProductController::class, 'updateOne'])->name('product.updateOne');
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');
