<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Bagian Login
Route::get('/auth', [AuthController::class, 'index']);

// Bagian Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);
