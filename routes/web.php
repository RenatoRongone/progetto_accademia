<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AnnouncementController;


// ROTTA WELCOME
Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

// ROTTA CREAZIONE ANNUNCIO
Route::get('/crea-annunci', [AnnouncementController::class, 'create_announcements'])->middleware('auth')->name('create_announcements');

// ROTTA VISUALIZAZIONE DETTAGLIO ANNUNCIO
Route::get('/dettaglio-annuncio/{announcement}', [AnnouncementController::class, 'show_announcements'])->name('show_announcements');

// ROTTA VISUALIZAZZIONE ANNUNCI PER CATEGORIA
Route::get('/annuncio-categoria/{category}', [AnnouncementController::class, 'show_category'])->name('show_category');