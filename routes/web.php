<?php

use Illuminate\Support\Facades\Route;

// ______________________________________________________________________
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    $title = 'About page!';
    $description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Nunc vulputate libero et velit interdum, ac aliquet odio mattis.";

    return view('about', [
        'title' => $title,
        'description' => $description
    ]);
})->name('about');

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
