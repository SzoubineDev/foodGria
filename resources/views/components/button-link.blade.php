@props(['variant' => 'primary'])

@php
    $classes = match ($variant) {
        'primary' => 'bg-ember-500 text-charcoal-950 hover:bg-ember-400 shadow-lg shadow-ember-600/25 hover:shadow-xl hover:shadow-ember-500/30',
        'outline' => 'border border-cream-50/30 text-cream-50 hover:border-ember-400 hover:text-ember-300 bg-transparent',
        'dark'    => 'bg-charcoal-900 text-cream-50 hover:bg-charcoal-800 border border-charcoal-700',
        default   => 'bg-ember-500 text-charcoal-950 hover:bg-ember-400',
    };
@endphp

<a {{ $attributes->merge(['class' => "group inline-flex items-center justify-center gap-2 rounded-full px-7 py-3.5 text-sm font-semibold tracking-wide transition-all duration-300 hover:-translate-y-0.5 active:translate-y-0 active:scale-[0.98] {$classes}"]) }}>
    {{ $slot }}
    @if ($variant === 'primary')
        <svg class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.79a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 11-1.04-1.08l4.158-3.46H3.75A.75.75 0 013 10z" clip-rule="evenodd"/>
        </svg>
    @endif
</a>
