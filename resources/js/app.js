import '@phosphor-icons/web/regular';

// ponytail: minimal vanilla JS, no framework. Motion via class toggle + IntersectionObserver.

const root = document.documentElement;

// Theme: <html> class is set pre-paint by the inline script in each layout.
// Re-apply after Livewire navigation (wire:navigate) morphs the document, which
// otherwise strips the class since the target page has no hardcoded theme class.
function applyTheme() {
    let stored;
    try { stored = localStorage.getItem('theme'); } catch (e) {}
    const dark = stored ? stored === 'dark' : window.matchMedia('(prefers-color-scheme: dark)').matches;
    root.classList.toggle('dark', dark);
}
applyTheme();
document.addEventListener('livewire:navigated', applyTheme);

// Toggle (delegated so it works on every route, including SPA-navigated ones)
document.addEventListener('click', (event) => {
    const btn = event.target.closest('.theme-toggle');
    if (!btn) return;
    const next = root.classList.contains('dark') ? 'light' : 'dark';
    root.classList.toggle('dark', next === 'dark');
    try { localStorage.setItem('theme', next); } catch (e) {}
});

// Mobile nav (delegated so it survives Livewire navigation)
document.addEventListener('click', (event) => {
    if (!event.target.closest('#nav-toggle')) return;
    const menu = document.getElementById('nav-menu');
    if (!menu) return;
    const open = menu.classList.toggle('is-open');
    document.getElementById('nav-toggle')?.setAttribute('aria-expanded', String(open));
});

// Scroll reveal. Re-run after Livewire navigation, otherwise injected .reveal
// elements (e.g. the docs page reached via wire:navigate) stay at opacity 0.
function initReveals() {
    const reveals = document.querySelectorAll('.reveal:not(.is-visible)');
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches || !('IntersectionObserver' in window)) {
        reveals.forEach((el) => el.classList.add('is-visible'));
        return;
    }
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
initReveals();
document.addEventListener('livewire:navigated', initReveals);
