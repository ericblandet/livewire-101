<x-layout>
    <div class="mx-auto mt-12 max-w-2xl space-y-12">
        <div>
            <a class="left-0 bg-gradient-to-r from-amber-500 to-purple-600 bg-clip-text text-transparent"
                href="/posts/">🔙</a>
            <h1
                class="mb-12 rounded-lg border bg-gradient-to-r from-amber-500 to-purple-600 bg-clip-text p-2 text-center text-4xl font-semibold text-transparent">
                {{ $post->title }}</h1>
        </div>


        <div>
            {{ $post->content }}
        </div>

        <hr class="my-12 h-0.5 border-t-0 bg-gray-500 opacity-100 dark:opacity-50" />
        @livewire('comments-section', ['post' => $post])
    </div>
</x-layout>
