<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use stdClass;

class HomeController extends Controller
{
    // ______________________________________________________________________
    public function index(): Collection|View|stdClass
    {
        // $blogs =  DB::table('blogs')->select('title')->limit(10)->get();
        $blogs =  DB::table('blogs')->pluck('title', 'id')->toArray();
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
