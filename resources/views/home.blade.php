@extends('layouts.main')

@section('title', 'Ember & Oak — Fire-Grilled Perfection | Beef, Chicken & Turkey Grill House')

@section('content')

    {{-- ================= HERO ================= --}}
    <section id="home" class="relative flex min-h-svh items-center overflow-hidden">

        {{-- Background photography --}}
        <img src="{{ asset('images/hero-beef.jpg') }}"
             alt="Flame-grilled beef steaks sizzling over glowing charcoal embers"
             width="1600" height="1000" fetchpriority="high" decoding="async"
             class="absolute inset-0 h-full w-full object-cover">

        {{-- Cinematic overlays for contrast --}}
        <div class="absolute inset-0 bg-gradient-to-r from-charcoal-950/95 via-charcoal-950/70 to-charcoal-950/30" aria-hidden="true"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-charcoal-950 via-transparent to-charcoal-950/60" aria-hidden="true"></div>

        {{-- Content --}}
        <div class="relative mx-auto w-full max-w-7xl px-4 pb-28 pt-36 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <p class="eyebrow animate-fade-up text-ember-400" style="animation-delay: 0ms">
                    <span class="inline-block h-px w-10 bg-current opacity-60" aria-hidden="true"></span>
                    Charcoal grill house · Est. 2012
                </p>

                <h1 class="mt-5 font-display text-[2.6rem] font-bold leading-[1.05] tracking-tight text-cream-50 animate-fade-up sm:text-6xl lg:text-7xl" style="animation-delay: 120ms">
                    Fire-Grilled <span class="text-ember-400">Perfection</span>,<br class="hidden sm:block">
                    Served Fresh.
                </h1>

                <p class="mt-6 max-w-xl text-base leading-relaxed text-cream-200/85 animate-fade-up sm:text-lg" style="animation-delay: 240ms">
                    Premium beef, marinated chicken and whole turkey — char-cooked to order over
                    oak and applewood embers. Bold smoke, generous portions, warm hospitality.
                </p>

                <div class="mt-10 flex flex-wrap items-center gap-4 animate-fade-up" style="animation-delay: 360ms">
                    <x-button-link href="#menu" variant="primary" class="!px-8 !py-4 !text-base">
                        Explore Our Menu
                    </x-button-link>
                    <x-button-link href="#menu" data-order-now variant="outline" class="!px-8 !py-4 !text-base">
                        Order Now
                    </x-button-link>
                </div>

                {{-- Trust strip --}}
                <dl class="mt-14 grid max-w-lg grid-cols-3 gap-6 border-t border-cream-50/10 pt-8 animate-fade-up" style="animation-delay: 480ms">
                    @foreach (
                        [
                            ['12+', 'Years of fire craft'],
                            ['100%', 'Fresh, never frozen'],
                            ['4.9★', 'From 2,300+ guests'],
                        ] as [$stat, $label]
                    )
                        <div>
                            <dt class="sr-only">{{ $label }}</dt>
                            <dd class="font-display text-2xl font-bold text-cream-50 sm:text-3xl">{{ $stat }}</dd>
                            <dd class="mt-1 text-xs leading-snug text-cream-200/60">{{ $label }}</dd>
                        </div>
                    @endforeach
                </dl>
            </div>
        </div>

        {{-- Scroll indicator --}}
        <a href="#menu" aria-label="Scroll to our menu"
           class="absolute bottom-7 left-1/2 z-10 hidden -translate-x-1/2 flex-col items-center gap-3 text-cream-200/60 transition-colors hover:text-ember-400 sm:flex">
            <span class="text-[0.65rem] font-semibold uppercase tracking-[0.3em]">Scroll</span>
            <span class="mouse-wheel relative flex h-9 w-5.5 justify-center rounded-full border border-current" aria-hidden="true"></span>
        </a>
    </section>

    {{-- ================= SIGNATURE DISHES ================= --}}
    <section id="menu" class="section-pad relative scroll-mt-24 bg-cream-50">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <x-section-heading
                eyebrow="From the coals"
                title="Our Signature Grills"
                subtitle="Three flames-fired classics, each rubbed with house spices and kissed by open fire. Priced per plate, carved to order." />

            <div class="mt-14 grid gap-8 sm:grid-cols-2 lg:mt-16 lg:grid-cols-3">
                <div class="contents lg:hidden">
                    {{-- keeps grid flow simple on mobile --}}
                </div>

                <x-dish-card
                    name="Fire-Grilled Beef Ribeye"
                    description="Tender, smoky ribeye seared over glowing oak coals, finished with rosemary butter, flaky salt and charred spring onion."
                    price="$24.50"
                    image="dish-beef.jpg"
                    tag="House favourite"
                    :delay="0" />

                <x-dish-card
                    name="Charcoal Lemon Chicken"
                    description="Free-range half chicken in our 24-hour yogurt-citrus marinade, grilled until the skin crackles gold and the meat stays juicy."
                    price="$18.90"
                    image="dish-chicken.jpg"
                    tag="Marinated 24h"
                    :delay="120" />

                <x-dish-card
                    name="Smoked Herb Turkey"
                    description="Slow-grilled turkey breast basted with thyme, garlic and smoked paprika butter — deep flavour, impossibly moist, carved at your table."
                    price="$21.00"
                    image="dish-turkey.jpg"
                    tag="Weekend special"
                    :delay="240" />
            </div>

            <div class="mt-12 text-center" data-reveal>
                <a href="#order-cta"
                   class="inline-flex items-center gap-2 text-sm font-semibold uppercase tracking-[0.18em] text-burgundy-700 transition-colors hover:text-ember-600">
                    View the full menu
                    <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.79a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 11-1.04-1.08l4.158-3.46H3.75A.75.75 0 013 10z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- ================= WHY CHOOSE US ================= --}}
    <section id="why-us" class="section-pad relative scroll-mt-24 overflow-hidden bg-charcoal-900">
        {{-- Ambient glow --}}
        <div class="pointer-events-none absolute -top-40 left-1/2 h-80 w-[50rem] -translate-x-1/2 rounded-full bg-ember-600/15 blur-[120px]" aria-hidden="true"></div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <x-section-heading dark
                eyebrow="The Ember difference"
                title="Why Guests Choose Us"
                subtitle="Great grilling is simple — honest ingredients, real fire, and care in every step. We just never compromise on any of them." />

            <ul class="mt-14 grid gap-6 sm:grid-cols-2 lg:mt-16 lg:grid-cols-4">
                @foreach (
                    [
                        [
                            'title' => 'Fresh Quality Ingredients',
                            'text' => 'Daily-market produce, premium cuts and herb-marinated poultry — sourced fresh each morning, never frozen.',
                            'icon' => 'M12 2C8 6 5 9 5 13a7 7 0 0 0 14 0c0-4-3-7-7-11Zm0 16a5 5 0 0 1-5-5c0-.7.15-1.4.42-2.07C8.6 12.6 10.2 14 12 14s3.4-1.4 4.58-3.07c.27.67.42 1.37.42 2.07a5 5 0 0 1-5 5Z',
                        ],
                        [
                            'title' => 'Authentic Charcoal Flavor',
                            'text' => 'Real oak and applewood coals, open flame and patient timing give every cut that unmistakable smoke-kissed crust.',
                            'icon' => 'M12 2c.6 3.2-.7 4.9-2.1 6.5C8.3 10.2 7 11.9 7 14.3A5.7 5.7 0 0 0 12.7 20c3.4 0 5.7-2.5 5.7-5.5 0-3.9-3-5.7-3.9-8.7-1.3 1-1.8 2.3-1.6 3.9-1.2-1-2.2-3.4-.9-7.7Z',
                        ],
                        [
                            'title' => 'Made Fresh to Order',
                            'text' => 'Nothing sits under a lamp. Your grill hits the coals the moment you order — expect it hot, expect it worth the wait.',
                            'icon' => 'M10 2a8 8 0 1 0 8 8 8 8 0 0 0-8-8Zm0 14A6 6 0 1 1 16 10a6 6 0 0 1-6 6Zm1-9H9v5l3.8 2.3.9-1.5-2.7-1.6Z',
                        ],
                        [
                            'title' => 'Generous Portions, Warm Service',
                            'text' => 'Hefty plates, fair prices and a team that treats first-timers like regulars. Come hungry, leave happy.',
                            'icon' => 'M12 21.4l-1.5-1.3C5.1 15.4 2 12.6 2 9.2 2 6.2 4.3 4 7.2 4a5.4 5.4 0 0 1 4.8 2.9A5.4 5.4 0 0 1 16.8 4C19.7 4 22 6.2 22 9.2c0 3.4-3.1 6.2-8.5 10.9Z',
                        ],
                    ] as $i => $feature
                )
                    <li data-reveal data-reveal-delay="{{ $i * 100 }}"
                        class="group rounded-3xl border border-charcoal-700/60 bg-charcoal-850/80 p-7 backdrop-blur transition-all duration-500 hover:-translate-y-1.5 hover:border-ember-500/40 hover:bg-charcoal-800 hover:shadow-xl hover:shadow-black/40">
                        <span class="flex h-13 w-13 items-center justify-center rounded-2xl bg-gradient-to-br from-ember-500/20 to-burgundy-700/30 ring-1 ring-inset ring-ember-500/30 transition-transform duration-500 group-hover:scale-110 group-hover:-rotate-3">
                            <svg class="h-7 w-7 text-ember-400" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="{{ $feature['icon'] }}"/>
                            </svg>
                        </span>
                        <h3 class="mt-6 font-display text-xl font-bold text-cream-50">{{ $feature['title'] }}</h3>
                        <p class="mt-3 text-sm leading-relaxed text-cream-200/65">{{ $feature['text'] }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- ================= ABOUT ================= --}}
    <section id="about" class="section-pad relative scroll-mt-24 bg-cream-50">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-20">

                {{-- Imagery collage --}}
                <div class="relative" data-reveal>
                    <div class="overflow-hidden rounded-[2rem] shadow-2xl shadow-charcoal-900/25">
                        <img src="{{ asset('images/about-grill.jpg') }}"
                             alt="Head grill tending flames over the charcoal pit at Ember & Oak"
                             width="1200" height="1500" loading="lazy" decoding="async"
                             class="aspect-[4/5] w-full object-cover transition-transform duration-700 hover:scale-105">
                    </div>

                    {{-- Floating secondary photo --}}
                    <div class="absolute -bottom-8 -right-3 hidden w-44 overflow-hidden rounded-3xl border-[6px] border-cream-50 shadow-xl shadow-charcoal-900/30 sm:block lg:-right-8 lg:w-52 animate-float">
                        <img src="{{ asset('images/turkey-2.jpg') }}"
                             alt="Golden grilled turkey platter ready for the table"
                             width="900" height="675" loading="lazy" decoding="async"
                             class="aspect-[4/3] w-full object-cover">
                    </div>

                    {{-- Experience badge --}}
                    <div class="absolute -left-3 -top-6 flex items-center gap-3 rounded-2xl bg-burgundy-800 px-5 py-4 shadow-xl shadow-burgundy-900/40 lg:-left-8">
                        <svg class="h-8 w-8 text-ember-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M12 2c.6 3.2-.7 4.9-2.1 6.5C8.3 10.2 7 11.9 7 14.3A5.7 5.7 0 0 0 12.7 20c3.4 0 5.7-2.5 5.7-5.5 0-3.9-3-5.7-3.9-8.7-1.3 1-1.8 2.3-1.6 3.9-1.2-1-2.2-3.4-.9-7.7Z"/>
                        </svg>
                        <div>
                            <p class="font-display text-2xl font-bold leading-none text-cream-50">12+</p>
                            <p class="mt-1 text-xs font-medium uppercase tracking-wider text-cream-200/75">Years on the grill</p>
                        </div>
                    </div>
                </div>

                {{-- Story --}}
                <div data-reveal data-reveal-delay="150">
                    <x-section-heading align="left"
                        eyebrow="Our story"
                        title="Rooted in Fire, Raised on Hospitality" />

                    <div class="mt-6 space-y-5 text-base leading-relaxed text-charcoal-600">
                        <p>
                            Ember &amp; Oak began in 2012 with one battered charcoal pit, a family spice rub
                            and a stubborn belief: meat cooked over real fire simply tastes better. What started
                            as weekend gatherings for friends grew into the neighbourhood grill house it is today.
                        </p>
                        <p>
                            Every morning our chefs hand-trim beef, brine chicken and prepare whole turkey for the
                            coals. Everything is seasoned, grilled and carved to order — no shortcuts, no freezers,
                            no yesterday's plate pretending to be today's.
                        </p>
                        <p class="border-l-4 border-ember-500 pl-5 font-display text-lg italic text-charcoal-800">
                            "We don't just cook over fire — we welcome you around it."
                            <span class="mt-2 block font-sans text-sm not-italic font-semibold uppercase tracking-wider text-charcoal-500">— The Oak Family, Founders</span>
                        </p>
                    </div>

                    <div class="mt-9 flex flex-wrap gap-x-8 gap-y-4">
                        @foreach (['Halal-friendly kitchen', 'Locally sourced meats', 'Wood-fired daily'] as $point)
                            <p class="flex items-center gap-2.5 text-sm font-semibold text-charcoal-800">
                                <svg class="h-5 w-5 text-ember-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.797-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.135-.028l4-5.566z" clip-rule="evenodd"/>
                                </svg>
                                {{ $point }}
                            </p>
                        @endforeach
                    </div>

                    <div class="mt-10">
                        <x-button-link href="#testimonials" variant="dark">
                            See What Guests Say
                        </x-button-link>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================= TESTIMONIALS ================= --}}
    <section id="testimonials" class="section-pad relative scroll-mt-24 bg-charcoal-950">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <x-section-heading dark
                eyebrow="Guest book"
                title="Loved by Local Grill Fans"
                subtitle="A few notes from the tables closest to the fire." />

            <ul class="mt-14 grid gap-6 md:grid-cols-3 lg:mt-16">
                @foreach (
                    [
                        [
                            'quote' => 'The ribeye is unreal — that smoke crust, still pink in the middle. Easily the best grill in the city, and the staff remembered my order the next week.',
                            'name' => 'Marcus Bell',
                            'role' => 'Regular since 2019',
                            'initials' => 'MB',
                        ],
                        [
                            'quote' => 'We ordered the turkey platter for Sunday lunch and everything arrived hot, carved and beautifully seasoned. Generous portions — we took leftovers home twice.',
                            'name' => 'Amara Osei',
                            'role' => 'Family dinner guest',
                            'initials' => 'AO',
                        ],
                        [
                            'quote' => 'Juiciest grilled chicken I have had outside my grandmother\'s kitchen. You can tell it is made to order — worth every minute of the wait.',
                            'name' => 'Daniel Reyes',
                            'role' => 'First-time visitor',
                            'initials' => 'DR',
                        ],
                    ] as $i => $review
                )
                    <li data-reveal data-reveal-delay="{{ $i * 120 }}"
                        class="flex flex-col rounded-3xl border border-charcoal-800 bg-charcoal-900 p-7 transition-all duration-500 hover:-translate-y-1 hover:border-ember-500/30 sm:p-8">

                        {{-- Stars --}}
                        <div class="flex gap-1 text-ember-400" role="img" aria-label="Rated 5 out of 5 stars">
                            @foreach (range(1, 5) as $star)
                                <svg class="h-4.5 w-4.5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.074-.536 1.651l3.628 3.102-1.106 4.637c-.194.813.691 1.456 1.409 1.02L10 15.591l4.135 2.485c.718.436 1.603-.207 1.409-1.02l-1.106-4.637 3.628-3.102c.635-.577.297-1.584-.536-1.651l-4.753-.381-1.83-4.401z" clip-rule="evenodd"/>
                                </svg>
                            @endforeach
                        </div>

                        <blockquote class="mt-5 flex-1 text-[0.95rem] leading-relaxed text-cream-200/80">
                            “{{ $review['quote'] }}”
                        </blockquote>

                        <figcaption class="mt-7 flex items-center gap-4 border-t border-charcoal-800 pt-6">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-gradient-to-br from-burgundy-700 to-charcoal-700 text-sm font-bold text-cream-50 ring-1 ring-inset ring-cream-50/15" aria-hidden="true">
                                {{ $review['initials'] }}
                            </span>
                            <div>
                                <p class="text-sm font-bold text-cream-50">{{ $review['name'] }}</p>
                                <p class="text-xs text-cream-200/55">{{ $review['role'] }}</p>
                            </div>
                        </figcaption>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- ================= ORDER CTA ================= --}}
    <section id="order-cta" class="relative scroll-mt-24 overflow-hidden">
        <img src="{{ asset('images/cta-fire.jpg') }}"
             alt=""
             width="1600" height="900" loading="lazy" decoding="async"
             class="absolute inset-0 h-full w-full object-cover object-center" aria-hidden="true">

        <div class="absolute inset-0 bg-gradient-to-b from-charcoal-950/85 via-burgundy-950/80 to-charcoal-950/90" aria-hidden="true"></div>

        <div class="relative mx-auto max-w-4xl px-4 py-24 text-center sm:px-6 sm:py-32 lg:px-8" data-reveal>
            <span class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-ember-500/20 ring-1 ring-inset ring-ember-400/50">
                <svg class="h-7 w-7 text-ember-400" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path d="M12 2c.6 3.2-.7 4.9-2.1 6.5C8.3 10.2 7 11.9 7 14.3A5.7 5.7 0 0 0 12.7 20c3.4 0 5.7-2.5 5.7-5.5 0-3.9-3-5.7-3.9-8.7-1.3 1-1.8 2.3-1.6 3.9-1.2-1-2.2-3.4-.9-7.7Z"/>
                </svg>
            </span>

            <h2 class="mt-7 font-display text-3xl font-bold leading-tight text-cream-50 sm:text-5xl">
                Hungry Yet? The Coals Are Hot.
            </h2>
            <p class="mx-auto mt-5 max-w-xl text-base leading-relaxed text-cream-200/80 sm:text-lg">
                Order your favourite cuts of beef, chicken and turkey for pickup or delivery —
                grilled the moment you tap the button, never before.
            </p>

            <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
                <a href="#menu" data-order-now
                   class="group inline-flex items-center justify-center gap-2 rounded-full bg-ember-500 px-9 py-4 text-base font-bold text-charcoal-950 shadow-xl shadow-ember-700/40 transition-all duration-300 hover:-translate-y-0.5 hover:bg-ember-400 active:translate-y-0 active:scale-[0.98]">
                    Order Now
                    <svg class="h-5 w-5 transition-transform duration-300 group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.79a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 11-1.04-1.08l4.158-3.46H3.75A.75.75 0 013 10z" clip-rule="evenodd"/>
                    </svg>
                </a>
                <a href="tel:+15550123456"
                   class="inline-flex items-center justify-center gap-2 rounded-full border border-cream-50/30 px-9 py-4 text-base font-semibold text-cream-50 transition-all duration-300 hover:-translate-y-0.5 hover:border-ember-400 hover:text-ember-300">
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.548 11.548 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326K1.5 6.5v-3z" clip-rule="evenodd"/>
                    </svg>
                    Call to Order
                </a>
            </div>
        </div>
    </section>

@endsection
