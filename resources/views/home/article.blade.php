@extends('layouts.home')

@section('main')

    <section class="mx-auto max-w-3xl px-4 sm:px-6 xl:max-w-5xl xl:px-0">
        <article>
            <div>

                <header>
                    <div class="space-y-1 border-b border-gray-200 pb-10 text-center dark:border-gray-700">

                        <dl>
                            <div>
                                <dt class="sr-only">Published on</dt>
                                <dd class="text-base font-medium leading-6 text-gray-500 dark:text-gray-400">
                                    <time dateTime="2021-08-07T15:32:14.000Z">August 7, 2021</time>
                                </dd>
                            </div>
                        </dl>

                        <div>
                            <h1 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-5xl md:leading-14">
                                {{ $post->title }}
                            </h1>
                        </div>
                    </div>
                </header>

                <div class="grid-rows-[auto_1fr] divide-y divide-gray-200 pb-8 dark:divide-gray-700 xl:divide-y-0">

                    <div class="divide-y divide-gray-200 dark:divide-gray-700 xl:col-span-3 xl:row-span-2 xl:pb-0">
                        <div class="prose max-w-none pb-8 pt-10 dark:prose-invert">
                             {{ $post->content }}
                        </div>
                    </div>

                    <footer>
                        <div class="flex flex-col text-sm font-medium sm:flex-row sm:justify-between sm:text-base">
                            <div class="pt-4 xl:pt-8">
                                <a href="article-sidebar.html"
                                    class="text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                                    aria-label="Previous post">
                                    &larr; _Previous post title_
                                </a>
                            </div>
                            <div class="pt-4 xl:pt-8">
                                <a href="#"
                                    class="text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                                    aria-label="Next post">
                                    _Next post title_ &rarr;
                                </a>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </article>
    </section>
@endsection
