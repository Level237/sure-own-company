<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/a-propos-de-nous', function () {
    return view('about');
});
