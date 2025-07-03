@extends('layouts.app')

@section('title', 'New Note')

@section('content')
<div class="max-w-4xl mx-auto py-10">
    <form action="{{ route('notes.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="title" class="block font-semibold">Title</label>
            <input type="text" name="title" id="title"
                class="w-full border border-gray-300 rounded px-4 py-2"
                placeholder="Tittle " required>
        </div>

        <div class="mb-4">
            <label for="content" class="block font-semibold">Isi Catatan</label>
            <textarea name="content" id="editor" rows="10" class="hidden"></textarea>
        </div>

        <button type="submit"
            class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
            Simpan ke Google Drive
        </button>
    </form>
</div>
@endsection

@push('scripts')
    <script src="https://cdn.tiny.cloud/1/kpp26jmqwgc3jwyaal4x0hord83c38xbqbn4zqqrgu2z33jf/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: '#editor',
            height: 500,
            menubar: false,
            plugins: 'lists link code',
            toolbar: 'undo redo | bold italic | bullist numlist | link | code'
        });
    </script>
@endpush
