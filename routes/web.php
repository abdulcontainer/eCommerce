<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::view('register','register');
Route::post('registration',[UserController::class,'registration'])->name('registration');
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
// CartList
Route::get('cart-list',[ProductController::class,'cartList'])->name('cart-list');
// Remove Cart
Route::get('remove-cart/{id}',[ProductController::class,'removeCart'])->name('remove-cart');
// Order Now
Route::get('order-now',[ProductController::class,'orderNow'])->name('order-now');
// Order Place
Route::post('order-place',[ProductController::class,'orderPlace'])->name('order-place');
// My order
Route::get('my-order',[ProductController::class,'myOrder'])->name('my-order');