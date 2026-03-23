<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->get('/', function () {
    return view('home');
});

Route::middleware('auth')->get('/home', function () {
    return view('home');
});
