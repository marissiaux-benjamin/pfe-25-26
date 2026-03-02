<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
<h1>Titre document (client)</h1>

<header>
    <nav>
        <h2>Navigation Principale</h2>
        <p>nav bar (client)</p>
    </nav>
</header>

<main>
    @yield('content')
</main>

@livewireScripts
</body>
</html>
