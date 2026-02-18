<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use stdClass;

class HomeController extends Controller
{
    // ______________________________________________________________________
    public function index(): Collection|View|stdClass
    {
        // INFO: Chaining conditions
        // $product = Product::where('id', '=', 1)->first();
        // $product = Product::where('id', '=', 1)->where('price', '278')->get();
        // $product = Product::where(['id' => 1, 'price' => '278'])->get();
        // $product = Product::where('name', 'LIKE', '%aperiam%')
        //     ->orWhere('description', 'LIKE', '%distinctio%')
        //     ->get();
        // $product = Product::whereIn('id', [1,2,3])->get();
        $product = Product::whereBetween('price', [100, 200])->get();

        dd($product);

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
