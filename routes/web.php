<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LinkController;

/**
 * Guest routes
 */
Route::get('/',                                         [GuestController::class, 'welcome'])                                            ->name('welcome');
Route::get('/offre-de-soins',                           function () { return Inertia::render('Guest/Offer'); })    ->name('offer');
Route::get('/pour-qui',                                 function () { return Inertia::render('Guest/Who'); })      ->name('who');
Route::get('/notre-equipe',                             function () { return Inertia::render('Guest/Team'); })     ->name('team');
Route::get('/foire-aux-questions',                      [GuestController::class, 'faq'])                                                ->name('faq');
Route::get('/nous-contacter',                           [GuestController::class, 'contact'])                                            ->name('contact');

/**
 * API routes
 */
Route::get('/get-cta',                                  [GuestController::class, 'cta']);
Route::get('/get-notices',                              [GuestController::class, 'notices']);
Route::get('/get-links',                                [GuestController::class, 'links']);

/**
 * Authenticated routes
 */
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    /** Dashboard */
    Route::get(         'dashboard',                    [DashboardController::class,    'dashboard'])           ->name('dashboard');
    Route::post(        'informations/{information}',   [DashboardController::class,    'updateInformation'])   ->name('informations.update');
    /** Questions */
    Route::resource(   'questions',                 QuestionController::class);
    Route::post(        'questions/reorder',            [QuestionController::class,     'reorder'])             ->name('questions.reorder');
    /** Notices */
    Route::resource(   'notices',                   NoticeController::class);
    /** Partners */
    Route::resource(   'partners',                  PartnerController::class);
    /** Links */
    Route::resource(   'links',                     LinkController::class);
    Route::post(        'links/reorder',                [LinkController::class,         'reorder'])             ->name('links.reorder');
    /** Sections */
    Route::get(         'sections/welcome',             [SectionController::class,      'welcome'])             ->name('sections.welcome');
    Route::post(        'sections/{section}',           [SectionController::class,      'update'])              ->name('sections.update');
    Route::post(        'items/{item}',                 [SectionController::class,      'updateItem'])          ->name('items.update');
    Route::post(        'items',                        [SectionController::class,      'newItem'])             ->name('items.store');
    Route::delete(      'items/{item}',                 [SectionController::class,      'deleteItem'])          ->name('items.destroy');
});
