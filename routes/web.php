<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\formController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/catagories', [CatagoryController::class, 'index'])->name('catagories.index');
Route::get('/form', [formController::class, 'forms']);
Route::post('/post',[formController::class, 'post']);


Route::fallback(function(){
    return "<h1> This url not found. </h1>";
});