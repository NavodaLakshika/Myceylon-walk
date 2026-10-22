@extends('layouts.app')

@section('title', 'Luxury Stays & Boutique Villas | My Ceylon Walk')
@section('meta_description', 'Discover handpicked boutique hotels, luxury eco lodges, and private beachfront villas in Sri Lanka.')

@section('content')
<!-- Stays Hero Section -->
<section class="hero-section" style="background-image: url('{{ asset('images/Luxury_hotel_infinity_pool_mount_20261002124413.webp') }}');">
  <div class="hero-overlay"></div>
  <div class="container hero-content">
    <div class="hero-eyebrow-line reveal-text"></div>
    <h1 class="hero-title reveal-text delay-100">
      Stay somewhere<br>
      <span class="highlight-gold">memorable.</span>
    </h1>
    <p class="hero-subheading reveal-text delay-200">
      From misty hill retreats to beachfront villas, find the perfect place to unwind in Sri Lanka.
    </p>

    <!-- Stays Search Bar -->
    <div class="hero-search-wrapper reveal-text delay-300">
      <div class="hero-search-box">
        <div class="search-field">
          <label class="search-field-label">Location</label>
          <input type="text" placeholder="Where do you want to stay?" class="search-field-input">
        </div>
        <div class="search-field">
          <label class="search-field-label">Check-in</label>
          <input type="text" placeholder="Select dates" onfocus="(this.type='date')" class="search-field-input">
        </div>
        <div class="search-field">
          <label class="search-field-label">Check-out</label>
          <input type="text" placeholder="Select dates" onfocus="(this.type='date')" class="search-field-input">
        </div>
        <div class="search-field">
          <label class="search-field-label">Guests</label>
          <select class="search-field-input" style="border:none; background:transparent;">
            <option>2 guests</option>
            <option>1 guest</option>
            <option>3 guests</option>
            <option>4+ guests</option>
          </select>
        </div>
        <button type="button" class="search-btn-circle" aria-label="Search accommodations">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4">
            <circle cx="11" cy="11" r="8"/>
            <line x1="21" y1="21" x2="16.65" y2="16.65"/>
          </svg>
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Filter Pills Bar -->
<div style="background-color: var(--bg-cream); padding-top: 40px;">
  <div class="container">
    <div class="filter-pills-bar reveal-text" data-target-grid="staysGrid">
      <button class="btn-pill active" data-filter="all">All Stays</button>
      <button class="btn-pill" data-filter="villas">Villas</button>
      <button class="btn-pill" data-filter="boutique">Boutique Hotels</button>
      <button class="btn-pill" data-filter="eco">Eco Stays</button>
      <button class="btn-pill" data-filter="beach">Beach Resorts</button>
      <button class="btn-pill" data-filter="hills">Hill Country</button>
      <button class="btn-pill" data-filter="all">More &#9662;</button>
    </div>
  </div>
</div>

<!-- Featured Stays -->
<section class="section section-cream" style="padding-top: 20px;">
  <div class="container">
    <div class="section-header-flex">
      <div>
        <h2 class="section-title reveal-text">Featured Stays</h2>
        <p class="section-subtitle reveal-text delay-100">Carefully selected accommodations for a comfortable stay.</p>
      </div>
      <a href="{{ url('/stays') }}" class="link-view-all reveal-text delay-200">
        View all
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <line x1="5" y1="12" x2="19" y2="12"></line>
          <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
      </a>
    </div>

    <div class="cards-grid-3" id="staysGrid">
      <!-- Stay 1 -->
      <article class="stay-card reveal-card" data-category="boutique hills">
        <div class="stay-card-thumb">
          <img src="{{ asset('images/Luxury_hotel_overlooking_ocean_s_20261002124419.webp') }}" alt="Nine Skies Ella" loading="lazy">
          <button class="journey-card-badge-top" aria-label="Favorite">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
            </svg>
          </button>
        </div>
        <div class="stay-card-body">
          <div class="stay-card-header">
            <div>
              <h3 class="stay-card-name">Nine Skies</h3>
              <div class="stay-card-location">Ella</div>
            </div>
            <div class="stay-card-rating">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
              </svg>
              <span>4.9</span>
            </div>
          </div>
          <div class="stay-card-footer">
            <span class="stay-card-type">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
              </svg>
              Boutique Hotel
            </span>
            <div class="btn-card-arrow" style="color: var(--text-dark); border-color: var(--border-light);">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </div>
          </div>
        </div>
      </article>

      <!-- Stay 2 -->
      <article class="stay-card reveal-card delay-100" data-category="eco">
        <div class="stay-card-thumb">
          <img src="{{ asset('images/Safari_lodge_in_Sri_Lanka_20261002124414.webp') }}" alt="Wild Coast Tented Lodge" loading="lazy">
          <button class="journey-card-badge-top" aria-label="Favorite">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
            </svg>
          </button>
        </div>
        <div class="stay-card-body">
          <div class="stay-card-header">
            <div>
              <h3 class="stay-card-name">Wild Coast Tented Lodge</h3>
              <div class="stay-card-location">Yala</div>
            </div>
            <div class="stay-card-rating">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
              </svg>
              <span>4.9</span>
            </div>
          </div>
          <div class="stay-card-footer">
            <span class="stay-card-type">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M2 20h20M12 4l10 16H2L12 4z"/>
              </svg>
              Luxury Eco Lodge
            </span>
            <div class="btn-card-arrow" style="color: var(--text-dark); border-color: var(--border-light);">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </div>
          </div>
        </div>
      </article>

      <!-- Stay 3 -->
      <article class="stay-card reveal-card delay-200" data-category="beach villas">
        <div class="stay-card-thumb">
          <img src="{{ asset('images/Beachfront_resort_near_ocean_20261002124415.webp') }}" alt="The Fortress Resort" loading="lazy">
          <button class="journey-card-badge-top" aria-label="Favorite">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
            </svg>
          </button>
        </div>
        <div class="stay-card-body">
          <div class="stay-card-header">
            <div>
              <h3 class="stay-card-name">The Fortress Resort</h3>
              <div class="stay-card-location">Galle</div>
            </div>
            <div class="stay-card-rating">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
              </svg>
              <span>4.7</span>
            </div>
          </div>
          <div class="stay-card-footer">
            <span class="stay-card-type">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
              </svg>
              Beach Resort
            </span>
            <div class="btn-card-arrow" style="color: var(--text-dark); border-color: var(--border-light);">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </div>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- Browse by Location -->
