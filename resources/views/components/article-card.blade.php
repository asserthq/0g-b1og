<div class="md max-w-[544px] p-4 md:w-1/2">
    <div class="overflow-hidden rounded-md border-2 border-gray-200 border-opacity-60 dark:border-gray-700">
        <a href="#" aria-label="Link to #">
            <img alt="title" src="{{ $post->getThumbnailUrl() }}" class="object-cover object-center md:h-36 lg:h-48" width="544" height="306" />
        </a>
        <div class="p-6">
            <h2 class="mb-3 text-2xl font-bold leading-8 tracking-tight">
                <a href="#" aria-label="Link to #">
                    {{ $post->title }}
                </a>
            </h2>
            <p class="prose mb-3 max-w-none text-gray-500 dark:text-gray-400">
                {{ $post->description }}
            </p>
            <a 
                href="#"
                class="text-base font-medium leading-6 text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                aria-label="Link to #">

                Learn more &rarr;
            </a>
        </div>
    </div>
</div>