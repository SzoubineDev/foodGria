<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ember & Oak Grill House — fire-grilled beef, chicken and turkey, char-cooked to order with premium cuts and warm hospitality.">
    <meta name="theme-color" content="#100c0a">

    <title>@yield('title', 'Ember & Oak — Fire-Grilled Perfection | Grill House')</title>

    {{-- Fonts: preconnect + async load for performance --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style"
          href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;0,800;1,500&display=swap">
    <link rel="stylesheet" media="print" onload="this.media='all'"
          href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;0,800;1,500&display=swap">
    <noscript>
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;0,800;1,500&display=swap">
    </noscript>

    {{-- LCP hero image preload --}}
    <link rel="preload" as="image" href="{{ asset('images/hero-beef.jpg') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full bg-charcoal-950 font-sans text-cream-50 antialiased">
    <a href="#main"
       class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[100] focus:rounded-full focus:bg-ember-500 focus:px-5 focus:py-2.5 focus:text-sm focus:font-semibold focus:text-charcoal-950">
        Skip to content
    </a>

    <x-navbar />

    <main id="main">
        @yield('content')
    </main>

    <x-footer />

    {{-- Toast notification (Add to Order feedback) --}}
    <div id="toast" role="status" aria-live="polite"
         class="pointer-events-none fixed bottom-6 left-1/2 z-[90] flex -translate-x-1/2 translate-y-4 items-center gap-3 rounded-full border border-ember-500/30 bg-charcoal-900/95 px-5 py-3 text-sm font-medium text-cream-50 opacity-0 shadow-[0_20px_50px_-15px_rgba(0,0,0,0.8)] backdrop-blur">
        <svg class="h-5 w-5 shrink-0 text-ember-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.797-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.135-.028l4-5.566z" clip-rule="evenodd"/>
        </svg>
        <span id="toast-text"></span>
    </div>
</body>
</html>
