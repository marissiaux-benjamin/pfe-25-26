<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ config('app.name') }}</title>

    <link rel="stylesheet" href="https://use.typekit.net/zvl2xnt.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-client-background">
<h1 class="w-0 h-0 overflow-hidden">@yield('title')</h1>

<header>
    <nav class="bg-main-color text-white py-2 px-6 md:px-16 lg:px-32 h-auto min-h-16">
        <div class="flex justify-between items-center gap-4 flex-wrap py-2">
            <h1>
                <a href="{{ route('home') }}">
                    <img src="{{ asset("assets/icons/logo.svg") }}" alt="{{ __("Logo de l'Atelier de Capucine") }}">
                </a>
            </h1>
            <ul class="flex gap-4 md:gap-6 flex-wrap">
                <li class="font-serif text-base md:text-lg"><a href="{{ route('home') }}">{{ __('Accueil') }}</a></li>
                <li class="font-serif text-base md:text-lg"><a href="{{ route('contact') }}">{{ __('Contact') }}</a></li>
                <li class="font-serif text-base md:text-lg"><a href="{{ route('e-commerce') }}">{{ __('E-Commerce') }}</a></li>
            </ul>
        </div>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer class="bg-main-color py-10 md:py-16">
    <h1 class="w-0 h-0 overflow-hidden">
        Footer
    </h1>
    <div class="max-w-5xl mx-auto px-6 md:px-10 lg:px-0 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
        <section>
            <h2 class="font-serif text-client-background text-2xl mb-4">
                {{ __('Info') }}
            </h2>
            <ul class="flex flex-col gap-3">
                <li class="font-sans text-lg text-client-background">
                    <a href="mailto:beandrianne@gmail.com" title="" class="flex items-center gap-2 nav-links">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="shrink-0">
                            <path
                                d="M22 7L13.009 12.727C12.7039 12.9042 12.3573 12.9976 12.0045 12.9976C11.6517 12.9976 11.3051 12.9042 11 12.727L2 7"
                                stroke="#F5FFFC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path
                                d="M20 4H4C2.89543 4 2 4.89543 2 6V18C2 19.1046 2.89543 20 4 20H20C21.1046 20 22 19.1046 22 18V6C22 4.89543 21.1046 4 20 4Z"
                                stroke="#F5FFFC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="break-all">{{ __('beandrianne@gmail.com') }}</span>
                    </a>
                </li>
                <li class="font-sans text-lg text-client-background">
                    <a href="tel:+32495544715" title="{{ __('Téléphonez à L’Atelier de Capucine') }}"
                       class="flex items-center gap-2 nav-links">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="shrink-0">
                            <path
                                d="M13.832 16.568C14.0385 16.6628 14.2712 16.6845 14.4917 16.6294C14.7122 16.5744 14.9073 16.4458 15.045 16.265L15.4 15.8C15.5863 15.5516 15.8279 15.35 16.1056 15.2111C16.3833 15.0723 16.6895 15 17 15H20C20.5304 15 21.0391 15.2107 21.4142 15.5858C21.7893 15.9609 22 16.4696 22 17V20C22 20.5304 21.7893 21.0391 21.4142 21.4142C21.0391 21.7893 20.5304 22 20 22C15.2261 22 10.6477 20.1036 7.27208 16.7279C3.89642 13.3523 2 8.7739 2 4C2 3.46957 2.21071 2.96086 2.58579 2.58579C2.96086 2.21071 3.46957 2 4 2H7C7.53043 2 8.03914 2.21071 8.41421 2.58579C8.78929 2.96086 9 3.46957 9 4V7C9 7.31049 8.92771 7.61672 8.78885 7.89443C8.65 8.17214 8.44839 8.41371 8.2 8.6L7.732 8.951C7.54842 9.09118 7.41902 9.29059 7.36579 9.51535C7.31256 9.74012 7.33878 9.97638 7.44 10.184C8.80668 12.9599 11.0544 15.2048 13.832 16.568Z"
                                stroke="#F5FFFC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        {{ __('0495 54 47 15') }}
                    </a>
                </li>
            </ul>
        </section>

        <nav>
            <h2 class="font-serif text-client-background text-2xl mb-4">
                {{ __('Navigation') }}
            </h2>
            <ul class="flex flex-col gap-3">
                <li class="flex items-center gap-2 nav-links"><a href="{{ route('home') }}">{{ __('Accueil') }}</a></li>
                <li class="flex items-center gap-2 nav-links"><a href="{{ route('contact') }}">{{ __('Contact') }}</a></li>
                <li class="flex items-center gap-2 nav-links"><a href="{{ route('e-commerce') }}">{{ __('E-Commerce') }}</a></li>
            </ul>
        </nav>

        <section>
            <h2 class="font-serif text-client-background text-2xl mb-4">
                {{ __('Réseaux') }}
            </h2>
            <ul class="flex flex-col gap-3">
                <li class="flex items-center gap-2 nav-links">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="shrink-0">
                        <path d="M17 2H7C4.23858 2 2 4.23858 2 7V17C2 19.7614 4.23858 22 7 22H17C19.7614 22 22 19.7614 22 17V7C22 4.23858 19.7614 2 17 2Z" stroke="#F5FFFC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16 11.3698C16.1234 12.2021 15.9813 13.052 15.5938 13.7988C15.2063 14.5456 14.5932 15.1512 13.8416 15.5295C13.0901 15.9077 12.2385 16.0394 11.4078 15.9057C10.5771 15.7721 9.80977 15.3799 9.21485 14.785C8.61993 14.1901 8.22774 13.4227 8.09408 12.592C7.96042 11.7614 8.09208 10.9097 8.47034 10.1582C8.8486 9.40667 9.4542 8.79355 10.201 8.40605C10.9478 8.01856 11.7978 7.8764 12.63 7.99981C13.4789 8.1257 14.2649 8.52128 14.8717 9.12812C15.4785 9.73496 15.8741 10.5209 16 11.3698Z" stroke="#F5FFFC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17.5 6.5H17.51" stroke="#F5FFFC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <a href="https://www.instagram.com/atelier_capucine/" title="{{ __('Voir le compte Instagram de L’atelier de Capucine') }}">{{ __('Instagram') }}</a>
                </li>
                <li class="flex items-center gap-2 nav-links">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="shrink-0">
                        <path d="M18 2H15C13.6739 2 12.4021 2.52678 11.4645 3.46447C10.5268 4.40215 10 5.67392 10 7V10H7V14H10V22H14V14H17L18 10H14V7C14 6.73478 14.1054 6.48043 14.2929 6.29289C14.4804 6.10536 14.7348 6 15 6H18V2Z" stroke="#F5FFFC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <a href="https://www.facebook.com/latelier.decapucine.9" title="{{ __('Voir le compte Facebook de L’atelier de Capucine') }}">{{ __('Facebook') }}</a>
                </li>
            </ul>
        </section>

        <section>
            <h2 class="font-serif text-client-background text-2xl mb-4">
                {{ __('Horaires') }}
            </h2>
            <p class="font-sans text-client-background text-lg">
                {{ __('Sur Rendez-vous') }}
            </p>
        </section>
    </div>
</footer>

@livewireScripts
</body>
</html>
