# My Ceylon Walk

A multi-page travel website for authentic journeys in Sri Lanka, covering curated tours, boutique stays and local experiences.

Built with Laravel and Blade templates, a custom CSS design system and vanilla JavaScript. No front-end frameworks are used.

## Pages

| Route          | Page        | Description                                                 |
| -------------- | ----------- | ----------------------------------------------------------- |
| `/`            | Home        | Hero, featured journeys, destinations and call to action    |
| `/tours`       | Tours       | Tour search, packages and itineraries                       |
| `/stays`       | Stays       | Accommodation search, featured stays and locations          |
| `/experiences` | Experiences | Experience categories, featured activities and seasonal highlights |
| `/about`       | About       | Company story, values, planning process and testimonials    |

A `POST /plan-trip` endpoint handles submissions from the "Plan My Trip" form.

## Features

- Responsive layout for desktop, tablet and mobile
- Scroll-triggered reveal animations using `IntersectionObserver`
- Sticky header that turns solid on scroll, with a mobile navigation drawer
- Category filters for experiences and stays
- "Plan My Trip" modal form
- Optimised WebP imagery

## Tech Stack

- **Backend:** Laravel 13, PHP 8.3+
- **Templates:** Blade
- **Styling:** Custom CSS (`public/css/style.css`)
- **Scripts:** Vanilla JavaScript (`public/js/main.js`)
- **Fonts:** Playfair Display, Plus Jakarta Sans, Cinzel (Google Fonts)

## Requirements

- PHP 8.3 or higher
- Composer 2

## Installation

```bash
git clone <repository-url> myceylon-walk
cd myceylon-walk

composer install
cp .env.example .env
php artisan key:generate

php artisan serve
```

The site will be available at `http://127.0.0.1:8000`.

On Windows, use `copy .env.example .env` instead of `cp`.

## Project Structure

```text
app/Http/Controllers/
  TravelController.php     Page views and trip-planning endpoint
public/
  css/style.css            Design system and responsive styles
  js/main.js               Animations, filters, modal and navigation
  images/                  Logos and WebP photography
resources/views/
  layouts/app.blade.php    Base layout
  partials/                Header, footer and modal
  home.blade.php
  tours.blade.php
  stays.blade.php
  experiences.blade.php
  about.blade.php
routes/web.php             Route definitions
```

## Design Tokens

Colours and other tokens are defined as CSS custom properties in `public/css/style.css`.

| Token                 | Value     | Usage                    |
| --------------------- | --------- | ------------------------ |
| `--primary-gold`      | `#E5A93C` | Accents and buttons      |
| `--brand-forest-black`| `#061A15` | Dark backgrounds         |
| `--brand-dark-green`  | `#0A221C` | Dark sections and cards  |
| `--bg-cream`          | `#FAF7F2` | Page background          |

## License

Proprietary. All rights reserved by My Ceylon Walk.
