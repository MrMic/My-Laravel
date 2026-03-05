<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    // INFO: GET ____________________________________________________________
    public function index()
    {
        $files = File::all();
        return view('file-upload', [
            'files' => $files,
        ]);
    }

    // INFO: POST ___________________________________________________________
    public function store(Request $request)
    {
        // INFO: dans "storage/app/private/" ________________________________
        // $file = Storage::disk('local')->put('/', $request->file('file'));
        // $file = $request->file('file')->store('/', 'local');

        // INFO: dans "storage/app/public/" _________________________________
        $file = $request->file('file')->store('/', 'public');

        $fileStore = new File();
        $fileStore->file_path = $file;
        $fileStore->save();

        dd('Stored file path: ' . $file);
    }

    // INFO: GET ____________________________________________________________
    // NOTE: pour télécharger un fichier, on utilise la méthode "download" du disque de stockage
    public function download()
    {
        // INFO: pour télécharger un fichier depuis "storage/app/private/" ________________________________
        return Storage::disk('public')->download('haYDUSDmqQwNMFXhzrCVSsrucilkTifrT8WUyR7C.jpg');
        // INFO: pour télécharger un fichier depuis "storage/app/public/" _________________________________
        // return Storage::disk('public')->download($file->file_path);
    }
}
