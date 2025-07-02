<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>@yield('title', 'Login - Gravell')</title>
  <link rel="icon" href="{{ asset('storage/images/AniNotee-logo.png') }}" type="image/png">

  {{-- Google Fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&family=Merriweather:wght@300;400;700&family=Poppins&display=swap" rel="stylesheet">

  {{-- Tailwind CDN --}}
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
            merriweather: ['Merriweather', 'serif'],
            poppins: ['Poppins', 'sans-serif'],
            comic: ['Comic Neue', 'cursive'],
          }
        }
      }
    }
  </script>

</head>
<body class="bg-viridian-500 font-merriweather min-h-screen flex items-center justify-center">
    <main class="w-full px-4">
        <div class="bg-viridian-50 rounded-xl shadow-lg p-8 w-full max-w-md mx-auto">
        <h2 class="text-3xl font-bold text-viridian-800 mb-4 text-center">Welcome To Gravell!</h2>
        <p class="text-sm text-viridian-600 mb-6 text-center">
            Log in to your <span class="font-semibold text-viridian-700">Google Account</span> and continue writing wonderful journey.
        </p>

        <form action="{{ route('auth.redirect') }}" method="GET">
            <button type="submit" class="w-full bg-viridian-700 hover:bg-viridian-800 text-white font-bold py-3 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-viridian-400 focus:ring-opacity-75 transition duration-300 ease-in-out flex items-center justify-center">
            <img src="https://www.google.com/favicon.ico" alt="Google Logo" class="w-6 h-6 mr-2">
            Continue with Google
            </button>
        </form>

        @if ($errors->has('login'))
            <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4 mt-4 text-center">
            {{ $errors->first('login') }}
            </div>
        @endif

        <p class="text-center mt-6 text-viridian-700 font-medium">
            ©2025 Najuwamr
        </p>
        </div>
    </main>
</body>
</html>
