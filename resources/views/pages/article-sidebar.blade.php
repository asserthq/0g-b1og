@extends('layouts.home')

@section('main')
    <section class="mx-auto max-w-3xl px-4 sm:px-6 xl:max-w-5xl xl:px-0">

        <article>
            <div class="xl:divide-y xl:divide-gray-200 xl:dark:divide-gray-700">
                <header class="pt-6 xl:pb-6">
                    <div class="space-y-1 text-center">
                        <dl class="space-y-10">
                            <div>
                                <dt class="sr-only">Published on</dt>
                                <dd class="text-base font-medium leading-6 text-gray-500 dark:text-gray-400">
                                    <time dateTime="2021-05-02T00:00:00.000Z">
                                        Sunday, May 2, 2021
                                    </time>
                                </dd>
                            </div>
                        </dl>
                        <div>
                            <h1
                                class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-5xl md:leading-14">
                                Article title
                            </h1>
                        </div>
                    </div>
                </header>
                <div
                    class="grid-rows-[auto_1fr] divide-y divide-gray-200 pb-8 dark:divide-gray-700 xl:grid xl:grid-cols-4 xl:gap-x-6 xl:divide-y-0">
                    <dl class="pb-10 pt-6 xl:border-b xl:border-gray-200 xl:pt-11 xl:dark:border-gray-700">
                        <dt class="sr-only">Authors</dt>
                        <dd>
                            <ul
                                class="flex flex-wrap justify-center gap-4 sm:space-x-12 xl:block xl:space-x-0 xl:space-y-8">
                                <li class="flex items-center space-x-2">
                                    <img src="{{ Vite::asset('resources/images/avatar.png') }}" width="38" height="38" alt="avatar"
                                        class="h-10 w-10 rounded-full" />
                                    <dl class="whitespace-nowrap text-sm font-medium leading-5">
                                        <dt class="sr-only">Name</dt>
                                        <dd class="text-gray-900 dark:text-gray-100">John Doe</dd>
                                        <dt class="sr-only">Twitter</dt>
                                        <dd>
                                            <a href="#"
                                                class="text-primary-500 hover:text-primary-600 dark:hover:text-primary-400">
                                                Facebook
                                            </a>
                                        </dd>
                                    </dl>
                                </li>
                            </ul>
                        </dd>
                    </dl>
                    <div class="divide-y divide-gray-200 dark:divide-gray-700 xl:col-span-3 xl:row-span-2 xl:pb-0">
                        <div class="prose max-w-none pb-8 pt-10 dark:prose-invert">

                            <h1 id="nested-routes"><a href="#nested-routes" aria-hidden="true" tabindex="-1"><span
                                        class="icon icon-link"></span></a>Nested Routes</h1>
                            <p>The blog template supports posts in nested sub-folders. This helps in organisation and can be
                                used to group posts of similar content e.g. a multi-part series. This post is itself an
                                example of a nested route! It's located in the <code>/data/blog/nested-route</code> folder.
                            </p>
                            <h2 id="how"><a href="#how" aria-hidden="true" tabindex="-1"><span
                                        class="icon icon-link"></span></a>How</h2>
                            <p>Simplify create multiple folders inside the main <code>/data/blog</code> folder and add your
                                <code>.md</code>/<code>.mdx</code> files to them. You can even create something like
                                <code>/data/blog/nested-route/deeply-nested-route/my-post.md</code></p>
                            <p>We use Next.js catch all routes to handle the routing and path creations.</p>
                            <h2 id="use-cases"><a href="#use-cases" aria-hidden="true" tabindex="-1"><span
                                        class="icon icon-link"></span></a>Use Cases</h2>
                            <p>Here are some reasons to use nested routes</p>
                            <ul>
                                <li>More logical content organisation (blogs will still be displayed based on the created
                                    date)</li>
                                <li>Multi-part posts</li>
                                <li>Different sub-routes for each author</li>
                                <li>Internationalization (though it would be recommended to use <a target="_blank"
                                        rel="noopener noreferrer"
                                        href="https://nextjs.org/docs/advanced-features/i18n-routing">Next.js built-in i8n
                                        routing</a>)</li>
                            </ul>
                            <h2 id="note"><a href="#note" aria-hidden="true" tabindex="-1"><span
                                        class="icon icon-link"></span></a>Note</h2>
                            <ul>
                                <li>The previous/next post links at bottom of the template are currently sorted by date. One
                                    could explore modifying the template to refer the reader to the previous/next post in
                                    the series, rather than by date.</li>
                            </ul>

                        </div>
                        <div class="pb-6 pt-6 text-sm text-gray-700 dark:text-gray-300">
                            <a href="#" rel="nofollow">
                                Discuss on Twitter
                            </a>
                            •
                            <a href="#">View on GitHub</a>
                        </div>
                    </div>
                    <footer>
                        <div
                            class="divide-gray-200 text-sm font-medium leading-5 dark:divide-gray-700 xl:col-start-1 xl:row-start-2 xl:divide-y">
                            <div class="py-4 xl:py-8">
                                <h2 class="text-xs uppercase tracking-wide text-gray-500 dark:text-gray-400">
                                    Tags
                                </h2>
                                <div class="flex flex-wrap">
                                    <a href="#"
                                        class="mr-3 text-sm font-medium uppercase text-primary-500 hover:text-primary-600 dark:hover:text-primary-400">
                                        HTML
                                    </a>
                                    <a href="#"
                                        class="mr-3 text-sm font-medium uppercase text-primary-500 hover:text-primary-600 dark:hover:text-primary-400">
                                        PHP
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-between py-4 xl:block xl:space-y-8 xl:py-8">
                                <div>
                                    <h2 class="text-xs uppercase tracking-wide text-gray-500 dark:text-gray-400">
                                        Previous Article
                                    </h2>
                                    <div class="text-primary-500 hover:text-primary-600 dark:hover:text-primary-400">
                                        <a href="#">Article with banner</a>
                                    </div>
                                </div>
                                <div>
                                    <h2 class="text-xs uppercase tracking-wide text-gray-500 dark:text-gray-400">
                                        Next Article
                                    </h2>
                                    <div class="text-primary-500 hover:text-primary-600 dark:hover:text-primary-400">
                                        <a href="#">Simple article</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-4 xl:pt-8">
                            <a href="{{ route('home.blog') }}" class="text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                                aria-label="Back to the blog">
                                &larr; Back to the blog
                            </a>
                        </div>
                    </footer>
                </div>
            </div>
        </article>
    </section>
@endsection
