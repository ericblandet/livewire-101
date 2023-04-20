<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net" rel="preconnect">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="antialiased">

    <h1
        class="bg-gradient-to-r from-emerald-400 to-cyan-400 bg-clip-text text-center text-3xl font-semibold text-transparent">
        HELLO
    </h1>
    <div class="mt-6">
        <a href="/"><button
                class="ml-3 rounded-xl bg-gradient-to-br from-emerald-400 to-cyan-400 py-2 px-6 shadow-xl hover:opacity-70 hover:shadow-md">
                🔙 </button></a>

        <a href="/profiles/create"><button
                class="ml-3 rounded-md bg-gradient-to-tl from-emerald-400 to-cyan-400 p-2 font-medium shadow-xl hover:opacity-70 hover:shadow-md">Create
                profile</button></a>
    </div>
    <hr class="my-12 h-0.5 border-t-0 bg-neutral-100 opacity-100 dark:opacity-50" />
    @livewire('search-dropdown')

</body>

@livewireScripts

</html>
