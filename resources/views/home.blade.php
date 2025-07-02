@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="h-full grid grid-rows-3 grid-flow-col gap-4 px-4 py-4 leading-10 bg-viridian-950 rounded-3xl text-white">

    {{-- 🟩 Profil (3 baris penuh di kiri) --}}
    <div class="p-4 w-full bg-viridian-700 rounded-xl row-span-3">
        <div class="flex items-center space-x-4">
            <img src="{{ $user->avatar }}" alt="Avatar" class="w-16 h-16 rounded-full border-2 border-white">
            <div>
                <h2 class="text-xl font-bold">{{ $user->name }}</h2>
                <p class="text-sm">{{ $user->email }}</p>
            </div>
        </div>
        <div class="mt-4 space-x-2">
            <a href="{{ route('projects.create') }}" class="bg-white text-viridian-800 px-4 py-1 rounded shadow hover:bg-viridian-100">+ Project Baru</a>
            <a href="{{ route('notes.create') }}" class="bg-white text-viridian-800 px-4 py-1 rounded shadow hover:bg-viridian-100">+ Catatan Baru</a>
        </div>
    </div>

    {{-- 🟩 Calendar Heatmap (baris atas kanan) --}}
    <div class="p-4 w-full bg-viridian-800 rounded-xl col-span-2">
        <h3 class="text-lg font-semibold mb-4">Writing Calendar</h3>
        {{-- <div id="heatmap" class="overflow-auto" data-stats='@json($noteStats)'></div> --}}
        <div id="heatmap" data-stats='@json($noteStats)'></div>
    </div>

    {{-- 🟩 Tabel Project (2 baris kanan bawah) --}}
    <div class="p-4 w-full bg-viridian-900 rounded-xl row-span-2 col-span-2 flex flex-col">
        <h3 class="text-lg font-semibold mb-2">Daftar Proyek</h3>
        <div class="overflow-y-auto h-48 rounded">
            <table class="w-full text-sm text-left">
                <thead>
                    <tr class="border-b border-viridian-700 text-viridian-100">
                        <th class="py-2">Judul</th>
                        <th>Deskripsi</th>
                        <th>Jumlah Catatan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projects as $project)
                        <tr class="border-b border-viridian-800 hover:bg-viridian-700 transition">
                            <td class="py-2 font-medium">{{ $project->title }}</td>
                            <td>{{ Str::limit($project->description, 30) }}</td>
                            <td>{{ $project->notes()->count() }}</td>
                            <td>{{ ucfirst($project->status) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
