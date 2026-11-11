<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Meine Laravel-App')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gray-100 text-gray-900">

{{-- Navigation --}}
<header class="bg-white shadow-sm">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">

        <a href="{{ url('/') }}"
           class="text-xl font-bold text-indigo-600">
            MyApp
        </a>

        @auth
            <div>
                <form action="{{route('logout')}}" method="post">
                    <x-button>Logout</x-button>
                </form>
            </div>

        @endauth

@guest
        <div class="flex items-center gap-4">

            <a href="{{ route('login') }}"
               class="text-gray-600 hover:text-indigo-600">
                Login
            </a>

            <a href="{{ route('register') }}"
               class="rounded-lg bg-indigo-600 px-4 py-2 text-white
                          hover:bg-indigo-700">
                Registrieren
            </a>

        </div>
        @endguest

    </nav>
</header>

{{-- Hauptinhalt --}}
<main class="mx-auto max-w-7xl px-6 py-12">

    @yield('content')

</main>

{{-- Footer --}}
<footer class="mt-auto py-6 text-center text-sm text-gray-500 flex space-x-8">
    &copy; {{ date('Y') }} MyApp. Alle Rechte vorbehalten.
</footer>

<p>
    <x-php-version :version="phpversion()">Demoeintrag</x-php-version>
</p>
</body>
</html>
