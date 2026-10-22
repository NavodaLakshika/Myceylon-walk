# 🌴 My Ceylon Walk — Luxury Sri Lanka Travel & Tour Booking Platform

[![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.4-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![CSS3](https://img.shields.io/badge/Custom_CSS3-No_Frameworks-1572B6?style=for-the-badge&logo=css3&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/CSS)
[![JavaScript](https://img.shields.io/badge/Vanilla_JS-ES6+-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)

A bespoke, luxury multi-page travel platform dedicated to authentic Sri Lankan journeys, luxury boutique stays, and curated wildlife and cultural experiences. Built with pure semantic HTML5, custom CSS3 design tokens, vanilla JavaScript scroll animations, and standard Laravel 12 MVC Blade architecture.

---

## ✨ Features & Highlights

- **Multi-Page Architecture (Not a SPA):**
  - **Home & Destinations (`/`):** Panoramic hero, featured journeys, 4-column destination highlights (Sigiriya, Ella, Yala, Mirissa), why travel with us, and CTA banners.
  - **Tours (`/tours`):** Curated tour packages, search bar (where to, duration, budget, travel style), category filter pills, horizontal detailed itinerary cards, and expandable itinerary modal.
  - **Stays (`/stays`):** Luxury eco lodges, beachfront villas, boutique hill country retreats, booking search widget, and location browse grid.
  - **Experiences (`/experiences`):** 6-grid authentic activities (safari, tea tasting, traditional cooking, whale watching, wellness retreats, surfing) and seasonal Sri Lankan highlights.
  - **About Us (`/about`):** Company vision, meet the local guide team, value pillars, and 4-step journey planning process.
- **Scroll-Triggered Micro-Animations:**
  - Modern `IntersectionObserver` text-reveal and card-reveal effects with blur-to-sharp transitions and staggered delays (`.reveal-text`, `.reveal-card`, `.reveal-lines`).
- **Official Brand Logo:**
  - Integrated custom brand identity with Sri Lankan map emblem, sunset, palm trees, and ocean motif presented in an elegant badge with gold accents.
- **High-Resolution Imagery:**
  - 46 authentic, high-definition WebP images covering Sri Lankan landscapes, heritage trains, misty tea hills, leopards, elephants, and ocean coasts.
- **Interactive Features:**
  - Sticky glassmorphism header on scroll.
  - Category filter pills for tours and stays with instant active state toggling.
  - Bespoke "Plan My Trip" modal with AJAX validation and backdrop click-to-close.
  - Save to favorites toggleable heart badges on journey cards.

---

## 📁 Project Structure

```text
d:\Chathumina\traval/
├── app/
│   └── Http/
│       └── Controllers/
│           └── TravelController.php      # Handles all page views & trip planning API
├── bootstrap/
│   ├── app.php                          # Application configuration & middleware
│   └── providers.php
├── config/                              # Laravel configuration files
├── database/                            # Migrations & database setup
├── public/
│   ├── css/
│   │   └── style.css                    # Custom CSS3 luxury design system
│   ├── js/
│   │   └── main.js                      # Vanilla JS (IntersectionObserver, filters, modal)
│   ├── images/
│   │   ├── logo.png                     # Official My Ceylon Walk logo
│   │   ├── logo-transparent.png         # Transparent variant for dark backgrounds
│   │   └── *.webp                       # 46 authentic high-resolution travel photos
│   ├── index.php                        # Laravel HTTP front controller
│   ├── index.html                       # Standalone static preview (Home)
│   ├── tours.html                       # Standalone static preview (Tours)
│   ├── stays.html                       # Standalone static preview (Stays)
│   ├── experiences.html                 # Standalone static preview (Experiences)
│   └── about.html                       # Standalone static preview (About)
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php            # Master layout with Google Fonts, Meta & Scripts
│       ├── partials/
│       │   ├── header.blade.php         # Navbar & mobile drawer with brand logo
│       │   ├── footer.blade.php         # Multi-column footer & copyright
│       │   └── modal.blade.php          # Bespoke trip planning popup modal
│       ├── home.blade.php               # Home view
│       ├── tours.blade.php              # Tours view
│       ├── stays.blade.php              # Stays view
│       ├── experiences.blade.php        # Experiences view
│       └── about.blade.php              # About Us view
├── routes/
│   └── web.php                          # Route definitions mapped to TravelController
├── storage/                             # Logs, framework cache, file storage
├── .env.example                         # Environment template
├── .gitignore                           # Git ignore rules for Laravel
├── artisan                              # Artisan CLI
└── composer.json                        # Dependencies and autoloading
```

---

## 🚀 Getting Started

### Prerequisites

- **PHP:** `^8.2` or higher (tested on PHP `8.4`)
- **Composer:** `^2.x`
- Optional: **Laravel Herd**, **XAMPP**, or native PHP CLI.

### Installation

1. **Clone or navigate to the project directory:**
   ```bash
   cd d:\Chathumina\traval
   ```

2. **Install Composer dependencies:**
   ```bash
   composer install
   ```

3. **Configure Environment:**
   If `.env` does not exist, copy `.env.example`:
   ```bash
   copy .env.example .env
   ```

4. **Generate Application Key:**
   ```bash
   php artisan key:generate
   ```

5. **Start the Laravel Development Server:**
   ```bash
   php artisan serve
   ```
   The site will be live at **`http://127.0.0.1:8000`**.

---

## 🧭 Routes Summary

| Method | URI | Controller Action | Description |
|---|---|---|---|
| `GET` | `/` | `TravelController@index` | Home / Destinations page |
| `GET` | `/tours` | `TravelController@tours` | Tours & Itineraries |
| `GET` | `/stays` | `TravelController@stays` | Luxury Stays & Accommodations |
| `GET` | `/experiences` | `TravelController@experiences` | Authentic Experiences |
| `GET` | `/about` | `TravelController@about` | About Us & Story |
| `POST` | `/plan-trip` | `TravelController@planTrip` | Bespoke Trip Booking AJAX API |

---

## 🎨 Design Tokens & Typography

- **Colors:**
  - Gold Accent: `#E5A93C`
  - Forest Dark: `#061A15` / `#0A221C`
  - Background Warm Cream: `#FAF7F2`
  - Light Background: `#FFFFFF`
- **Typography:**
  - Display / Monograms: `Cinzel`
  - Headings & Editorial Serifs: `Playfair Display`
  - Body & UI Controls: `Plus Jakarta Sans`

---

## 💡 Standalone Previews (Zero Dependencies)

If you wish to view the pages without running `php artisan serve` or a PHP server, the `public/` directory contains standalone static HTML copies:
- `public/index.html`
- `public/tours.html`
- `public/stays.html`
- `public/experiences.html`
- `public/about.html`

---

## 📄 License

This project is proprietary code developed for **My Ceylon Walk**. All rights reserved.