<section class="section section-white">
  <div class="container">
    <h2 class="section-title reveal-text">Browse by Location</h2>

    <div class="destinations-grid-4" style="margin-top: 36px;">
      <div class="destination-card reveal-card">
        <img src="{{ asset('images/Sri_Lanka_hill_country_landscape_20261002124414.webp') }}" alt="Hill Country" class="destination-card-img" loading="lazy">
        <div class="destination-card-overlay">
          <h3 class="destination-card-title">Hill Country</h3>
        </div>
      </div>
      <div class="destination-card reveal-card delay-100">
        <img src="{{ asset('images/Tropical_coastline_with_turquois_20261002124348.webp') }}" alt="South Coast" class="destination-card-img" loading="lazy">
        <div class="destination-card-overlay">
          <h3 class="destination-card-title">South Coast</h3>
        </div>
      </div>
      <div class="destination-card reveal-card delay-200">
        <img src="{{ asset('images/Sigiriya_Rock_Fortress_aerial_view_20261002124349.webp') }}" alt="Cultural Triangle" class="destination-card-img" loading="lazy">
        <div class="destination-card-overlay">
          <h3 class="destination-card-title">Cultural Triangle</h3>
        </div>
      </div>
      <div class="destination-card reveal-card delay-300">
        <img src="{{ asset('images/Tropical_beach_with_coconut_palms_20261002124412.webp') }}" alt="East Coast" class="destination-card-img" loading="lazy">
        <div class="destination-card-overlay">
          <h3 class="destination-card-title">East Coast</h3>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stay Experiences Promo Banner -->
<section class="section section-cream">
  <div class="container">
    <h2 class="section-title reveal-text" style="margin-bottom: 30px;">Stay Experiences</h2>

    <div class="promo-banner reveal-card" style="background-image: url('{{ asset('images/Luxury_hotel_infinity_pool_mount_20261002124413.webp') }}');">
      <div class="promo-banner-overlay"></div>
      <div class="promo-banner-content">
        <div class="hero-eyebrow-line"></div>
        <h3 class="promo-banner-title">
          Boutique stays<br>
          with local character.
        </h3>
        <p class="promo-banner-desc">
          Unique properties, exceptional service and unforgettable settings nestled amidst the authentic charm of Sri Lanka.
        </p>
        <button type="button" class="btn-primary btn-plan-trip">
          Explore Boutique Stays
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Features Row Badges (4 Columns) -->
<div class="features-strip-light" style="background-color: var(--bg-cream); border-top: 1px solid var(--border-light); padding: 50px 0;">
  <div class="container">
    <div class="features-strip-grid">
      <div class="features-strip-item reveal-text">
        <div class="features-strip-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
            <circle cx="12" cy="10" r="3"/>
          </svg>
        </div>
        <div class="features-strip-title">Premium Locations</div>
      </div>

      <div class="features-strip-item reveal-text delay-100">
        <div class="features-strip-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
            <polyline points="9 22 9 12 15 12 15 22"/>
          </svg>
        </div>
        <div class="features-strip-title">Unique Stays</div>
      </div>

      <div class="features-strip-item reveal-text delay-200">
        <div class="features-strip-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
          </svg>
        </div>
        <div class="features-strip-title">Comfort &amp; Quality</div>
      </div>

      <div class="features-strip-item reveal-text delay-300">
        <div class="features-strip-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
          </svg>
        </div>
        <div class="features-strip-title">Personalised Support</div>
      </div>
    </div>
  </div>
</div>
@endsection
