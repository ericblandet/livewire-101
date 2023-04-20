<div class="mt-8 ml-10 flex flex-col">
    <h1
        class="my-12 rounded-lg border bg-gradient-to-r from-amber-200 to-rose-400 bg-clip-text p-2 text-center text-6xl font-semibold text-transparent text-slate-800">
        Profiles
    </h1>
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <div class="w-full max-w-lg lg:max-w-xs">
                    <label class="sr-only" for="search">Search</label>
                    <div class="relative">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input
                            class="focus:shadow-outline-blue block w-full rounded-md border border-gray-300 bg-white py-2 pl-10 pr-3 leading-5 placeholder-gray-500 transition duration-150 ease-in-out focus:border-blue-300 focus:placeholder-gray-400 focus:outline-none sm:text-sm"
                            id="search" type="search" placeholder="Search" wire:model.debounce.300ms='search'>
                    </div>
                </div>
                <div class="relative flex items-start">
                    <div class="flex h-5 items-center">
                        <input class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out"
                            id="active" type="checkbox" wire:model="active">
                    </div>
                    <div class="ml-3 text-sm leading-5">
                        <label class="font-medium text-gray-700" for="active">Active?</label>
                    </div>
                </div>
            </div>

            <div class="mt-4 overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">

                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th
                                class="bg-gray-50 px-6 py-3 text-left text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                <div class="flex items-center">
                                    <button class="text-xs font-medium uppercase leading-4 tracking-wider text-gray-500"
                                        wire:click='sortBy("fullname")'>
                                        Full Name
                                    </button>
                                    <x-sort-icon field="fullname" :sortField="$sortField" :sortAsc="$sortAsc">
                                    </x-sort-icon>

                                </div>

                            </th>
                            <th
                                class="bg-gray-50 px-6 py-3 text-left text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                <div class="flex items-center">
                                    <button class="text-xs font-medium uppercase leading-4 tracking-wider text-gray-500"
                                        wire:click='sortBy("email")'>
                                        Email
                                    </button>

                                    <x-sort-icon field="email" :sortField="$sortField" :sortAsc="$sortAsc">
                                    </x-sort-icon>

                                </div>

                            </th>
                            <th
                                class="bg-gray-50 px-6 py-3 text-left text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                Status
                            </th>
                            <th class="bg-gray-50 px-6 py-3"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach ($profiles as $profile)
                            <tr>
                                <td class="whitespace-no-wrap w-4/12 px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 flex-shrink-0">
                                            <img class="h-10 w-10 rounded-full"
                                                src="https://www.gravatar.com/avatar/?d=mp&f=y" alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium leading-5 text-gray-900">
                                                {{ $profile->fullname }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="whitespace-no-wrap w-4/12 px-6 py-4">
                                    <div class="text-sm leading-5 text-gray-900">{{ $profile->email }}</div>
                                </td>
                                <td class="whitespace-no-wrap px-6 py-4">
                                    @if ($profile->active)
                                        <span
                                            class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">
                                            Active
                                        </span>
                                        {{-- <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-red-100 text-red-800">
                                                Inactive
                                            </span> --}}
                                    @else
                                        <span
                                            class="inline-flex items-center rounded-full bg-red-100 px-2.5 py-0.5 text-xs font-medium leading-4 text-red-800">
                                            Inactive
                                        </span>
                                    @endif
                                </td>
                                <td class="whitespace-no-wrap px-6 py-4 text-right text-sm font-medium leading-5">
                                    <a class="text-indigo-600 hover:text-indigo-900" href="#">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-8">
                {{ $profiles->links() }}
            </div>
        </div>
    </div>
    <div class="h-96"></div>
</div>
