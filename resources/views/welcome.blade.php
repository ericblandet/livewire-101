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

</head>

<body class="antialiased">

    <h1
        class="bg-gradient-to-r from-emerald-400 to-cyan-400 bg-clip-text text-center text-3xl font-semibold text-transparent">
        HELLO
    </h1>
    <a href="/"><button class="rounded-2xl bg-gradient-to-r from-emerald-400 to-cyan-400">
            🔙 </button></a>

</body>


</html>
