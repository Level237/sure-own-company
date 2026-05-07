<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PartnerController;
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

Route::get('/contactez-nous', [ContactController::class, 'index']);
Route::post('/contactez-nous', [ContactController::class, 'sendContact'])->name('contact.send');

Route::get('/devenir-partenaire', [PartnerController::class, 'index']);
Route::post('/devenir-partenaire', [PartnerController::class, 'sendPartnerRequest'])->name('partner.send');

