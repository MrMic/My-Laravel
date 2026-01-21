<?php

use Illuminate\Support\Facades\Route;

// ______________________________________________________________________
Route::get('/', function () {
    return view('welcome');
})->name('home');

// ______________________________________________________________________
Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');
