<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    // INFO: GET ____________________________________________________________
    public function index()
    {
        return view('file-upload');
    }

    // INFO: POST ___________________________________________________________
    public function store(Request $request)
    {
        // INFO: dans "storage/app/private/" ________________________________
        // $file = Storage::disk('local')->put('/', $request->file('file'));
        // $file = $request->file('file')->store('/', 'local');

        // INFO: dans "storage/app/public/" _________________________________
        $file = $request->file('file')->store('/', 'public');

        dd($file);
    }
}
