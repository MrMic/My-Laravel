<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "This a Home Page.";
});

Route::get("/user/{id}/{slug}", function ($id, $slug) {
    return "This is User Page with ID: " . $id . " " . $slug;
});
