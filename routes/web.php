<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::view('login','login');
Route::post('login',[UserController::class,'login'])->name('login');
// Home page
Route::get('/',[ProductController::class,'index'])->name('/');
Route::get('detail/{id}',[ProductController::class,'detail']);
// Search
Route::get('search',[ProductController::class,'search']);
Route::post('add-to-cart',[ProductController::class,'addToCart'])->name('add-to-cart');
// Logout
Route::get('logout',[UserController::class,'logout'])->name('logout');