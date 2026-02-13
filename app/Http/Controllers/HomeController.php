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
        // INFO: ELOQUENT ORM
        // INFO: Create data in DB
        // $user = new User();
        // $user->name = 'Clark';
        // $user->email = 'clark@example.com';
        // $user->password = '123456';
        // $user->save();

        // INFO: read data from DB
        // $users = User::all();
        // $user = User::where('id', 5)->first();
        // $user = User::find(5);
        // dd($user);

        // INFO: Update data
        // $user = User::find(6);
        $user = User::where('id', 6)->first();
        $user->email = 'clark2@example.com';
        $user->save();

        // foreach ($users as $user) {
        //     echo $user->name;
        //     echo "<br>";
        // }


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
