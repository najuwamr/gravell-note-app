<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Projects;
use App\Models\Notes;

class HomeController extends Controller
{
    // menampilkan halaman utama
    public function index()
    {
        $user = Auth::user();

        $projects = $user->projects()->withCount('notes')->get();

        $noteStats = Notes::where('user_id', $user->id)
            ->whereBetween('created_at', [now()->startOfMonth(), now()->endOfMonth()])
            ->selectRaw('DATE(created_at) as date, COUNT(*) as total')
            ->groupBy('date')
            ->get()
            ->pluck('total', 'date');

        return view('home', compact('user', 'projects', 'noteStats'));
    }
    // menampilkan form update profil
    public function update()
    {
        // saat user klik edit, akan menampilkan form mengubah nama profil
        // dan mengubah alamat email yang digunakan untuk login (ganti email)
    }
}
