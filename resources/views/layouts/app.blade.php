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
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/scss/app.scss'])
    </head>

    <body class="font-sans antialiased">

        <div class="min-h-screen bg-gray-100 dark:bg-gray-900 ">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="container mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Topics Navigation -->
            @isset($topics)
                <nav class="w-full py-4 border-t border-b border-gray-100 dark:border-gray-700 bg-white dark:bg-gray-800" x-data="{ open: false }">
                    {{ $topics }}
                </nav>
            @endisset

            <!-- Page Content -->
            <main class="container mx-auto flex flex-wrap py-6">
                {{ $slot }}
            </main>

            <!-- Page Footer -->
            @isset($footer)
                <footer class="w-full pb-12 border-t border-gray-100 dark:border-gray-700 bg-white dark:bg-gray-800 shadow">
                    {{ $footer }}
                </footer>
            @endisset
        </div>
    </body>
</html>
