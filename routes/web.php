<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SingleActionController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;

// ______________________________________________________________________
Route::get('/', [HomeController::class, 'index'])->name('home');

// ______________________________________________________________________
Route::get('/about', [HomeController::class, 'about'])->name('about');

// ______________________________________________________________________
Route::get('/single-action', SingleActionController::class)->name('single.action');

// ______________________________________________________________________
// Route::resource('/blog', BlogController::class);

// ______________________________________________________________________
Route::get('/blog', function () {
    $blogs = Blog::all(); // INFO: SELECT * FROM blogs;
    dd($blogs);
});
