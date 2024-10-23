<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/users',[UserController::class,'index']);

Route::post('/login',[AuthController::class,'login']);

Route::post('/register',[AuthController::class,'register']);