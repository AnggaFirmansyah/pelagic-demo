# Pelagic

A marketing site and authenticated dashboard for **Pelagic**, an observability product that fuses logs, metrics, and traces into one queryable timeline so teams find root cause before the pager fires.

## What it is

- **Public marketing site**: Home, Product, Pricing, Customers, and Documentation pages with a dark/light theme and responsive layout.
- **Authentication**: Login, registration, email verification, password reset, and profile management, built on Laravel Breeze (Volt + Livewire).
- **Authenticated app**: A coral-themed dashboard with a sidebar shell, stat cards, recent signals, connected sources, and quick links to the docs.

## Tech stack

- **Laravel 13** (PHP 8.3+) as the application framework.
- **Livewire 3 + Volt** for reactive, server-rendered UI components (no separate JavaScript SPA framework).
- **Laravel Breeze** (Volt stack) for the auth scaffolding.
- **Tailwind CSS v4** compiled through the `@tailwindcss/vite` plugin, bundled by **Vite 8**.
- **PostgreSQL** as the database (via `pdo_pgsql`).
- Self-hosted variable fonts (Space Grotesk, JetBrains Mono) and Phosphor Icons. No UI component library; the design system is hand-built CSS tokens in `resources/css/app.css`.

## Requirements

- PHP 8.3 or higher
- PostgreSQL
- Node.js and npm

## Installation

```bash
composer install
cp .env.example .env        # then set DB_CONNECTION=pgsql and your Postgres credentials
php artisan key:generate
php artisan migrate
npm install
npm run build
```

## Running locally

Use two separate terminals:

```bash
php artisan serve     # http://127.0.0.1:8000
npm run dev           # Vite dev server with hot reload
```

> On Windows, do **not** use `composer dev`. It launches `php artisan pail`, which needs the `pcntl` extension that PHP on Windows does not provide, and `concurrently --kill-others` then tears down the other processes. Running `php artisan serve` and `npm run dev` in separate terminals avoids this.

## Running the tests

Tests use an in-memory SQLite database and PHPUnit:

```bash
php artisan test
```

The suite covers the auth flows (registration, login, email verification, password reset/update, profile) and renders the authenticated dashboard and profile.

## Project layout

- `routes/web.php` and `routes/auth.php` define the public and authenticated routes.
- `resources/views/` holds the Blade and Volt components:
  - `layouts/marketing.blade.php` for public pages, `layouts/guest.blade.php` for auth screens, `layouts/app.blade.php` for the authenticated shell.
  - `livewire/pages/auth/*` for the auth Volt components.
  - `livewire/layout/navigation.blade.php` for the app sidebar.
  - `dashboard.blade.php` and `profile.blade.php` for the authenticated pages.
- `resources/css/app.css` is the design system (color tokens, dark mode, theme toggle, hover glow).
- `resources/js/app.js` wires the theme toggle, mobile nav, and scroll reveal, and re-applies them after Livewire navigation.

## License

This project is open-sourced under the MIT license.

enjoy the web and the vibe :D

NOTE: DO NOT USE YOUR REAL EMAIL!!! (this is a testing website)
