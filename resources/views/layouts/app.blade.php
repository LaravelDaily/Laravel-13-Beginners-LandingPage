<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Launchpad — @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-white text-gray-900 dark:bg-gray-950 dark:text-gray-100">
    <nav class="border-b border-gray-200 dark:border-gray-800">
        <div class="mx-auto flex max-w-4xl items-center justify-between px-6 py-4">
            <a href="{{ route('home') }}" class="text-lg font-bold">Launchpad</a>
            <ul class="flex gap-6 text-sm">
                <li><a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                <li><a href="{{ route('about') }}" class="hover:underline">About</a></li>
                <li><a href="{{ route('contact') }}" class="hover:underline">Contact Us</a></li>
            </ul>
        </div>
    </nav>

    <main class="mx-auto max-w-4xl px-6 py-16">
        @yield('content')
    </main>

    <footer class="border-t border-gray-200 dark:border-gray-800">
        <div class="mx-auto max-w-4xl px-6 py-6 text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} Launchpad. All rights reserved.
        </div>
    </footer>
</body>
</html>
