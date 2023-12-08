<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AnnouncementController;


// ROTTA WELCOME
Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

Route::get('/crea-annunci', [AnnouncementController::class, 'create_announcements'])->middleware('auth')->name('create_announcements');
