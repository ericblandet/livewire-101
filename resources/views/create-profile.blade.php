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
    <div>
        <div class="mx-auto mt-10 mb-10 max-w-3xl">
            {{-- <section
                class="flex h-96 items-center justify-center rounded-2xl bg-gradient-to-tr from-fuchsia-500 to-cyan-500">
                <h1 class="text block text-9xl italic text-slate-600">Placeholder</h1>
            </section>
            <section
                class="flex h-96 items-center justify-center rounded-2xl bg-gradient-to-tr from-fuchsia-500 to-cyan-500">
                <h1 class="text block text-9xl italic text-slate-600">Placeholder</h1>
            </section> --}}

            <section>
                @livewire('profile-form')
            </section>
        </div>
    </div>
</body>

@livewireScripts

</html>
