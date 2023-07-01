<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

// PUBLIC ROUTES
Route::get('/', function () {
    return view('index');
});

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
