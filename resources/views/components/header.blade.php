<header class="flex items-center justify-between py-10">
    <div>
        <a href="{{ route('home.index') }}" aria-label="Header title">
            <div class="flex items-center justify-between">
                <div class="mr-3">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}">
                </div>
                <div class="hidden h-6 text-2xl font-semibold sm:block">
                    0g-b1og
                </div>
            </div>
        </a>
    </div>

    <div class="flex items-center space-x-4 leading-5 sm:space-x-6">
        <a href="{{ route('home.blog') }}" class="hidden font-medium text-gray-900 dark:text-gray-100 sm:block">
            Blog
        </a>
        <a href="{{ route('home.tags') }}" class="hidden font-medium text-gray-900 dark:text-gray-100 sm:block">
            Tags
        </a>
        <a href="{{ route('home.categories') }}" class="hidden font-medium text-gray-900 dark:text-gray-100 sm:block">
            Categories
        </a>

        {{-- <button aria-label="Search">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="1.5"
                stroke="currentColor" class="h-6 w-6 text-gray-900 dark:text-gray-100">
                <path strokeLinecap="round" strokeLinejoin="round"
                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
        </button> --}}

        @include('components.theme-switch')

        @include('components.mobile-nav')

    </div>
</header>
