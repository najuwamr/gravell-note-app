<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Gravell</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&family=Merriweather:wght@300;400;700&family=Poppins&display=swap" rel="stylesheet">

    {{-- Alpine & Feather Icons --}}
    <script src="https://unpkg.com/alpinejs" defer></script>
    <script src="https://unpkg.com/feather-icons"></script>

    @vite(['resources/js/app.jsx', 'resources/css/app.css'])

    {{-- Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        viridian: {
                            50: '#f4f9f7',
                            100: '#dcebe6',
                            200: '#b8d7cd',
                            300: '#8cbcaf',
                            400: '#649d8f',
                            500: '#4e887b',
                            600: '#3a675e',
                            700: '#31544d',
                            800: '#2b4440',
                            900: '#273a37',
                            950: '#12211e',
                        }
                    },
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                        comic: ['Comic Neue', 'cursive'],
                        merriweather: ['Merriweather', 'serif'],
                    }
                }
            }
        }
    </script>

    <style>
        html, body, #app {
            height: 100%;
        }
    </style>
</head>
<body class="bg-viridian-300 h-screen text-viridian-950 overflow-hidden">
    <div id="app" class="flex h-screen">

        {{-- Sidebar --}}
        @include('components.sidebar')

        {{-- Main Content --}}
        <div class="flex-1 p-6 bg-viridian-50 rounded-l-3xl h-full overflow-hidden">
            @yield('content')
        </div>

    </div>

    <script>
        document.addEventListener('alpine:init', () => feather.replace());
        window.addEventListener('DOMContentLoaded', () => feather.replace());
    </script>
    @stack('scripts')
</body>
</html>
