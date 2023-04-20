<div>
    @if ($successMessage)
        <div class="my-3 flex justify-between bg-green-300 p-1 text-xs font-bold text-green-800 opacity-60">
            <div class="p-1">{{ $successMessage }}</div>
            <button
                class="rounded-sm bg-green-700 p-1 px-1 text-xs text-green-300 hover:bg-green-300 hover:text-green-700"
                type="button" wire:click="$set('successMessage',null)">close</button>
        </div>
    @endif

    <form action="{{ '/posts/' . $post->id . '/comments' }}" method="POST" wire:submit.prevent='publishComment'>
        @csrf
        <input name="post_id" type="hidden" value="{{ $post->id }}">
        <div class="my-2">
            <textarea
                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                id="content" name="content" wire:model.defer="content" rows="3" placeholder="Tell us what you think">{{ old('content') ?? '' }}</textarea>
        </div>
        @error('content')
            <p class="text-bold my-2 rounded-md bg-red-300 py-1 pl-2 text-xs text-red-900 opacity-70">
                {{ $message }}</p>
        @enderror

        <div class="flex justify-between">
            <input
                class="block w-4/12 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                id="author" name="author" type="text" value="{{ old('author') }}" wire:model.defer="author"
                placeholder="Who are you?" autocomplete="username">
            <button
                class="ml-2 inline-flex items-center rounded-md bg-gradient-to-r from-amber-300 to-pink-300 px-3 py-2 text-sm font-semibold text-black shadow-md hover:bg-indigo-500 hover:shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:opacity-50"
                type="submit">
                <span>Publish</span></button>
        </div>

    </form>

    <div class="mx-auto mt-12">
        <ul class="space-y-3">
            @foreach ($post->comments as $comment)
                <li class="rounded-md border p-3">
                    <div class="flex justify-between">
                        <div class="mb-1 text-xs text-amber-600">{{ $comment->author }} said:</div>
                        <div><time class="text-xs text-gray-300">{{ $comment->created_at->diffForHumans() }}</time>
                        </div>
                    </div>
                    <div class="text-s ml-2">{{ $comment->content }}</div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
