<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\client\ClientController;
use App\Http\Controllers\client\MemberController;
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


// ADMIN ROUTES
Route::prefix('admin')->group(function () {
    // LOGIN
    Route::get('/', function () {
        return view('admin.auth.login');
    })->name('login');
    Route::post('/', [UserController::class, 'login']);
    // LOGOUT
    Route::get('/logout', [UserController::class, 'logout'])->middleware('auth');
    // DASHBOARD
    Route::get('/home', [DashboardController::class, 'index'])->middleware('auth');
});
