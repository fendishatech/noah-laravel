<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('public.index');
});

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.auth.login');
    });
    Route::post('/', [UserController::class, 'login']);
    Route::get('/home', [DashboardController::class, 'index']);
});
