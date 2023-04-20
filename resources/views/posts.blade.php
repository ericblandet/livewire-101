<x-layout>
    <div class="mx-auto mt-12 max-w-2xl space-y-12">
        <h1
            class="mt-12 rounded-lg border bg-gradient-to-r from-amber-500 to-purple-600 bg-clip-text p-2 text-center text-4xl font-semibold text-transparent text-slate-800">
            All Posts
        </h1>

        <div class="mx-auto">
            <ul class="space-y-3">
                @foreach ($posts as $post)
                    <li>
                        <a class="hover:text-amber-500" href="{{ '/posts/' . $post->id }}">{{ $post->title }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-layout>
