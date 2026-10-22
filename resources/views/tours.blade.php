@extends('layouts.app')

@section('title', 'Tours & Journeys | My Ceylon Walk')
@section('meta_description', 'Discover handcrafted Sri Lanka itineraries with private transport, local expert guides, and handpicked boutique accommodations.')

@section('content')
<!-- Tours Hero Section -->
<section class="hero-section" style="border-radius:0;">
  <img
    src="{{ asset('images/Train_crossing_Nine_Arches_Bridge_20261002124349_2.webp') }}"
    alt="Train crossing Nine Arches Bridge in Sri Lanka highlands"
    class="hero-bg-img"
    fetchpriority="high"
    decoding="async"
  >
  <div class="hero-vignette"></div>
  <div class="hero-grain"></div>
  <div class="hero-glow"></div>
  <div class="hero-sheen"></div>
  <div class="hero-overlay"></div>
  <div class="container hero-content">
    <div class="hero-text-wrap">
      <div class="hero-eyebrow-line reveal-text"></div>
      <h1 class="hero-title reveal-text delay-100">
        Journeys<br>
        <span class="highlight-gold">shaped around you.</span>
      </h1>
      <p class="hero-subheading reveal-text delay-200">
        Carefully curated tour packages with local expertise, flexible options and unforgettable experiences.
      </p>
    </div>

    <!-- Tour Search Bar -->
    <div class="tours-search-bar reveal-text delay-300">
      <div class="tours-search-item">
        <div>
          <div class="search-field-label">Where to?</div>
          <input type="text" placeholder="Sri Lanka destinations" class="search-field-input">
        </div>
      </div>
      <div class="tours-search-item">
        <div>
          <div class="search-field-label">Duration</div>
          <select class="search-field-input" style="border:none; background:transparent;">
            <option>7 - 10 Days</option>
            <option>1 - 6 Days</option>
            <option>11 - 14 Days</option>
            <option>15+ Days</option>
          </select>
        </div>
      </div>
      <div class="tours-search-item">
        <div>
          <div class="search-field-label">Budget</div>
          <select class="search-field-input" style="border:none; background:transparent;">
            <option>$800 - $1,500</option>
            <option>$500 - $800</option>
            <option>$1,500+</option>
          </select>
        </div>
      </div>
      <div class="tours-search-item">
        <div>
          <div class="search-field-label">Travel Style</div>
          <select class="search-field-input" style="border:none; background:transparent;">
            <option>All Styles</option>
            <option>Cultural &amp; Heritage</option>
            <option>Wildlife Safari</option>
            <option>Hill &amp; Tea Country</option>
          </select>
        </div>
      </div>
      <button type="button" class="tours-search-submit">
        Search Tours
      </button>
    </div>
  </div>
</section>

<!-- Trust Icons Strip -->
<div class="features-strip-light">
  <div class="container">
    <div class="features-strip-grid">
      <div class="features-strip-item reveal-text">
        <div class="features-strip-icon">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
            <polyline points="14 2 14 8 20 8"/>
            <line x1="16" y1="13" x2="8" y2="13"/>
            <line x1="16" y1="17" x2="8" y2="17"/>
            <polyline points="10 9 9 9 8 9"/>
          </svg>
        </div>
        <div class="features-strip-title">Handpicked Itineraries</div>
      </div>

      <div class="features-strip-item reveal-text delay-100">
        <div class="features-strip-icon">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
            <polyline points="3.27 6.96 12 12.01 20.73 6.96"/>
            <line x1="12" y1="22.08" x2="12" y2="12"/>
          </svg>
        </div>
        <div class="features-strip-title">Flexible Customisation</div>
      </div>

      <div class="features-strip-item reveal-text delay-200">
        <div class="features-strip-icon">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
            <circle cx="12" cy="7" r="4"/>
          </svg>
        </div>
        <div class="features-strip-title">Local Expert Guides</div>
      </div>

      <div class="features-strip-item reveal-text delay-300">
        <div class="features-strip-icon">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <circle cx="12" cy="12" r="10"/>
            <path d="M12 8v8M8 12h8"/>
          </svg>
        </div>
        <div class="features-strip-title">Best Price Guarantee</div>
      </div>
    </div>
  </div>
</div>

