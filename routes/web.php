<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Guest/Welcome');
})->name('welcome');
Route::get('/offre-de-soins', function () {
    return Inertia::render('Guest/Offer');
})->name('offer');
Route::get('/pour-qui', function () {
    return Inertia::render('Guest/Who');
})->name('who');
Route::get('/notre-equipe', function () {
    return Inertia::render('Guest/Team');
})->name('team');
Route::get('/foire-aux-questions', function () {
    return Inertia::render('Guest/Faq');
})->name('faq');
Route::get('/nous-contacter', function () {
    return Inertia::render('Guest/Contact');
})->name('contact');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
