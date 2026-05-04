<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/a-propos-de-nous', function () {
    return view('about');
});

Route::get('/nos-services', function () {
    return view('services');
});

Route::get('/nos-services/{slug}', function ($slug) {
    return view('service-detail', ['slug' => $slug]);
});

Route::get('/contactez-nous', function () {
    return view('contact');
});

Route::get('/devenir-partenaire', function () {
    return view('partner');
});
