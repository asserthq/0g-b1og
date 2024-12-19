<!DOCTYPE HTML>
<html lang="en" class="scroll-smooth" :class="{ 'dark': darkMode }" x-data="{ showMenu: false, darkMode: false }">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="apple-touch-icon" sizes="76x76" href="{{ Vite::asset('resources/favicons/apple-touch-icon.png') }}" />
<link rel="icon" type="image/png" sizes="32x32" href="{{ Vite::asset('resources/favicons/favicon-32x32.png') }}" />
<link rel="icon" type="image/png" sizes="16x16" href="{{ Vite::asset('resources/favicons/favicon-16x16.png') }}" />
<link rel="mask-icon" href="{{ Vite::asset('resources/favicons/safari-pinned-tab.svg') }}" color="#5bbad5" />

@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/scss/app.scss', 'resources/css/blog.css', 'resources/js/prism.js'])

<body class="bg-white text-black antialiased dark:bg-gray-950 dark:text-white">
    <section class="mx-auto max-w-3xl px-4 sm:px-6 xl:max-w-5xl xl:px-0">
        <div class="flex h-screen flex-col justify-between font-sans">

            @include('components.header')

            <main class="mb-auto">
                @yield('main')
            </main>

            @include('components.footer')

        </div>
    </section>
</body>

</html>
