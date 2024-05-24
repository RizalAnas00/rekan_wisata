<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('daftar');
});

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
});
