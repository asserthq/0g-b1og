@extends('layouts.home')

@section('main')

    <div class="divide-y divide-gray-200 dark:divide-gray-700">
        <div class="space-y-2 pb-8 pt-6 md:space-y-5">
            <h1
                class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-6xl md:leading-14">
                Latest
            </h1>
            <p class="text-lg leading-7 text-gray-500 dark:text-gray-400">
                A blog created with Tailwind HTML Blog template
            </p>
        </div>
        <ul class="divide-y divide-gray-200 dark:divide-gray-700">
            <li class="py-12">
                <article>
                    <div class="space-y-2 xl:grid xl:grid-cols-4 xl:items-baseline xl:space-y-0">
                        <dl>
                            <dt class="sr-only">Published on</dt>
                            <dd class="text-base font-medium leading-6 text-gray-500 dark:text-gray-400">
                                <time dateTime="2023-08-05T00:00:00.000Z">August 5, 2023</time>
                            </dd>
                        </dl>
                        <div class="space-y-5 xl:col-span-3">
                            <div class="space-y-6">
                                <div>
                                    <h2 class="text-2xl font-bold leading-8 tracking-tight">
                                        <a href="{{ route('home.article') }}" class="text-gray-900 dark:text-gray-100">
                                            Article with sidebar
                                        </a>
                                    </h2>
                                    <div class="flex flex-wrap">
                                        <a href="#"
                                            class="mr-3 text-sm font-medium uppercase text-primary-500 hover:text-primary-600 dark:hover:text-primary-400">
                                            HTML
                                        </a>
                                        <a href="#"
                                            class="mr-3 text-sm font-medium uppercase text-primary-500 hover:text-primary-600 dark:hover:text-primary-400">
                                            JS
                                        </a>
                                        <a href="#"
                                            class="mr-3 text-sm font-medium uppercase text-primary-500 hover:text-primary-600 dark:hover:text-primary-400">
                                            PHP
                                        </a>
                                    </div>
                                </div>
                                <div class="prose max-w-none text-gray-500 dark:text-gray-400">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </div>
                            </div>
                            <div class="text-base font-medium leading-6">
                                <a href="{{ route('home.article') }}"
                                    class="text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                                    aria-label="Read article">
                                    Read more &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            </li>

            <li class="py-12">
                <article>
                    <div class="space-y-2 xl:grid xl:grid-cols-4 xl:items-baseline xl:space-y-0">
                        <dl>
                            <dt class="sr-only">Published on</dt>
                            <dd class="text-base font-medium leading-6 text-gray-500 dark:text-gray-400">
                                <time dateTime="2023-08-05T00:00:00.000Z">August 5, 2023</time>
                            </dd>
                        </dl>
                        <div class="space-y-5 xl:col-span-3">
                            <div class="space-y-6">
                                <div>
                                    <h2 class="text-2xl font-bold leading-8 tracking-tight">
                                        <a href="{{ route('home.article') }}" class="text-gray-900 dark:text-gray-100">
                                            Simple article
                                        </a>
                                    </h2>
                                    <div class="flex flex-wrap">
                                        <a href="#"
                                            class="mr-3 text-sm font-medium uppercase text-primary-500 hover:text-primary-600 dark:hover:text-primary-400">
                                            HTML
                                        </a>
                                        <a href="#"
                                            class="mr-3 text-sm font-medium uppercase text-primary-500 hover:text-primary-600 dark:hover:text-primary-400">
                                            JS
                                        </a>
                                        <a href="#"
                                            class="mr-3 text-sm font-medium uppercase text-primary-500 hover:text-primary-600 dark:hover:text-primary-400">
                                            PHP
                                        </a>
                                    </div>
                                </div>
                                <div class="prose max-w-none text-gray-500 dark:text-gray-400">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </div>
                            </div>
                            <div class="text-base font-medium leading-6">
                                <a href="{{ route('home.article') }}"
                                    class="text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                                    aria-label="Read article">
                                    Read more &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            </li>

            <li class="py-12">
                <article>
                    <div class="space-y-2 xl:grid xl:grid-cols-4 xl:items-baseline xl:space-y-0">
                        <dl>
                            <dt class="sr-only">Published on</dt>
                            <dd class="text-base font-medium leading-6 text-gray-500 dark:text-gray-400">
                                <time dateTime="2023-08-05T00:00:00.000Z">August 5, 2023</time>
                            </dd>
                        </dl>
                        <div class="space-y-5 xl:col-span-3">
                            <div class="space-y-6">
                                <div>
                                    <h2 class="text-2xl font-bold leading-8 tracking-tight">
                                        <a href="#" class="text-gray-900 dark:text-gray-100">
                                            Release of Tailwind HTML Starter Blog
                                        </a>
                                    </h2>
                                    <div class="flex flex-wrap">
                                        <a href="#"
                                            class="mr-3 text-sm font-medium uppercase text-primary-500 hover:text-primary-600 dark:hover:text-primary-400">
                                            HTML
                                        </a>
                                        <a href="#"
                                            class="mr-3 text-sm font-medium uppercase text-primary-500 hover:text-primary-600 dark:hover:text-primary-400">
                                            JS
                                        </a>
                                        <a href="#"
                                            class="mr-3 text-sm font-medium uppercase text-primary-500 hover:text-primary-600 dark:hover:text-primary-400">
                                            PHP
                                        </a>
                                    </div>
                                </div>
                                <div class="prose max-w-none text-gray-500 dark:text-gray-400">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </div>
                            </div>
                            <div class="text-base font-medium leading-6">
                                <a href="#"
                                    class="text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                                    aria-label="Read article">
                                    Read more &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            </li>
        </ul>
    </div>
    <div class="flex justify-end text-base font-medium leading-6">
        <a href="blog.html" class="text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
            aria-label="All posts">
            All Posts &rarr;
        </a>
    </div>
@endsection
