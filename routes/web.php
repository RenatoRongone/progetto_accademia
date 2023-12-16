<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\AnnouncementController;


// ROTTA WELCOME
Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

// ROTTA CREAZIONE ANNUNCIO
Route::get('/crea-annunci', [AnnouncementController::class, 'create_announcements'])->middleware('auth')->name('create_announcements');

// ROTTA VISUALIZAZIONE DETTAGLIO ANNUNCIO
Route::get('/dettaglio-annuncio/{announcement}', [AnnouncementController::class, 'show_announcements'])->name('show_announcements');

// ROTTA VISUALIZAZZIONE ANNUNCI PER CATEGORIA
Route::get('/annuncio-categoria/{category}', [AnnouncementController::class, 'show_category'])->name('show_category');

// ROTTA VISUALIZZAZIONE ANNUNCI PER TUTTE LE CATEGORIE
Route::get('/tutti-gli-annunci', [AnnouncementController::class, 'index_category'])->name('index_category');

/* // ROTTA VISUALIZAZZIONE ANNUNCI PER UTENTE
Route::get('/annuncio-utente/{user}', [AnnouncementController::class, 'user_announcements'])->name('user_announcements'); */

// ROTTE REVISOR
Route::get('/revisiona', [RevisorController::class, 'show_revisor'])->middleware('is_revisor')->name('show_revisor');

Route::patch('/revisione/accettata/{announcement_to_check}', [RevisorController::class, 'approve_announcement'])->middleware('is_revisor')->name('accepted_announcement');

Route::patch('/revisione/rifiutata/{announcement_to_check}', [RevisorController::class, 'reject_announcement'])->middleware('is_revisor')->name('reject_announcement');

//ROTTE LAVORA CON NOI
Route::get('/lavora-con-noi', [RevisorController::class, 'lavora_con_noi'])->middleware('auth')->name('lavora_con_noi');

Route::post('/lavora-con-noi/richiesta', [RevisorController::class, 'richiesta_lavoro'])->middleware('auth')->name('richiesta_lavoro');

Route::get('/richiesta-rendi-revisor', [RevisorController::class, 'make_revisor'])->name('make_revisor');

//ROTTA PER RICERCA
Route::get('/ricerca',[AnnouncementController::class, 'ricerca'])->name('ricerca');