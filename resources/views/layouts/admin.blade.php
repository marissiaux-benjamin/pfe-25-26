<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? "Home" }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>

<main>
    <h1>Hello World !</h1>
    {{ $slot }}
</main>

@livewireScripts
</body>
</html>
