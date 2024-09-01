<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\formController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/catagories', [CatagoryController::class, 'index'])->name('catagories.index');
Route::get('/form', [formController::class, 'forms']);
Route::post('/post',[formController::class, 'post']);

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/submit', [AuthController::class,'registerAuth']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/loginSave', [AuthController::class, 'loginAuth']);

Route::get('/home', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('test',[CatagoryController::class,'main'])->name('test');

Route::fallback(function(){
    return "<h1> This url not found. </h1>";
});