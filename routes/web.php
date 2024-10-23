<?php

use App\Http\Controllers\admin\BahasaController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    // Bagian Login
    Route::get('/auth', [AuthController::class, 'index'])->name('login');
    Route::post('/auth', [AuthController::class, 'action_login'])->name('login');
});

Route::middleware(['auth'])->group(function () {
    // Bagian Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // Bagian Bahasa
    Route::get('/bahasa', [BahasaController::class, 'index']);
    Route::post('/bahasa', [BahasaController::class, 'action_tambah']);

    // Bagian Logout
    Route::get('/logout', [AuthController::class, 'logout']);
});
