<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use stdClass;

class HomeController extends Controller
{
    // ______________________________________________________________________
    public function index(): Collection|View|stdClass
    {
        // Product::find(1)->delete();
        // $products = Product::all();
        // $product = Product::withTrashed()->find(1);
        $product = Product::onlyTrashed()->get();

        // dd($products);
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
