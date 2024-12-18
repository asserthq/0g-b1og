@extends('layouts.home')

@section('main')

    <section class="mx-auto max-w-3xl px-4 sm:px-6 xl:max-w-5xl xl:px-0">
        <div class="divide-y divide-gray-200 dark:divide-gray-700">
            <div class="space-y-2 pb-8 pt-6 md:space-y-5">
                <h1
                    class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-6xl md:leading-14">
                    Projects
                </h1>
                <p class="text-lg leading-7 text-gray-500 dark:text-gray-400">
                    Showcase your projects with a hero image (16 x 9)
                </p>
            </div>
            <div class="container py-12">
                <div class="-m-4 flex flex-wrap">
                    <div class="md max-w-[544px] p-4 md:w-1/2">
                        <div
                            class="overflow-hidden rounded-md border-2 border-gray-200 border-opacity-60 dark:border-gray-700">
                            <a href="#" aria-label="Link to #">
                                <img alt="title" src="{{ Vite::asset('resources/images/google.png') }}"
                                    class="object-cover object-center md:h-36 lg:h-48" width="544" height="306" />
                            </a>
                            <div class="p-6">
                                <h2 class="mb-3 text-2xl font-bold leading-8 tracking-tight">
                                    <a href="#" aria-label="Link to #">Title</a>
                                </h2>
                                <p class="prose mb-3 max-w-none text-gray-500 dark:text-gray-400">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                                <a href="#"
                                    class="text-base font-medium leading-6 text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                                    aria-label="Link to #">
                                    Learn more &rarr;
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="md max-w-[544px] p-4 md:w-1/2">
                        <div
                            class="overflow-hidden rounded-md border-2 border-gray-200 border-opacity-60 dark:border-gray-700">
                            <a href="#" aria-label="Link to #">
                                <img alt="title" src="{{ Vite::asset('resources/images/time-machine.jpg') }}"
                                    class="object-cover object-center md:h-36 lg:h-48" width="544" height="306" />
                            </a>
                            <div class="p-6">
                                <h2 class="mb-3 text-2xl font-bold leading-8 tracking-tight">
                                    <a href="#" aria-label="Link to #">Title</a>
                                </h2>
                                <p class="prose mb-3 max-w-none text-gray-500 dark:text-gray-400">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                                <a href="#"
                                    class="text-base font-medium leading-6 text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                                    aria-label="Link to #">
                                    Learn more &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
