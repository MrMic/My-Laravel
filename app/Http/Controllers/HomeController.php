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
        // INFO: Insert row
        // DB::table('users')->insert([
        //     'name' => 'John Doe',
        //     'email' => 'john@gmail.fr',
        //     'password' => bcrypt('password123'),
        // ]);

        // INFO: Get data from DB
        // $users = DB::table('users')->get();
        // $users = DB::table('users')->where('id', 5)->first();
        // $users = DB::table('users')->where('id', '>=', 5)->get();
        // return $users;

        // INFO: Update row from DB
        // DB::table('users')->where('id', 5)->update([
        //     'name' => 'Toto',
        //     'email' => 'toto@gmail.fr',
        // ]);

        // INFO: Delete row from DB
        // DB::table('users')->where('id', 5)->delete();
        // INFO: Delete multiple rows from DB
        // DB::table('users')->where('id', '>=', 5)->delete();

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
