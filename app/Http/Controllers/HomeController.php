<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use stdClass;

class HomeController extends Controller
{
    // ______________________________________________________________________
    public function index(): Collection|View|stdClass
    {
        $blogs = Blog::Active()->get();
        dd($blogs);

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
