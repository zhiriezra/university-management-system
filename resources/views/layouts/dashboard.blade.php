<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-fuchsia-100">
            {{-- @livewire('navigation-menu') --}}

            <!-- Page Heading -->
            {{-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

            <!-- Page Content -->
            {{-- <main>
                {{ $slot }}
            </main> --}}

            <div class="grid md:grid-cols-12">
                <div class="md:col-span-2 bg-fuchsia-800 min-h-full text-white">
                    <nav>
                        <div class="">
                            <h1 class="text-2xl font-bold p-4 border-b border-amber-300 text-amber-300">
                                <a href="#">{{ config('app.name') }}</a>
                            </h1>
                        </div>
                        <ul class="p-4">
                            <li>
                                <a href="#">Exam Eligibility</a>
                            </li>
                            <li>
                                <a href="#">Fees</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="md:col-span-10 mx-8 pt-4">
                    <main>
                        <div class="flex justify-end">
                            <a href="">Logout</a>
                            <a href="" class="ml-4">Profile</a>
                        </div>

                        {{ $slot }}
                    </main>
                </div>

            </div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
