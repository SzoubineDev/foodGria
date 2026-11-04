/**
 * Ember & Oak — landing page interactions (vanilla JS)
 *
 * 1. Sticky navbar with scroll state + active link highlighting
 * 2. Mobile hamburger menu (accessible, animated)
 * 3. Scroll-reveal animations (IntersectionObserver)
 * 4. "Add to Order" buttons → toast feedback + cart badge (UI only)
 */

document.addEventListener('DOMContentLoaded', () => {
    initNavbar();
    initMobileMenu();
    initActiveLinkHighlighting();
    initScrollReveal();
    initOrderButtons();
});

/* -------------------------------------------------------------------------- */
/* 1. Navbar                                                                  */
/* -------------------------------------------------------------------------- */
function initNavbar() {
    const nav = document.getElementById('site-nav');
    if (!nav) return;

    const onScroll = () => {
        nav.classList.toggle('nav-scrolled', window.scrollY > 24);
    };

    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
}

/* -------------------------------------------------------------------------- */
/* 2. Mobile menu                                                             */
/* -------------------------------------------------------------------------- */
function initMobileMenu() {
    const toggle = document.getElementById('mobile-menu-toggle');
    const panel = document.getElementById('mobile-menu');
    if (!toggle || !panel) return;

    let open = false;

    const setOpen = (state) => {
        open = state;
        toggle.setAttribute('aria-expanded', String(open));
        toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
        panel.classList.toggle('hidden', !open);

        // Animate hamburger → X
        const lines = toggle.querySelectorAll('[data-burger-line]');
        if (lines.length === 3) {
            lines[0].classList.toggle('rotate-45', open);
            lines[0].classList.toggle('translate-y-[7px]', open);
            lines[1].classList.toggle('opacity-0', open);
            lines[2].classList.toggle('-rotate-45', open);
            lines[2].classList.toggle('-translate-y-[7px]', open);
        }
    };

    toggle.addEventListener('click', () => setOpen(!open));

    // Close when a link inside the panel is chosen
    panel.querySelectorAll('a, button').forEach((el) =>
        el.addEventListener('click', () => setOpen(false))
    );

    // Close on Escape
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && open) {
            setOpen(false);
            toggle.focus();
        }
    });

    // Reset when returning to desktop widths
    window
        .matchMedia('(min-width: 1024px)')
        .addEventListener('change', (e) => e.matches && setOpen(false));
}

/* -------------------------------------------------------------------------- */
/* 3. Active link highlighting                                                */
/* -------------------------------------------------------------------------- */
function initActiveLinkHighlighting() {
    const links = Array.from(document.querySelectorAll('[data-nav-link]'));
    const sections = links
        .map((link) => document.getElementById(link.dataset.navLink))
        .filter(Boolean);

    if (!sections.length || !('IntersectionObserver' in window)) return;

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                links.forEach((l) =>
                    l.classList.toggle(
                        'text-ember-500',
                        l.dataset.navLink === entry.target.id
                    )
                );
            });
        },
        { rootMargin: '-40% 0px -55% 0px' }
    );

    sections.forEach((s) => observer.observe(s));
}

/* -------------------------------------------------------------------------- */
/* 4. Scroll reveal                                                           */
/* -------------------------------------------------------------------------- */
function initScrollReveal() {
    const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const items = document.querySelectorAll('[data-reveal]');

    if (reduced || !('IntersectionObserver' in window)) return;

    document.documentElement.classList.add('reveal-enabled');

    const observer = new IntersectionObserver(
        (entries, obs) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    obs.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
    );

    items.forEach((el) => {
        const delay = el.getAttribute('data-reveal-delay');
        if (delay) el.style.setProperty('--reveal-delay', `${delay}ms`);
        observer.observe(el);
    });
}

/* -------------------------------------------------------------------------- */
/* 5. Order buttons (UI only — no backend yet)                                */
/* -------------------------------------------------------------------------- */
function initOrderButtons() {
    let count = 0;
    const badge = document.getElementById('cart-badge');
    const toast = document.getElementById('toast');
    const toastText = document.getElementById('toast-text');
    let toastTimer;

    const showToast = (message) => {
        if (!toast || !toastText) return;
        toastText.textContent = message;
        toast.classList.remove('opacity-0', 'translate-y-4', 'pointer-events-none');
        clearTimeout(toastTimer);
        toastTimer = setTimeout(() => {
            toast.classList.add('opacity-0', 'translate-y-4', 'pointer-events-none');
        }, 2600);
    };

    document.querySelectorAll('[data-add-to-order]').forEach((btn) => {
        btn.addEventListener('click', () => {
            const dish = btn.dataset.addToOrder;
            count += 1;

            if (badge) {
                badge.textContent = String(count);
                badge.classList.remove('hidden');
                badge.animate(
                    [
                        { transform: 'scale(1)' },
                        { transform: 'scale(1.35)' },
                        { transform: 'scale(1)' },
                    ],
                    { duration: 320, easing: 'ease-out' }
                );
            }

            showToast(`${dish} added to your order`);
        });
    });

    // "Order Now" buttons simply scroll to the menu for now.
    document.querySelectorAll('[data-order-now]').forEach((btn) => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            document.getElementById('menu')?.scrollIntoView({ behavior: 'smooth' });
        });
    });
}
