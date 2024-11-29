<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\InformationController;

/**
 * Guest routes
 */
Route::get('/',                    [GuestController::class, 'welcome']) ->name('welcome');
Route::get('/offre-de-soins',      [GuestController::class, 'offer'])   ->name('offer');
Route::get('/nos-missions',        [GuestController::class, 'missions'])->name('missions');
Route::get('/foire-aux-questions', [GuestController::class, 'faq'])     ->name('faq');
Route::get('/nous-contacter',      [GuestController::class, 'contact']) ->name('contact');
Route::get('/notre-equipe',        [GuestController::class, 'team'])    ->name('team');

/**
 * API routes
 */
Route::get('/get-cta',      [GuestController::class, 'cta']);
Route::get('/get-notices',  [GuestController::class, 'notices']);
Route::get('/get-links',    [GuestController::class, 'links']);

/**
 * Authenticated routes
 */
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    /** Dashboard */
    Route::get(         'dashboard',                    [InformationController::class,    'dashboard'])         ->name('dashboard');
    /** Informations */
    Route::get(         'informations',                 [InformationController::class,    'informations'])      ->name('informations');
    Route::post(        'informations/{information}',   [InformationController::class,    'updateInformation']) ->name('informations.update');
    /** Questions */
    Route::resource(   'questions',                 QuestionController::class);
    Route::post(        'questions/reorder',            [QuestionController::class,     'reorder'])             ->name('questions.reorder');
    /** Notices */
    Route::resource(   'notices',                   NoticeController::class);
    /** Partners */
    Route::resource(   'partners',                  PartnerController::class);
    /** Members */
    Route::resource(   'members',                   MemberController::class);
    /** Links */
    Route::resource(   'links',                     LinkController::class);
    Route::post(        'links/reorder',                [LinkController::class,         'reorder'])             ->name('links.reorder');
    /** Sections */
    Route::get(         'sections/welcome',             [SectionController::class,      'welcome'])             ->name('sections.welcome');
    Route::get(         'sections/offer',               [SectionController::class,      'offer'])               ->name('sections.offer');
    Route::get(         'sections/missions',            [SectionController::class,      'missions'])            ->name('sections.missions');
    Route::get(         'sections/questions',           [SectionController::class,      'questions'])           ->name('sections.questions');
    Route::get(         'sections/team',                [SectionController::class,      'team'])                ->name('sections.team');
    Route::get(         'sections/contact',             [SectionController::class,      'contact'])             ->name('sections.contact');
    Route::post(        'sections/{section}',           [SectionController::class,      'update'])              ->name('sections.update');
    Route::post(        'items/{item}',                 [SectionController::class,      'updateItem'])          ->name('items.update');
    Route::post(        'items',                        [SectionController::class,      'newItem'])             ->name('items.store');
    Route::delete(      'items/{item}',                 [SectionController::class,      'deleteItem'])          ->name('items.destroy');
});
