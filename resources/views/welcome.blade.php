<x-layout>


    <div class="ml-10 mt-5">
        <h1
            class="mb-6 bg-gradient-to-r from-emerald-400 to-cyan-400 bg-clip-text text-center text-6xl font-semibold text-transparent">
            HELLO
        </h1>
        <div>
            <h2 class="my-6 text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                Profile Form
            </h2>
            <a href="/profiles/create"><button
                    class="ml-3 rounded-md bg-gradient-to-tl from-emerald-400 to-cyan-400 p-2 font-medium shadow-xl hover:opacity-70 hover:shadow-md">Create
                    profile</button></a>
        </div>
        <hr class="my-12 h-0.5 border-t-0 bg-gray-500 opacity-100 dark:opacity-50" />
        <div>
            <h2 class="my-6 text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                Search Dropdown
            </h2>
            @livewire('search-dropdown')
        </div>

        <hr class="my-12 h-0.5 border-t-0 bg-gray-500 opacity-100 dark:opacity-50" />
        <div>
            <h2 class="my-6 text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                Paginated Table
            </h2>
            <a href="/profiles/"><button
                    class="ml-3 rounded-md bg-gradient-to-tr from-rose-300 to-sky-300 p-2 font-medium shadow-xl hover:opacity-70 hover:shadow-md">
                    See profiles</button>
            </a>
        </div>

        <hr class="my-12 h-0.5 border-t-0 bg-gray-500 opacity-100 dark:opacity-50" />
        <div>
            <h2 class="my-6 text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                Posts
            </h2>
            <a href="/posts/"><button
                    class="ml-3 rounded-md bg-gradient-to-tr from-rose-300 to-amber-300 p-2 font-medium shadow-xl hover:opacity-70 hover:shadow-md">
                    See posts</button>
            </a>
        </div>

    </div>
</x-layout>
