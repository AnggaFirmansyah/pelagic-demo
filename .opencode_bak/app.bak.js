import '@phosphor-icons/web/regular';

// ponytail: minimal vanilla JS, no framework. Motion via class toggle + IntersectionObserver.

const root = document.documentElement;

// Theme: class on <html> is set pre-paint by inline script. This just wires the toggle.
const themeToggle = document.getElementById('theme-toggle');
themeToggle?.addEventListener('click', () => {
    const next = root.classList.contains('dark') ? 'light' : 'dark';
    root.classList.toggle('dark', next === 'dark');
    localStorage.setItem('theme', next);
});

// Mobile nav
const navToggle = document.getElementById('nav-toggle');
const navMenu = document.getElementById('nav-menu');
navToggle?.addEventListener('click', () => {
    const open = navMenu.classList.toggle('is-open');
    navToggle.setAttribute('aria-expanded', String(open));
});

// Scroll reveal
const reveals = document.querySelectorAll('.reveal');
if (window.matchMedia('(prefers-reduced-motion: reduce)').matches || !('IntersectionObserver' in window)) {
    reveals.forEach((el) => el.classList.add('is-visible'));
} else {
    const io = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    io.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.18, rootMargin: '0px 0px -8% 0px' }
    );
    reveals.forEach((el) => io.observe(el));
}
