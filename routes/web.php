<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


// ROTTA WELCOME
Route::get('/', [PublicController::class, 'welcome'])->name('welcome');
