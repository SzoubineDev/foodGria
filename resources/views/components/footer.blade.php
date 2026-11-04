<footer id="contact" class="relative border-t border-charcoal-800 bg-charcoal-950">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Top grid --}}
        <div class="grid gap-12 py-16 md:grid-cols-2 lg:grid-cols-4 lg:py-20">

            {{-- Brand --}}
            <div class="lg:pr-6">
                <a href="#home" class="flex items-center gap-3" aria-label="Ember &amp; Oak — back to top">
                    <span class="flex h-11 w-11 items-center justify-center rounded-full bg-gradient-to-br from-ember-500 to-burgundy-700 shadow-lg shadow-ember-700/30">
                        <svg class="h-6 w-6 text-cream-50" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M12 2c.6 3.2-.7 4.9-2.1 6.5C8.3 10.2 7 11.9 7 14.3A5.7 5.7 0 0 0 12.7 20c3.4 0 5.7-2.5 5.7-5.5 0-3.9-3-5.7-3.9-8.7-1.3 1-1.8 2.3-1.6 3.9-1.2-1-2.2-3.4-.9-7.7Zm-.9 12.9c1.4 1 1.9 2 1.9 3a2.2 2.2 0 1 1-4.1-1.2 3.2 3.2 0 0 1 2.2-1.8Z"/>
                        </svg>
                    </span>
                    <span class="leading-tight">
                        <span class="block font-display text-xl font-bold tracking-wide text-cream-50">Ember <span class="text-ember-400">&amp;</span> Oak</span>
                        <span class="block text-[0.65rem] font-semibold uppercase tracking-[0.28em] text-cream-200/60">Grill House</span>
                    </span>
                </a>

                <p class="mt-5 text-sm leading-relaxed text-cream-200/65">
                    A neighbourhood grill house devoted to the ancient craft of fire cooking. Premium beef,
                    free-range chicken and whole turkey, char-cooked over oak and applewood embers — served
                    with warmth, always fresh, never frozen.
                </p>

                {{-- Social links --}}
                <ul class="mt-6 flex items-center gap-3" aria-label="Social media">
                    @foreach (
                        [
                            'Instagram' => 'M12 2.2c3.2 0 3.6 0 4.9.1 3.3.1 4.6 1.4 4.7 4.7.1 1.3.1 1.6.1 4.8s0 3.6-.1 4.8c-.1 3.3-1.4 4.6-4.7 4.7-1.3.1-1.6.1-4.8.1s-3.6 0-4.8-.1c-3.3-.1-4.6-1.4-4.7-4.7C2.1 15.4 2.1 15.1 2.1 12s0-3.6.1-4.8C2.3 3.9 3.6 2.6 6.9 2.5 8.2 2.4 8.6 2.2 12 2.2Zm0 4.6a5.2 5.2 0 1 0 0 10.4 5.2 5.2 0 0 0 0-10.4Zm0 8.6a3.4 3.4 0 1 1 0-6.8 3.4 3.4 0 0 1 0 6.8Zm6.6-8.8a1.2 1.2 0 1 1-2.4 0 1.2 1.2 0 0 1 2.4 0Z',
                            'Facebook' => 'M22 12a10 10 0 1 0-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0 0 22 12Z',
                            'X (Twitter)' => 'M18.9 2H22l-6.8 7.8L23 22h-6.3l-4.9-6.4L6.1 22H3l7.3-8.3L2 2h6.4l4.4 5.9L18.9 2Zm-1.1 18.2h1.7L7 3.7H5.2l12.6 16.5Z',
                            'YouTube' => 'M21.6 7.2a2.8 2.8 0 0 0-2-2C17.9 4.8 12 4.8 12 4.8s-5.9 0-7.6.4a2.8 2.8 0 0 0-2 2A29.3 29.3 0 0 0 2 12a29.3 29.3 0 0 0 .4 4.8 2.8 2.8 0 0 0 2 2c1.7.4 7.6.4 7.6.4s5.9 0 7.6-.4a2.8 2.8 0 0 0 2-2A29.3 29.3 0 0 0 22 12a29.3 29.3 0 0 0-.4-4.8ZM10 15.2V8.8l5.2 3.2L10 15.2Z',
                        ] as $name => $path
                    )
                        <li>
                            <a href="#" aria-label="{{ $name }} — coming soon"
                               class="flex h-10 w-10 items-center justify-center rounded-full border border-charcoal-700 bg-charcoal-900 text-cream-200/70 transition-all duration-300 hover:-translate-y-0.5 hover:border-ember-500/60 hover:text-ember-400">
                                <svg class="h-4.5 w-4.5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path d="{{ $path }}"/>
                                </svg>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Quick links --}}
            <nav aria-label="Footer navigation">
                <h3 class="text-sm font-bold uppercase tracking-[0.18em] text-cream-50">Explore</h3>
                <ul class="mt-5 space-y-3 text-sm">
                    @foreach (['home' => 'Home', 'menu' => 'Our Menu', 'why-us' => 'Why Choose Us', 'about' => 'About Us', 'testimonials' => 'Reviews', 'contact' => 'Contact'] as $id => $label)
                        <li>
                            <a href="#{{ $id }}"
                               class="inline-flex items-center gap-2 text-cream-200/65 transition-colors duration-300 hover:text-ember-400">
                                <span class="h-1 w-1 rounded-full bg-ember-500/70" aria-hidden="true"></span>
                                {{ $label }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>

            {{-- Opening hours --}}
            <div>
                <h3 class="text-sm font-bold uppercase tracking-[0.18em] text-cream-50">Opening Hours</h3>
                <dl class="mt-5 space-y-3 text-sm">
                    <div class="flex items-baseline justify-between gap-4">
                        <dt class="text-cream-200/65">Monday – Thursday</dt>
                        <dd class="whitespace-nowrap font-medium text-cream-100">11:00 – 22:00</dd>
                    </div>
                    <div class="flex items-baseline justify-between gap-4">
                        <dt class="text-cream-200/65">Friday – Saturday</dt>
                        <dd class="whitespace-nowrap font-medium text-cream-100">11:00 – 23:30</dd>
                    </div>
                    <div class="flex items-baseline justify-between gap-4">
                        <dt class="text-cream-200/65">Sunday</dt>
                        <dd class="whitespace-nowrap font-medium text-cream-100">12:00 – 21:00</dd>
                    </div>
                    <div class="flex items-baseline justify-between gap-4">
                        <dt class="text-cream-200/65">Public holidays</dt>
                        <dd class="whitespace-nowrap font-medium text-ember-300">12:00 – 20:00</dd>
                    </div>
                </dl>
            </div>

            {{-- Contact --}}
            <div>
                <h3 class="text-sm font-bold uppercase tracking-[0.18em] text-cream-50">Visit Us</h3>
                <address class="mt-5 space-y-4 text-sm not-italic">
                    <p class="flex items-start gap-3 text-cream-200/65">
                        <svg class="mt-0.5 h-4.5 w-4.5 shrink-0 text-ember-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.015-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.4 1.445-1.02 2.28-1.863C15.244 14.735 17 12.5 17 9.75A7 7 0 103 9.75c0 2.75 1.756 4.985 3.38 6.749a13.48 13.48 0 002.28 1.863c.31.193.57.337.757.433.092.047.185.094.281.14l.015.008.006.003zM10 12.25a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" clip-rule="evenodd"/>
                        </svg>
                        <span>128 Ember Street, Riverside District<br>Springfield, ST 01234</span>
                    </p>
                    <p>
                        <a href="tel:+15550123456" class="flex items-center gap-3 text-cream-200/65 transition-colors hover:text-ember-400">
                            <svg class="h-4.5 w-4.5 shrink-0 text-ember-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.548 11.548 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326K1.5 6.5v-3z" clip-rule="evenodd"/>
                            </svg>
                            +1 (555) 012-3456
                        </a>
                    </p>
                    <p>
                        <a href="mailto:hello@emberandoak.example" class="flex items-center gap-3 text-cream-200/65 transition-colors hover:text-ember-400">
                            <svg class="h-4.5 w-4.5 shrink-0 text-ember-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.219a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z"/>
                                <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z"/>
                            </svg>
                            hello@emberandoak.example
                        </a>
                    </p>
                </address>
            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="flex flex-col items-center justify-between gap-4 border-t border-charcoal-800 py-7 sm:flex-row">
            <p class="text-xs text-cream-200/50">
                &copy; {{ date('Y') }} Ember &amp; Oak Grill House. All rights reserved.
            </p>
            <p class="flex items-center gap-2 text-xs text-cream-200/50">
                Cooked with
                <svg class="h-3.5 w-3.5 text-ember-500" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path d="M12 2c.6 3.2-.7 4.9-2.1 6.5C8.3 10.2 7 11.9 7 14.3A5.7 5.7 0 0 0 12.7 20c3.4 0 5.7-2.5 5.7-5.5 0-3.9-3-5.7-3.9-8.7-1.3 1-1.8 2.3-1.6 3.9-1.2-1-2.2-3.4-.9-7.7Z"/>
                </svg>
                real fire · placeholder content for demo purposes
            </p>
        </div>
    </div>
</footer>
