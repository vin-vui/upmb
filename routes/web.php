<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;

/**
 * Guest routes
 */
Route::get('/',                                         [GuestController::class, 'welcome'])                                             ->name('welcome');
Route::get('/cta',                                      [GuestController::class, 'cta']);
Route::get('/offre-de-soins',                           function () { return Inertia::render('Guest/Offer'); })     ->name('offer');
Route::get('/pour-qui',                                 function () { return Inertia::render('Guest/Who'); })       ->name('who');
Route::get('/notre-equipe',                             function () { return Inertia::render('Guest/Team'); })      ->name('team');
Route::get('/foire-aux-questions',                      function () { return Inertia::render('Guest/Faq'); })       ->name('faq');
Route::get('/nous-contacter',                           function () { return Inertia::render('Guest/Contact'); })   ->name('contact');

/**
 * Authenticated routes
 */
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get(         'dashboard',                    [DashboardController::class, 'dashboard'])           ->name('dashboard');
    Route::post(        'informations/{information}',   [DashboardController::class, 'updateInformation'])   ->name('informations.update');
    Route::post(        'questions/reorder',            [QuestionController::class, 'reorder'])              ->name('questions.reorder');
    Route::resource(   'questions',                 QuestionController::class);
    Route::resource(   'notices',                    NoticeController::class);
    Route::resource(   'partners',                  PartnerController::class);
    // Route::resource(   'sections',                 SectionController::class);
    Route::get(         'sections/welcome',             [SectionController::class, 'welcome'])               ->name('sections.welcome');
    Route::post(        'sections/{section}',           [SectionController::class, 'update'])                ->name('sections.update');
    Route::post(        'items/{item}',                 [SectionController::class, 'updateItem'])            ->name('items.update');
    Route::post(        'items',                        [SectionController::class, 'newItem'])               ->name('items.store');
    Route::delete(        'items/{item}',                      [SectionController::class, 'deleteItem'])               ->name('items.destroy');
});
