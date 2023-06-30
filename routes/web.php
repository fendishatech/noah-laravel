<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

// PUBLIC ROUTES
Route::get('/', function () {
    return view('public.index');
});

Route::get('/login', function () {
    return view('public.auth.login');
});
Route::post('/login', [MemberController::class, "login"]);

Route::get('/register', function () {
    return view('public.auth.register');
});
Route::post('/register', [ClientController::class, "register"]);
Route::get('/confirmation', function () {
    return view('public.auth.confirm_register');
});

// PUBLIC :: MEMBERS ROUTES
Route::get('/members', [MemberController::class, "home"]);
