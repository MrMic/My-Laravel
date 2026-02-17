<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use stdClass;

class HomeController extends Controller
{
    // ______________________________________________________________________
    public function index(): Collection|View|stdClass
    {
        // INFO: Mass Assignment & fillable (field(s))
        // User::create([
        //              'name' => 'User1',
        //              'email' => 'user1@wp.pl',
        //              'password' => 'password123'
        // ]);

        // User::insert([
        //     [
        //         'name' => 'User2',
        //         'email' => 'user2@wp.pl',
        //         'password' => 'password123'
        //     ],
        //     [
        //         'name' => 'User3',
        //         'email' => 'user3@wp.pl',
        //         'password' => 'password123'
        //     ],
        // ]);

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
