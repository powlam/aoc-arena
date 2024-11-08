<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>
        <meta name="version" content="{{ config('app.version') }}">

        <link rel="icon" href="{{ Vite::asset('resources/images/favicon/favicon.ico') }}" sizes="32x32">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-gray-900">
        <div class="flex flex-col items-center min-h-screen gap-6 pt-6 bg-gray-100 sm:gap-6 sm:justify-start">
            <div class="h-12 sm:h-20">
                <a href="{{ route('welcome') }}" wire:navigate>
                    <x-application-logo class="h-full text-gray-500 fill-current" />
                </a>
            </div>

            <div class="w-full px-6 py-4 overflow-hidden bg-white shadow-md sm:max-w-7xl sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
