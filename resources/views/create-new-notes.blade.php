@extends('layouts.app')

@section('title', 'New Note')

@section('content')
<div class="max-w-4xl mx-auto py-10 font-merriweather">
    <form action="{{ route('notes.store') }}" method="POST">
        @csrf
        <!-- Judul Notion-style -->
        <h1 id="title-display" contenteditable="true"
            class="text-4xl font-semibold focus:outline-none border-b border-gray-300 py-2 text-gray-900 relative"
            data-placeholder="Your title...">
        </h1>

        <input type="hidden" name="title" id="title-hidden">

        <div class="mb-4 mt-6">
            <textarea name="content" id="editor" rows="10" class="w-full border border-gray-300 rounded"></textarea>
        </div>

        <button type="submit"
            class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
            Simpan ke Google Drive
        </button>
    </form>
</div>

<style>
    [contenteditable=true]:empty:before {
        content: attr(data-placeholder);
        color: #9ca3af; /* Tailwind's gray-400 */
        pointer-events: none;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const displayTitle = document.getElementById('title-display');
        const hiddenTitle = document.getElementById('title-hidden');

        // Jika kosong secara visual (tanpa teks nyata), kosongkan beneran
        if (displayTitle.innerText.trim() === '') {
            displayTitle.innerHTML = '';
        }

        displayTitle.addEventListener('input', () => {
            hiddenTitle.value = displayTitle.innerText.trim();
        });

        hiddenTitle.value = displayTitle.innerText.trim();
    });
</script>
@endsection

@push('scripts')
<script src="https://cdn.tiny.cloud/1/kpp26jmqwgc3jwyaal4x0hord83c38xbqbn4zqqrgu2z33jf/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#editor',
        height: 500,
        menubar: false,
        plugins: 'lists link code',
        toolbar: 'undo redo | bold italic | bullist numlist | link | code',
        toolbar_mode: 'sliding',
        content_style: 'body { font-family: Inter, sans-serif; font-size: 16px; line-height: 1.6; }'
    });
</script>
@endpush
