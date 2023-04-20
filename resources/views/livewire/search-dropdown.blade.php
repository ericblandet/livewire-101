<div class="mt-10 flex flex-1 items-center justify-center px-2 lg:ml-6 lg:justify-start">
    <div class="w-full max-w-lg lg:max-w-xs">
        <label class="sr-only" for="search">Search for songs</label>
        <div class="relative">
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <input
                class="focus:shadow-outline-blue block w-full rounded-md border border-gray-300 bg-white py-2 pl-10 pr-3 leading-5 placeholder-gray-500 transition duration-150 ease-in-out focus:border-blue-300 focus:placeholder-gray-400 focus:outline-none sm:text-sm"
                id="search" type="search" wire:model.debounce.300ms="search" placeholder="Search for songs..."
                autocomplete="off">
            @if (strlen($search) > 2)


                <ul
                    class="absolute z-50 mt-2 w-full divide-y divide-gray-200 rounded-md border border-gray-300 bg-white text-sm text-gray-700">
                    @forelse ($searchResults as $result)
                        <li>
                            <a class="flex items-center px-4 py-4 transition duration-150 ease-in-out hover:bg-gray-200"
                                href="{{ $result['trackViewUrl'] ?? '#' }}">
                                <img class="w-10" src="{{ $result['artworkUrl60'] }}" alt="album art">
                                <div class="ml-4 leading-tight"> {{ $result['wrapperType'] }}</div>
                                <div class="ml-4 leading-tight">
                                    <div class="font-semibold">{{ $result['trackName'] ?? '' }}
                                    </div>
                                    <div class="text-gray-600">{{ $result['artistName'] ?? '' }}
                                    </div>
                                </div>
                            </a>
                        </li>
                    @empty
                        <li class="px-4 py-4">No results found for {{ $search }}</li>
                    @endforelse
                @else
                </ul>
            @endif
        </div>
    </div>