<!-- Featured Tours Section -->
<section class="section section-cream">
  <div class="container">
    <div class="section-header-flex">
      <div>
        <h2 class="section-title reveal-text">Featured Tours</h2>
        <p class="section-subtitle reveal-text delay-100">Popular journeys loved by travellers.</p>
      </div>
      <div class="reveal-text delay-200" style="display: flex; align-items: center; gap: 8px; font-size: 0.92rem; color: var(--text-muted);">
        <span>Sort by:</span>
        <strong style="color: var(--text-dark); cursor: pointer;">Most Popular &#9662;</strong>
      </div>
    </div>

    <div class="cards-grid-3">
      <!-- Tour 1 -->
      <article class="journey-card reveal-card">
        <img src="{{ asset('images/Sigiriya_Rock_Fortress_rising_20261002124419.webp') }}" alt="The Ceylon Signature" class="journey-card-img" loading="lazy">
        <div class="journey-card-gradient"></div>
        <button class="journey-card-badge-top" aria-label="Favorite">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
          </svg>
        </button>
        <div class="journey-card-content">
          <h3 class="journey-card-title">The Ceylon Signature</h3>
          <div class="journey-card-meta">
            <span>10 Days &bull; From <strong>$1,250</strong></span>
            <div style="display: flex; align-items: center; gap: 10px;">
              <span style="color: #FFC107; display: flex; align-items: center; gap: 3px;">&#9733; 4.9 (120)</span>
              <div class="btn-card-arrow">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </article>

      <!-- Tour 2 -->
      <article class="journey-card reveal-card delay-100">
        <img src="{{ asset('images/Leopard_standing_on_rock_20261002124420.webp') }}" alt="Wildlife &amp; Nature Trail" class="journey-card-img" loading="lazy">
        <div class="journey-card-gradient"></div>
        <button class="journey-card-badge-top" aria-label="Favorite">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
          </svg>
        </button>
        <div class="journey-card-content">
          <h3 class="journey-card-title">Wildlife &amp; Nature Trail</h3>
          <div class="journey-card-meta">
            <span>8 Days &bull; From <strong>$980</strong></span>
            <div style="display: flex; align-items: center; gap: 10px;">
              <span style="color: #FFC107; display: flex; align-items: center; gap: 3px;">&#9733; 4.8 (95)</span>
              <div class="btn-card-arrow">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </article>

      <!-- Tour 3 -->
      <article class="journey-card reveal-card delay-200">
        <img src="{{ asset('images/Sri_Lankan_temple_at_sunset_20261002124413.webp') }}" alt="Cultural Triangle" class="journey-card-img" loading="lazy">
        <div class="journey-card-gradient"></div>
        <button class="journey-card-badge-top" aria-label="Favorite">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
          </svg>
        </button>
        <div class="journey-card-content">
          <h3 class="journey-card-title">Cultural Triangle</h3>
          <div class="journey-card-meta">
            <span>6 Days &bull; From <strong>$720</strong></span>
            <div style="display: flex; align-items: center; gap: 10px;">
              <span style="color: #FFC107; display: flex; align-items: center; gap: 3px;">&#9733; 4.7 (88)</span>
              <div class="btn-card-arrow">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- Find Your Perfect Tour (Horizontal List View) -->
