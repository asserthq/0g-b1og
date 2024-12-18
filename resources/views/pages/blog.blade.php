@extends('layouts.home')

@section('main')

    <div>
        <div class="pb-6 pt-6">
            <h1
                class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 dark:text-gray-100 sm:hidden sm:text-4xl sm:leading-10 md:text-6xl md:leading-14">
                Title
            </h1>
        </div>
        <div class="flex sm:space-x-24">
            <div
                class="hidden h-full max-h-screen min-w-[280px] max-w-[280px] flex-wrap overflow-auto rounded bg-gray-50 pt-5 shadow-md dark:bg-gray-900/70 dark:shadow-gray-800/40 sm:flex">
                <div class="px-6 py-4">
                    <h3 class="font-bold uppercase text-primary-500">All Posts</h3>
                    <ul>
                        <li class="my-3">
                            <a href="#"
                                class="px-3 py-2 text-sm font-medium uppercase text-gray-500 hover:text-primary-500 dark:text-gray-300 dark:hover:text-primary-500"
                                aria-label="View posts tagged">
                                html
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="#"
                                class="px-3 py-2 text-sm font-medium uppercase text-gray-500 hover:text-primary-500 dark:text-gray-300 dark:hover:text-primary-500"
                                aria-label="View posts tagged">
                                js
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="#"
                                class="px-3 py-2 text-sm font-medium uppercase text-gray-500 hover:text-primary-500 dark:text-gray-300 dark:hover:text-primary-500"
                                aria-label="View posts tagged">
                                php
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <ul>
                    <li class="py-5">
                        <article class="flex flex-col space-y-2 xl:space-y-0">
                            <dl>
                                <dt class="sr-only">Published on</dt>
                                <dd class="text-base font-medium leading-6 text-gray-500 dark:text-gray-400">
                                    <time dateTime="2021-08-07T15:32:14.000Z">August 7, 2021</time>
                                </dd>
                            </dl>
                            <div class="space-y-3">
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
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </div>
                        </article>
                    </li>

                    <li class="py-5">
                        <article class="flex flex-col space-y-2 xl:space-y-0">
                            <dl>
                                <dt class="sr-only">Published on</dt>
                                <dd class="text-base font-medium leading-6 text-gray-500 dark:text-gray-400">
                                    <time dateTime="2021-08-07T15:32:14.000Z">August 7, 2021</time>
                                </dd>
                            </dl>
                            <div class="space-y-3">
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
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </div>
                        </article>
                    </li>

                    <li class="py-5">
                        <article class="flex flex-col space-y-2 xl:space-y-0">
                            <dl>
                                <dt class="sr-only">Published on</dt>
                                <dd class="text-base font-medium leading-6 text-gray-500 dark:text-gray-400">
                                    <time dateTime="2021-08-07T15:32:14.000Z">August 7, 2021</time>
                                </dd>
                            </dl>
                            <div class="space-y-3">
                                <div>
                                    <h2 class="text-2xl font-bold leading-8 tracking-tight">
                                        <a href="#" class="text-gray-900 dark:text-gray-100">
                                            Article title
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
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </div>
                        </article>
                    </li>
                </ul>

                <div class="space-y-2 pb-8 pt-6 md:space-y-5">
                    <nav class="flex justify-between">
                        <button class="cursor-auto disabled:opacity-50" disabled>
                            Previous
                        </button>

                        <span>
                            1 of 2
                        </span>

                        <a href="#" rel="next">
                            Next
                        </a>

                    </nav>
                </div>

            </div>
        </div>
    </div>
@endsection
