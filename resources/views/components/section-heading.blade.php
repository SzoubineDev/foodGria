@props(['eyebrow', 'title', 'subtitle' => null, 'align' => 'center', 'dark' => false])

<div {{ $attributes->merge(['class' => 'max-w-2xl ' . ($align === 'center' ? 'mx-auto text-center' : 'text-left')]) }}>
    <p class="eyebrow {{ $dark ? 'text-ember-400' : 'text-ember-600' }}">
        <span class="inline-block h-px w-8 bg-current opacity-60" aria-hidden="true"></span>
        {{ $eyebrow }}
        @if ($align === 'center')
            <span class="inline-block h-px w-8 bg-current opacity-60" aria-hidden="true"></span>
        @endif
    </p>

    <h2 class="mt-4 font-display text-3xl font-bold leading-tight tracking-tight sm:text-4xl lg:text-[2.75rem] {{ $dark ? 'text-cream-50' : 'text-charcoal-900' }}">
        {{ $title }}
    </h2>

    @if ($subtitle)
        <p class="mt-4 text-base leading-relaxed {{ $dark ? 'text-cream-200/80' : 'text-charcoal-600' }}">
            {{ $subtitle }}
        </p>
    @endif
</div>
