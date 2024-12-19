<header class="flex items-center justify-between py-10">
    <div>
        <a href="index.html" aria-label="Header title">
            <div class="flex items-center justify-between">
                <div class="mr-3">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}">
                </div>
                <div class="hidden h-6 text-2xl font-semibold sm:block">
                    Tailwind Blog
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
        {{-- <a href="{{ route('home.projects') }}" class="hidden font-medium text-gray-900 dark:text-gray-100 sm:block">
      Projects
    </a> --}}
        {{-- <a href="{{ route('home.about') }}" class="hidden font-medium text-gray-900 dark:text-gray-100 sm:block">
      About
    </a> --}}

        <button aria-label="Search">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="1.5"
                stroke="currentColor" class="h-6 w-6 text-gray-900 dark:text-gray-100">
                <path strokeLinecap="round" strokeLinejoin="round"
                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
        </button>

        <button aria-label="Toggle Dark Mode">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                class="h-6 w-6 text-gray-900 dark:text-gray-100">
                {{-- <path
          fillRule="evenodd"
          d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
          clipRule="evenodd"
        /> --}}

                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />

            </svg>
        </button>



    </div>
</header>
