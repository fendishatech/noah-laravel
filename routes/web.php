<?php

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
Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/login', [MemberController::class, "login"]);

Route::get('/register', function () {
    return view('auth.register');
});
Route::post('/register', [ClientController::class, "register"]);
Route::get('/confirmation', function () {
    return view('auth.confirm_register');
});

// PUBLIC :: MEMBERS ROUTES
Route::get('/members', [MemberController::class, "home"]);
