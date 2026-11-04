<header id="site-nav" class="fixed inset-x-0 top-0 z-50 py-4 lg:py-5">
    <nav aria-label="Main navigation" class="mx-auto flex max-w-7xl items-center justify-between gap-6 px-4 sm:px-6 lg:px-8">

        {{-- Logo + name --}}
        <a href="#home" class="group flex shrink-0 items-center gap-3" aria-label="Ember &amp; Oak — back to top">
            <span class="flex h-11 w-11 items-center justify-center rounded-full bg-gradient-to-br from-ember-500 to-burgundy-700 shadow-lg shadow-ember-700/30 transition-transform duration-300 group-hover:scale-105 group-hover:-rotate-6">
                <svg class="h-6 w-6 text-cream-50" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path d="M12 2c.6 3.2-.7 4.9-2.1 6.5C8.3 10.2 7 11.9 7 14.3A5.7 5.7 0 0 0 12.7 20c3.4 0 5.7-2.5 5.7-5.5 0-3.9-3-5.7-3.9-8.7-1.3 1-1.8 2.3-1.6 3.9-1.2-1-2.2-3.4-.9-7.7Zm-.9 12.9c1.4 1 1.9 2 1.9 3a2.2 2.2 0 1 1-4.1-1.2 3.2 3.2 0 0 1 2.2-1.8Z"/>
                </svg>
            </span>
            <span class="leading-tight">
                <span class="block font-display text-xl font-bold tracking-wide text-cream-50">Ember <span class="text-ember-400">&amp;</span> Oak</span>
                <span class="block text-[0.65rem] font-semibold uppercase tracking-[0.28em] text-cream-200/60">Grill House</span>
            </span>
        </a>

        {{-- Desktop links --}}
        <ul class="hidden items-center gap-9 lg:flex">
            @foreach (['home' => 'Home', 'menu' => 'Menu', 'about' => 'About Us', 'contact' => 'Contact'] as $id => $label)
                <li>
                    <a href="#{{ $id }}" data-nav-link="{{ $id }}"
                       class="relative text-sm font-medium text-cream-100/85 transition-colors duration-300 after:absolute after:-bottom-1.5 after:left-0 after:h-0.5 after:w-0 after:rounded-full after:bg-ember-500 after:transition-all after:duration-300 hover:text-cream-50 hover:after:w-full focus-visible:text-cream-50">
                        {{ $label }}
                    </a>
                </li>
            @endforeach
        </ul>

        {{-- Right actions --}}
        <div class="flex items-center gap-3">
            <a href="#menu" data-order-now
               class="group relative inline-flex items-center justify-center gap-2 rounded-full bg-ember-500 px-6 py-3 text-sm font-semibold tracking-wide text-charcoal-950 shadow-lg shadow-ember-600/25 transition-all duration-300 hover:-translate-y-0.5 hover:bg-ember-400 hover:shadow-xl hover:shadow-ember-500/30 active:translate-y-0 active:scale-[0.98] hidden sm:inline-flex">
                Order Now
                <svg class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.79a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 11-1.04-1.08l4.158-3.46H3.75A.75.75 0 013 10z" clip-rule="evenodd"/>
                </svg>
                <span id="cart-badge"
                      class="absolute -right-2 -top-2 hidden h-5 min-w-5 items-center justify-center rounded-full bg-burgundy-600 px-1 text-[0.7rem] font-bold text-cream-50 ring-2 ring-charcoal-950"></span>
            </a>

            {{-- Hamburger --}}
            <button type="button" id="mobile-menu-toggle" aria-expanded="false" aria-controls="mobile-menu" aria-label="Open menu"
                    class="flex h-11 w-11 flex-col items-center justify-center gap-[5px] rounded-full border border-cream-50/15 bg-charcoal-900/60 backdrop-blur transition-colors hover:border-ember-400/60 lg:hidden">
                <span data-burger-line class="h-0.5 w-5 rounded-full bg-cream-50 transition-all duration-300"></span>
                <span data-burger-line class="h-0.5 w-5 rounded-full bg-cream-50 transition-all duration-300"></span>
                <span data-burger-line class="h-0.5 w-5 rounded-full bg-cream-50 transition-all duration-300"></span>
            </button>
        </div>
    </nav>

    {{-- Mobile panel --}}
    <div id="mobile-menu" class="hidden lg:hidden">
        <div class="mx-4 mt-3 overflow-hidden rounded-3xl border border-charcoal-700/70 bg-charcoal-950/95 shadow-2xl shadow-black/60 backdrop-blur-xl">
            <ul class="flex flex-col p-3">
                @foreach (['home' => 'Home', 'menu' => 'Menu', 'about' => 'About Us', 'contact' => 'Contact'] as $id => $label)
                    <li>
                        <a href="#{{ $id }}"
                           class="block rounded-2xl px-5 py-3.5 text-base font-medium text-cream-100 transition-colors hover:bg-charcoal-800 hover:text-ember-300">
                            {{ $label }}
                        </a>
                    </li>
                @endforeach
                <li class="p-2 pt-3">
                    <a href="#menu" data-order-now
                       class="flex items-center justify-center gap-2 rounded-full bg-ember-500 px-6 py-3.5 text-sm font-bold text-charcoal-950 shadow-lg shadow-ember-600/30 transition-colors hover:bg-ember-400">
                        Order Now
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
