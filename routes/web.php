<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;


// HOME ROUTES
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/about', 'about');
    Route::get('/services', 'services');
    Route::get('/contact', 'contact');
});

// AUTH ROUTES
Route::prefix('auth')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/register', 'getRegister');
        Route::post('/register', 'postRegister');

        Route::middleware('loggedIn')->name('login')->get('/login', 'getLogin');
        Route::post('/login', 'postLogin');

        Route::get('/logout', 'logout');

        Route::get('/confirmation', 'getConfirmation');
    });
});

// Members Routes
Route::middleware('memberAuth')->get('/dashboard', [MemberController::class, "index"]);
