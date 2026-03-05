<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// ______________________________________________________________________
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'contactSubmit'])->name('contact.submit');

Route::get('/file-upload', [FileUploadController::class, 'index'])->name('file-upload.index');
Route::post('/file-upload', [FileUploadController::class, 'store'])->name('file-upload.store');
Route::get('/file-download', [FileUploadController::class, 'download'])->name('file-upload.download');
