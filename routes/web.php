<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;

/**
 * Guest routes
 */
Route::get('/',                     function () { return Inertia::render('Guest/Welcome'); })->name('welcome');
Route::get('/offre-de-soins',       function () { return Inertia::render('Guest/Offer'); })->name('offer');
Route::get('/pour-qui',             function () { return Inertia::render('Guest/Who'); })->name('who');
Route::get('/notre-equipe',         function () { return Inertia::render('Guest/Team'); })->name('team');
Route::get('/foire-aux-questions',  function () { return Inertia::render('Guest/Faq'); })->name('faq');
Route::get('/nous-contacter',       function () { return Inertia::render('Guest/Contact'); })->name('contact');

/**
 * Authenticated routes
 */
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::post('/informations/{information}', [DashboardController::class, 'updateInformation'])->name('informations.update');
    Route::resource('questions', QuestionController::class);
    Route::post('/questions/reorder', [QuestionController::class, 'reorder'])->name('questions.reorder');
    Route::resource('notices', NoticeController::class);
});
