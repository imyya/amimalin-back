<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.homepage');
});

Route::get('/home', function () {
    return view('components.homepage');
});

// Route::middleware('web')->group(function () {
//     Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
//     Route::post('/login', [AuthController::class, 'login']);
// });

Route::get('/geocode', function () {
    $postalCode = request('postal_code');
    $country = request('country');
    
    $apiKey = env('HERE_API_KEY'); // Store your HERE API key in the .env file

    $response = Http::get("https://geocode.search.hereapi.com/v1/geocode", [
        'q' => "{$postalCode},{$country}",
        'apiKey' => $apiKey
    ]);

    return $response->json();
});

Route::get('/login',[AuthController::class,'showLoginForm'])->name('login');
Route::post('/login',[AuthController::class,'login']);

Route::get('/register',[AuthController::class,'showRegisterForm'])->name('register');
Route::post('/register',[AuthController::class,'register']);

Route::get('/token', function () {
    return csrf_token(); 
});