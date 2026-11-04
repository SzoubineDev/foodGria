@props(['name', 'description', 'price', 'image', 'tag' => null, 'delay' => 0])

<article data-reveal data-reveal-delay="{{ $delay }}"
         class="group relative flex flex-col overflow-hidden rounded-3xl border border-charcoal-700/60 bg-charcoal-850 shadow-xl shadow-black/30 transition-all duration-500 hover:-translate-y-2 hover:border-ember-500/40 hover:shadow-2xl hover:shadow-black/50">

    {{-- Photography --}}
    <div class="relative aspect-[4/3] overflow-hidden">
        <img src="{{ asset('images/' . $image) }}" alt="{{ $name }} — freshly flame-grilled at Ember & Oak"
             width="900" height="675" loading="lazy" decoding="async"
             class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-105">

        <div class="absolute inset-0 bg-gradient-to-t from-charcoal-950/70 via-transparent to-transparent" aria-hidden="true"></div>

        @if ($tag)
            <span class="absolute left-4 top-4 rounded-full bg-charcoal-950/70 px-3.5 py-1.5 text-xs font-semibold uppercase tracking-wider text-ember-300 backdrop-blur">
                {{ $tag }}
            </span>
        @endif

        <span class="absolute bottom-4 right-4 rounded-full bg-ember-500 px-4 py-1.5 text-sm font-bold text-charcoal-950 shadow-lg shadow-ember-700/40">
            {{ $price }}
        </span>
    </div>

    {{-- Copy --}}
    <div class="flex flex-1 flex-col p-6 sm:p-7">
        <h3 class="font-display text-2xl font-bold text-cream-50">{{ $name }}</h3>
        <p class="mt-2.5 flex-1 text-sm leading-relaxed text-cream-200/70">{{ $description }}</p>

        <button type="button" data-add-to-order="{{ $name }}"
                class="mt-6 inline-flex w-full items-center justify-center gap-2 rounded-full border border-ember-500/40 bg-ember-500/10 px-6 py-3 text-sm font-semibold text-ember-300 transition-all duration-300 hover:bg-ember-500 hover:text-charcoal-950 hover:shadow-lg hover:shadow-ember-600/30 active:scale-[0.98]">
            <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M10 3a.75.75 0 01.75.75v5.5h5.5a.75.75 0 010 1.5h-5.5v5.5a.75.75 0 01-1.5 0v-5.5h-5.5a.75.75 0 010-1.5h5.5v-5.5A.75.75 0 0110 3z"/>
            </svg>
            Add to Order
        </button>
    </div>
</article>
