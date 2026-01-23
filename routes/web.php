<?php

use Illuminate\Support\Facades\Route;

// ______________________________________________________________________
Route::get('/', function () {
    return view('welcome');
})->name('home');

// ______________________________________________________________________
Route::get('/contact', function () {
    $title = 'Contact page!';
    $description = "Urna, ac, adipiscing laoreet eget rutrum dapibus faucibus efficitur
    pharetra. Ultricies, amet, dui velit blandit arcu tincidunt nunc vivamus donec.";
    $books = [ "Le petit prince", "Le Seigneur des anneaux", "Harry Potter" ];

    return view('contact.index', [
        'title' => $title,
        'description' => $description,
        'books' => $books
    ]);
})->name('contact');
