<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return "This a Home Page.";
})->name('about');

Route::get('/user/{id}/{slug}', function ($id, $slug) {
    return "This is User Page with ID: " . $id . " " . $slug;
})->name('user');

// INFO:── ROUTES GROUPS ──────────────────────────────────────────────
Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
    Route::get('/create', function () {
        return "This is Blog Create Page.";
    })->name('create');

    Route::get('/edit', function () {
        return "This is Blog Edit Page.";
    })->name('edit');

    Route::get('/show', function () {
        return "This is Blog Show Page.";
    })->name('show');
});
