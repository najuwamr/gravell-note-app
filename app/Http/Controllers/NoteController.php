<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NoteController extends Controller
{
    public function create()
    {
        return view('create-new-notes');
    }

    public function store(Request $request)
    {
        $title = $request->input('title') ?? 'untitled';
        $content = $request->input('content');

        // Simpan ke Google Drive
        $filename = now()->format('Ymd_His') . '_' . Str::slug($title) . '.html';
        Storage::disk('google')->put($filename, $content);

        return redirect()->back()->with('success', 'Catatan berhasil disimpan ke Google Drive!');
    }

    public function show($id)
    {

    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
}
