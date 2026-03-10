@extends('layouts.client')

@section('title', 'Accueil')

@section('content')
    <div class="max-w-5xl mx-auto px-6 lg:px-0">
        <section class="text-center mt-16 md:mt-32">
            <img src="{{ asset("assets/icons/logo-minimaliste.svg") }}"
                 alt="{{ __("Logo de l'Atelier de Capucine") }}"
                 class="mx-auto mb-16 md:mb-32">
            <h2 class="font-serif text-3xl md:text-5xl mb-4 text-font-color">Bienvenue dans L'Atelier de Capucine&nbsp;!</h2>
            <p class="font-serif text-2xl md:text-4xl text-font-color">Artisanat de vitraux, lampes et galets</p>
            <div class="flex flex-col gap-4 mt-20 md:mt-40 animate-bounce">
                <p class="font-serif text-font-color">
                    Scrollez pour découvrir qui je suis
                </p>
                <div class="mx-auto mb-12">
                    <svg width="44" height="100" viewBox="0 0 44 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M24.4275 3.23832C25.1114 2.37092 24.9626 1.11336 24.0952 0.429486C23.2278 -0.254387 21.9702 -0.105606 21.2863 0.761799L22.8569 2.00006L24.4275 3.23832ZM41.6197 47.4531L43.6138 47.2999L43.6123 47.2804L43.6104 47.2609L41.6197 47.4531ZM19.3843 99.97C20.4723 100.161 21.5089 99.4335 21.6997 98.3455L24.8088 80.6161C24.9996 79.5281 24.2723 78.4915 23.1844 78.3007C22.0964 78.1099 21.0598 78.8372 20.869 79.9252L18.1053 95.6847L2.34579 92.921C1.25782 92.7302 0.221182 93.4575 0.0303903 94.5455C-0.160401 95.6334 0.566903 96.6701 1.65487 96.8609L19.3843 99.97ZM22.8569 2.00006L21.2863 0.761799C11.4286 13.2651 7.2005 27.7162 7.57738 39.7066C7.94922 51.5366 12.9205 61.7449 22.3381 64.2745L22.8569 62.3429L23.3757 60.4114C16.5322 58.5732 11.9267 50.7571 11.5754 39.581C11.2292 28.5654 15.1316 15.0289 24.4275 3.23832L22.8569 2.00006ZM22.8569 62.3429L22.3381 64.2745C26.6406 65.4301 30.2408 65.5188 33.2218 64.7494C36.2293 63.9732 38.4807 62.3546 40.0963 60.3253C43.2562 56.3562 43.8949 50.9584 43.6138 47.2999L41.6197 47.4531L39.6255 47.6063C39.8656 50.731 39.2534 54.9619 36.9669 57.8339C35.8593 59.2251 34.3386 60.3301 32.2222 60.8763C30.0792 61.4294 27.2037 61.4396 23.3757 60.4114L22.8569 62.3429ZM41.6197 47.4531L43.6104 47.2609C43.3754 44.8272 42.1677 41.3512 39.3465 38.4636C36.4712 35.5205 32.0338 33.3062 25.5931 33.3062V35.3062V37.3062C31.0356 37.3062 34.416 39.1408 36.4854 41.2589C38.609 43.4326 39.473 46.0301 39.6289 47.6453L41.6197 47.4531ZM25.5931 35.3062V33.3062C16.9203 33.3062 8.63412 41.0543 5.76687 52.8077C2.86398 64.7072 5.33392 80.9637 18.0925 99.1487L19.7298 98.0001L21.367 96.8514C9.10863 79.3793 7.08333 64.2889 9.65291 53.7557C12.2581 43.0764 19.4121 37.3062 25.5931 37.3062V35.3062Z"
                            fill="#1F2D2A"/>
                    </svg>
                </div>
            </div>
        </section>

        <section>
            <h2 class="font-serif text-font-color text-3xl md:text-5xl mb-6">
                Mon histoire
            </h2>
            <div class="flex flex-col md:flex-row gap-8 md:gap-12 justify-between">
                <div class="w-full md:w-1/3 min-h-64 md:min-h-0 bg-main-color rounded-2xl">
                </div>
                <div class="w-full md:w-2/3">
                    <p class="font-sans text-font-color mb-4">
                        Derrière <span class="font-bold">L'atelier de Capucine</span> se cache <span class="font-bold">Bérengère ANDRIANNE</span>,
                        créatrice de vitraux,
                        luminaires et pièces décoratives. Guidée depuis l'enfance par la fascination de la lumière et la
                        force
                        des matériaux primaires — verre, bois, béton — je fonde mon atelier en 2019 avec la volonté de
                        proposer
                        une création exigeante, sensible et durable.
                    </p>
                    <p class="font-sans text-font-color mb-4">
                        Chaque pièce est pensée comme une œuvre singulière, façonnée à la main dans mon atelier
                        situé à <span class="font-bold">Fexhe-le-Haut-Clocher</span>, en Hesbaye belge. Les matériaux,
                        bruts et nobles, sont
                        sélectionnés avec une attention particulière portée à leur qualité, leur origine et leur respect
                        de l'environnement.
                    </p>
                    <p class="font-sans text-font-color mb-4">
                        À la croisée de l'art et de l'artisanat, les créations de L'Atelier de Capucine invitent la
                        lumière à dialoguer avec la matière, offrant des objets intemporels, porteurs d'émotion et de
                        délicatesse.
                    </p>
                    <p class="font-sans text-font-color mb-4">
                        Mon ambition : Vous proposer des créations raffinées et durables, pensées pour traverser le
                        temps, destinées à celles et ceux qui portent une attention particulière à la beauté et au sens.
                    </p>
                    <p class="font-sans text-font-color">
                        Découvrez mon univers où chaque pièce raconte une histoire — et trouvez celle qui résonne
                        avec la vôtre.
                    </p>
                </div>
            </div>
        </section>

        <section class="mt-16">
            <h2 class="font-serif text-font-color text-3xl md:text-5xl mb-6">
                Mes projets sociaux
            </h2>
            <x-client.tile title="{{ __('Titre') }}" description="{{ __('description') }}"/>
            <x-client.tile title="{{ __('Titre') }}" description="{{ __('description') }}"/>
            <x-client.tile title="{{ __('Titre') }}" description="{{ __('description') }}"/>
            <x-client.tile title="{{ __('Titre') }}" description="{{ __('description') }}"/>
        </section>
    </div>

    <x-client.banner/>

    <div class="bg-main-color py-12">
        <section class="max-w-5xl mx-auto px-6 lg:px-0">
            <h2 class="font-serif text-client-background text-3xl md:text-5xl mb-10 md:mb-16">
                Qu'est ce que je fais vraiment?
            </h2>
            <x-client.activity src="" alt="photo" title="{{ __('Les Vitraux') }}" text="{{ __('Les vitraux') }}"/>
            <x-client.activity order="md:-order-1" src="" alt="photo" title="Les Galets" text="{{ __('Les galets') }}"/>
            <x-client.activity src="" alt="photo" title="Les Lampes" text="{{ __('Les lampes') }}"/>
        </section>
    </div>

    <section class="max-w-5xl mx-auto px-6 lg:px-0 py-12 md:py-16">
        <h2 class="font-serif text-3xl md:text-5xl text-font-color mb-8 md:mb-12">
            {{ __('Mes plus gros projets') }}
        </h2>
        <x-client.biggest-project title="{{ __('Vitrail Porte') }}" description="{{ __('Description') }}" src="{{ __('') }}" alt="{{ __('photo') }}"/>
    </section>
@endsection
