<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/about', function () {
    return view('app');
});

Route::get('/contact', function () {
    return view('contact');
});
