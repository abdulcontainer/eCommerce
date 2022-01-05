<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::view('/login','login');
Route::post('/login',[UserController::class,'login'])->name('login');

Route::get('/',[ProductController::class,'index'])->name('/');
