<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\UserController;

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

Route::middleware(['guest'])->group(function () { 
    Route::controller(AuthController::class)->group(function () {
        Route::match(['get', 'post'], '/', 'Login')->name('login');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::controller(DashboardController::class)->group(function() {
            Route::get('/', 'index')->name('dashboard');
        });
        Route::controller(AuthController::class)->group(function () {
            Route::get('/logout', 'Logout')->name('logout');
        });
        Route::prefix('data')->group(function() {
            Route::controller(AbsenController::class)->group(function() {
                Route::get('/absen', 'index')->name('data.absen');
            });
            Route::controller(MuridController::class)->group(function () {
                Route::get('/murid', 'index')->name('data.murid');
            });
            Route::controller(UserController::class)->group(function () {
                Route::get('/users', 'index')->name('data.users');
            });
        });
    });
});