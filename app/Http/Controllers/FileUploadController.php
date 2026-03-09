<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Facades\Storage;
use Str;

class FileUploadController extends Controller
{
    // INFO: GET ____________________________________________________________
    public function index()
    {
        /*
                $file = File::find(7);
                // INFO: Delete from the public directory
                FacadesFile::delete(public_path($file->file_path));
                // INFO: Delete from the database
                $file->delete();
        */
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
        // $file = $request->file('file')->store('/', 'public');
        // INFO: dans "public/uploads/" _____________________________________

        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $customName = 'laravel_' . Str::uuid();
        $fileName = $customName . '.' . $ext;

        $path = $file->storeAs('/', $fileName, 'dir_public');

        $fileStore = new File();
        $fileStore->file_path = '/uploads/' . $path;
        $fileStore->save();

        // dd('Stored file path: ' . $file);
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
