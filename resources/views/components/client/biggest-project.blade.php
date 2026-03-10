@props(['title','description','src','alt'])

<article>
    <h3 class="text-4xl font-serif text-font-color">
        {{ $title }}
    </h3>
    <div class="flex justify-between mt-4">
        <p class="font-sans text-font-color text-lg">
            {{ $description }}
        </p>
        <div class="">
            <img src="{{ $src }}" alt="{{ $alt }}">
        </div>
    </div>
</article>