<section class="section section-white">
  <div class="container">
    <h2 class="section-title reveal-text">Find Your Perfect Tour</h2>

    <!-- Category Filter Pills -->
    <div class="filter-pills-bar reveal-text delay-100" data-target-grid="toursListGrid">
      <button class="btn-pill active" data-filter="all">All Tours</button>
      <button class="btn-pill" data-filter="culture">Culture</button>
      <button class="btn-pill" data-filter="wildlife">Wildlife</button>
      <button class="btn-pill" data-filter="adventure">Adventure</button>
      <button class="btn-pill" data-filter="beach">Beach</button>
      <button class="btn-pill" data-filter="family">Family</button>
      <button class="btn-pill" data-filter="luxury">Luxury</button>
    </div>

    <!-- Tours Horizontal Cards -->
    <div class="tours-horizontal-list" id="toursListGrid">
      <!-- Item 1 -->
      <article class="tour-card-h reveal-card" data-category="culture adventure">
        <div class="tour-card-h-img">
          <img src="{{ asset('images/Tea_plantation_on_misty_hills_20261002124420.webp') }}" alt="Hills &amp; Tea Country" loading="lazy">
        </div>
        <div class="tour-card-h-body">
          <h3 class="tour-card-h-title">Hills &amp; Tea Country</h3>
          <div class="tour-card-h-meta">
            <span>7 Days</span> &bull; <span>From <strong>$860</strong></span>
          </div>
          <ul class="tour-card-h-highlights">
            <li>Scenic blue train ride across Demodara Nine Arch Bridge</li>
            <li>Handpicked Ceylon tea estate visits &amp; fresh brew tasting</li>
            <li>Mist-shrouded mountain waterfalls and highland hiking</li>
          </ul>
        </div>
        <div class="tour-card-h-action">
          <button type="button" class="btn-primary btn-plan-trip">
            View Details
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </button>
        </div>
      </article>

      <!-- Item 2 -->
      <article class="tour-card-h reveal-card delay-100" data-category="wildlife adventure">
        <div class="tour-card-h-img">
          <img src="{{ asset('images/Elephants_at_watering_hole_20261002124420_2.webp') }}" alt="Safari &amp; Wildlife" loading="lazy">
        </div>
        <div class="tour-card-h-body">
          <h3 class="tour-card-h-title">Safari &amp; Wildlife</h3>
          <div class="tour-card-h-meta">
            <span>8 Days</span> &bull; <span>From <strong>$980</strong></span>
          </div>
          <ul class="tour-card-h-highlights">
            <li>Yala &amp; Udawalawe National Park 4x4 private safaris</li>
            <li>High density Sri Lankan leopard and wild elephant encounters</li>
            <li>Birdwatching wetlands and night wilderness nature walks</li>
          </ul>
        </div>
        <div class="tour-card-h-action">
          <button type="button" class="btn-primary btn-plan-trip">
            View Details
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </button>
        </div>
      </article>

      <!-- Item 3 -->
      <article class="tour-card-h reveal-card delay-200" data-category="beach luxury">
        <div class="tour-card-h-img">
          <img src="{{ asset('images/Sri_Lanka_tropical_beach_sunset_20261002124349.webp') }}" alt="South Coast Escape" loading="lazy">
        </div>
        <div class="tour-card-h-body">
          <h3 class="tour-card-h-title">South Coast Escape</h3>
          <div class="tour-card-h-meta">
            <span>6 Days</span> &bull; <span>From <strong>$750</strong></span>
          </div>
          <ul class="tour-card-h-highlights">
            <li>Golden sandy beaches of Mirissa, Tangalle and Galle Fort</li>
            <li>Snorkelling with sea turtles, coral reefs and whale watching</li>
            <li>Historic Dutch ramparts, sunset dining and seaside boutique villas</li>
          </ul>
        </div>
        <div class="tour-card-h-action">
          <button type="button" class="btn-primary btn-plan-trip">
            View Details
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </button>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- Optional Services Section -->
<section class="section section-cream">
  <div class="container">
    <div style="text-align: center; max-width: 600px; margin: 0 auto;">
      <h2 class="section-title reveal-text">Optional Services</h2>
      <p class="section-subtitle reveal-text delay-100">Customise your journey with additional services.</p>
    </div>

    <div class="services-strip-grid">
      <div class="service-icon-box reveal-card">
        <div class="service-circle">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M17.8 19.2L16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.3c.4-.2.6-.6.5-1.1z"/>
          </svg>
        </div>
        <span class="service-label">Airport Pickup &amp; Drop</span>
      </div>

      <div class="service-icon-box reveal-card delay-100">
        <div class="service-circle">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <rect x="1" y="3" width="15" height="13"/>
            <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/>
            <circle cx="5.5" cy="18.5" r="2.5"/>
            <circle cx="18.5" cy="18.5" r="2.5"/>
          </svg>
        </div>
        <span class="service-label">Private Transport</span>
      </div>

      <div class="service-icon-box reveal-card delay-200">
        <div class="service-circle">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
            <circle cx="12" cy="7" r="4"/>
          </svg>
        </div>
        <span class="service-label">Tour Guide Services</span>
      </div>

      <div class="service-icon-box reveal-card delay-300">
        <div class="service-circle">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
          </svg>
        </div>
        <span class="service-label">Excursions</span>
      </div>

      <div class="service-icon-box reveal-card delay-400">
        <div class="service-circle">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M18 8h1a4 4 0 0 1 0 8h-1"/>
            <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/>
            <line x1="6" y1="1" x2="6" y2="4"/>
            <line x1="10" y1="1" x2="10" y2="4"/>
            <line x1="14" y1="1" x2="14" y2="4"/>
          </svg>
        </div>
        <span class="service-label">Meal Plans</span>
      </div>

      <div class="service-icon-box reveal-card delay-500">
        <div class="service-circle">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <polygon points="3 11 22 2 13 21 11 13 3 11"/>
          </svg>
        </div>
        <span class="service-label">Custom Routes</span>
      </div>

      <div class="service-icon-box reveal-card delay-600">
        <div class="service-circle">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
          </svg>
        </div>
        <span class="service-label">Custom Requests</span>
      </div>
    </div>

    <!-- Need a Custom Tour Banner -->
    <div class="custom-tour-banner reveal-card">
      <div>
        <h3>Need a Custom Tour?</h3>
        <p>Tell us your interests and we'll create a personalised itinerary.</p>
      </div>
      <button type="button" class="btn-primary btn-plan-trip">
        Request a Custom Tour
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <line x1="5" y1="12" x2="19" y2="12"></line>
          <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
      </button>
    </div>
  </div>
</section>
@endsection
