<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/about', 'about');

Route::view('/privacy', 'privacy');

Route::view('/fetch', 'fetch');
