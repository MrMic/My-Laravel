<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // ______________________________________________________________________
    public function index(): View
    {
        return view('welcome');
    }
    // ______________________________________________________________________
    public function about(): View
    {
        $title = 'About page!';
        $description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Nunc vulputate libero et velit interdum, ac aliquet odio mattis.";

        return view('about', [
            'title' => $title,
            'description' => $description
        ]);
    }
}
