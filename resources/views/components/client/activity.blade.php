@props(['order','src','alt','title','text'])

<article class="flex flex-col md:flex-row justify-between items-start gap-4 mb-8">
    <div class="w-full md:flex-1 bg-client-background h-64 md:h-96 rounded-2xl">
        <img src="{{ $src }}" alt="{{ $alt }}" class="text-client-background w-full h-full object-cover rounded-2xl">
    </div>
    <div class="w-full text-client-background md:flex-1 {{ $order ?? '' }}">
        <h3 class="font-serif text-3xl">
            {{ $title }}
        </h3>
        <p class="font-sans text-lg">
            {{ $text }}
        </p>
    </div>
</article>
