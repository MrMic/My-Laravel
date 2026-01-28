<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// ______________________________________________________________________
Route::get('/', [HomeController::class, 'index'])->name('home');

// ______________________________________________________________________
Route::get('/about', [HomeController::class, 'about'])->name('about');
