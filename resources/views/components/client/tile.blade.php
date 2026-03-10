@props(['title','description'])
<div class="mb-4">
    <article class="bg-main-color h-12 rounded-lg px-16 items-center">
        <div class="flex justify-between items-center h-full">
            <h3 class="font-serif text-lg text-client-background">
                {{ $title }}
            </h3>
            <svg width="21" height="12" viewBox="0 0 21 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.5 1.5L10.5 10.5L19.5 1.5" stroke="#F5FFFC" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>

        <div class="h-0 bg-main-color overflow-hidden">
            {{ $description }}
        </div>
    </article>
</div>

