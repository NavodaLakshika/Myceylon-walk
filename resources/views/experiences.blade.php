@extends('layouts.app')

@section('title', 'Authentic Sri Lanka Experiences | My Ceylon Walk')
@section('meta_description', 'Discover immersive Sri Lankan experiences: wildlife safaris, tea plantation heritage, traditional village cooking, and ocean whale watching.')

@section('content')
<!-- Experiences Hero Section -->
<section class="hero-section" style="border-radius:0;">
  <img
    src="{{ asset('images/Traveller_sitting_on_rocky_viewp_20261002124400.webp') }}"
    alt="Traveller sitting on rocky viewpoint overlooking Sri Lanka"
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
        Do more than<br>
        <span class="highlight-gold">pass through.</span>
      </h1>
      <p class="hero-subheading reveal-text delay-200">
        Meaningful experiences that connect you with the real Sri Lanka — its people, nature and culture.
      </p>
    </div>

    <!-- Single Search Bar -->
    <div class="hero-single-search reveal-text delay-300">
      <input type="text" placeholder="Search experiences (e.g., Safari, Cooking, Tea estates)...">
      <button type="button" class="search-btn-circle" aria-label="Search experiences">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4">
          <circle cx="11" cy="11" r="8"/>
          <line x1="21" y1="21" x2="16.65" y2="16.65"/>
        </svg>
      </button>
    </div>
  </div>
</section>

<!-- Category Icons Strip -->
<div class="features-strip-light" style="background-color: var(--bg-cream); border-bottom: 1px solid var(--border-light); padding: 40px 0;">
  <div class="container">
    <div class="category-strip-grid">
      <!-- Cat 1 -->
      <div class="features-strip-item reveal-text">
        <div class="features-strip-icon">
          <svg width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M12 2a8 8 0 0 0-8 8c0 5 8 12 8 12s8-7 8-12a8 8 0 0 0-8-8z"/>
          </svg>
        </div>
        <div class="features-strip-title" style="font-size: 0.92rem;">Wildlife</div>
      </div>
      <!-- Cat 2 -->
      <div class="features-strip-item reveal-text delay-100">
        <div class="features-strip-icon">
          <svg width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M12 3l9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V10l9-7z"/>
          </svg>
        </div>
        <div class="features-strip-title" style="font-size: 0.92rem;">Culture</div>
      </div>
      <!-- Cat 3 -->
      <div class="features-strip-item reveal-text delay-200">
        <div class="features-strip-icon">
          <svg width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/>
            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>
          </svg>
        </div>
        <div class="features-strip-title" style="font-size: 0.92rem;">Nature</div>
      </div>
      <!-- Cat 4 -->
      <div class="features-strip-item reveal-text delay-300">
        <div class="features-strip-icon">
          <svg width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M18 8h1a4 4 0 0 1 0 8h-1"/>
            <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/>
          </svg>
        </div>
        <div class="features-strip-title" style="font-size: 0.92rem;">Food</div>
      </div>
      <!-- Cat 5 -->
      <div class="features-strip-item reveal-text delay-400">
        <div class="features-strip-icon">
          <svg width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
          </svg>
        </div>
        <div class="features-strip-title" style="font-size: 0.92rem;">Wellness</div>
      </div>
      <!-- Cat 6 -->
      <div class="features-strip-item reveal-text delay-500">
        <div class="features-strip-icon">
          <svg width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
          </svg>
        </div>
        <div class="features-strip-title" style="font-size: 0.92rem;">Adventure</div>
      </div>
    </div>
  </div>
</div>

<!-- Featured Experiences (6 Grid) -->
<section class="section section-cream">
  <div class="container">
    <div class="section-header-flex">
      <div>
        <h2 class="section-title reveal-text">Featured Experiences</h2>
        <p class="section-subtitle reveal-text delay-100">Authentic moments you'll always remember.</p>
      </div>
      <a href="{{ url('/experiences') }}" class="link-view-all reveal-text delay-200">
        View all
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <line x1="5" y1="12" x2="19" y2="12"></line>
          <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
      </a>
    </div>

    <div class="experience-grid-6" id="experiencesGrid">
      <!-- Item 1: Wildlife Safari -->
      <article class="experience-card reveal-card" data-category="wildlife adventure">
        <img src="{{ asset('images/Leopard_standing_on_rock_outcrop_20261002124349.webp') }}" alt="Wildlife Safari" class="experience-card-img" loading="lazy">
        <button class="journey-card-badge-top" aria-label="Favorite">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
          </svg>
        </button>
        <div class="experience-card-content">
          <h3 class="experience-card-title">Wildlife Safari</h3>
          <div class="experience-card-location">
            <span>Yala National Park</span>
            <div class="btn-card-arrow">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </div>
          </div>
        </div>
      </article>

      <!-- Item 2: Tea Estate Experience -->
      <article class="experience-card reveal-card delay-100" data-category="nature culture">
        <img src="{{ asset('images/Tea_picker_working_in_plantation_20261002124420.webp') }}" alt="Tea Estate Experience" class="experience-card-img" loading="lazy">
        <button class="journey-card-badge-top" aria-label="Favorite">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
          </svg>
        </button>
        <div class="experience-card-content">
          <h3 class="experience-card-title">Tea Estate Experience</h3>
          <div class="experience-card-location">
            <span>Nuwara Eliya</span>
            <div class="btn-card-arrow">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </div>
          </div>
        </div>
      </article>

      <!-- Item 3: Traditional Village Tour -->
      <article class="experience-card reveal-card delay-200" data-category="culture">
        <img src="{{ asset('images/Woman_preparing_traditional_food_20261002124420.webp') }}" alt="Traditional Village Tour" class="experience-card-img" loading="lazy">
        <button class="journey-card-badge-top" aria-label="Favorite">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
          </svg>
        </button>
        <div class="experience-card-content">
          <h3 class="experience-card-title">Traditional Village Tour</h3>
          <div class="experience-card-location">
            <span>Cultural Experience</span>
            <div class="btn-card-arrow">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </div>
          </div>
        </div>
      </article>

      <!-- Item 4: Cooking Class -->
      <article class="experience-card reveal-card" data-category="food culture">
        <img src="{{ asset('images/Traditional_Sri_Lankan_meal_disp_20261002124420.webp') }}" alt="Cooking Class" class="experience-card-img" loading="lazy">
        <button class="journey-card-badge-top" aria-label="Favorite">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
          </svg>
        </button>
        <div class="experience-card-content">
          <h3 class="experience-card-title">Cooking Class</h3>
          <div class="experience-card-location">
            <span>Local Flavours</span>
            <div class="btn-card-arrow">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </div>
          </div>
        </div>
      </article>

      <!-- Item 5: Whale Watching -->
      <article class="experience-card reveal-card delay-100" data-category="wildlife nature">
        <img src="{{ asset('images/Blue_whale_surfacing_in_ocean_20261002124400.webp') }}" alt="Whale Watching" class="experience-card-img" loading="lazy">
        <button class="journey-card-badge-top" aria-label="Favorite">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
          </svg>
        </button>
        <div class="experience-card-content">
          <h3 class="experience-card-title">Whale Watching</h3>
          <div class="experience-card-location">
            <span>Mirissa</span>
            <div class="btn-card-arrow">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </div>
          </div>
        </div>
      </article>

      <!-- Item 6: Wellness Retreat -->
      <article class="experience-card reveal-card delay-200" data-category="wellness">
        <img src="{{ asset('images/Traveller_practicing_yoga_at_sunset_20261002124418.webp') }}" alt="Wellness Retreat" class="experience-card-img" loading="lazy">
        <button class="journey-card-badge-top" aria-label="Favorite">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
          </svg>
        </button>
        <div class="experience-card-content">
          <h3 class="experience-card-title">Wellness Retreat</h3>
          <div class="experience-card-location">
            <span>Mind &amp; Body</span>
            <div class="btn-card-arrow">
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

<!-- Explore by Experience Type Filter Bar -->
<section class="section section-white" style="padding-bottom: 20px;">
  <div class="container">
    <h2 class="section-title reveal-text" style="margin-bottom: 24px;">Explore by Experience Type</h2>

    <div class="filter-pills-bar reveal-text delay-100" data-target-grid="experiencesGrid">
      <button class="btn-pill active" data-filter="all">All</button>
      <button class="btn-pill" data-filter="wildlife">Wildlife</button>
      <button class="btn-pill" data-filter="culture">Culture</button>
      <button class="btn-pill" data-filter="nature">Nature</button>
      <button class="btn-pill" data-filter="food">Food</button>
      <button class="btn-pill" data-filter="wellness">Wellness</button>
      <button class="btn-pill" data-filter="adventure">Adventure</button>
    </div>
  </div>
</section>

<!-- Nature Banner: Connect with nature in extraordinary ways -->
<section class="section section-cream">
  <div class="container">
    <div class="promo-split reveal-card">
      <div class="promo-split-content">
        <div class="hero-eyebrow-line"></div>
        <h3 class="promo-banner-title">
          Connect with nature<br>
          in extraordinary ways.
        </h3>
        <p class="promo-banner-desc">
          From safaris to waterfalls, discover experiences that go beyond the ordinary and leave an indelible mark on your soul.
        </p>
        <button type="button" class="btn-primary btn-plan-trip">
          Recommend Experiences
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </button>
      </div>
      <div class="promo-split-media">
        <img src="{{ asset('images/Waterfall_in_tropical_rainforest_20261002124401.webp') }}" alt="Waterfall in Sri Lanka rainforest" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- Seasonal Highlights -->
<section class="section section-white">
  <div class="container">
    <h2 class="section-title reveal-text">Seasonal Highlights</h2>
    <p class="section-subtitle reveal-text delay-100" style="margin-bottom: 36px;">The best experiences for every season.</p>

    <div class="destinations-grid-4 season-grid">
      <div class="destination-card reveal-card">
        <img src="{{ asset('images/Blue_whale_surfacing_in_ocean_20261002124420.webp') }}" alt="Whale Watching" class="destination-card-img" loading="lazy">
        <div class="destination-card-overlay" style="flex-direction: column; align-items: flex-start; justify-content: flex-end;">
          <h3 class="destination-card-title">Whale Watching</h3>
          <span style="font-size: 0.85rem; color: var(--primary-gold); font-weight: 600;">Nov &ndash; Apr</span>
        </div>
      </div>

      <div class="destination-card reveal-card delay-100">
        <img src="{{ asset('images/Surfer_riding_tropical_ocean_wave_20261002124351.webp') }}" alt="Surfing" class="destination-card-img" loading="lazy">
        <div class="destination-card-overlay" style="flex-direction: column; align-items: flex-start; justify-content: flex-end;">
          <h3 class="destination-card-title">Surfing</h3>
          <span style="font-size: 0.85rem; color: var(--primary-gold); font-weight: 600;">Nov &ndash; Apr</span>
        </div>
      </div>

      <div class="destination-card reveal-card delay-200">
        <img src="{{ asset('images/Sri_Lanka_misty_central_highlands_20261002124419.webp') }}" alt="Misty Highlands" class="destination-card-img" loading="lazy">
        <div class="destination-card-overlay" style="flex-direction: column; align-items: flex-start; justify-content: flex-end;">
          <h3 class="destination-card-title">Misty Highlands</h3>
          <span style="font-size: 0.85rem; color: var(--primary-gold); font-weight: 600;">Dec &ndash; Feb</span>
        </div>
      </div>

      <div class="destination-card reveal-card delay-300">
        <img src="{{ asset('images/Kandyan_dancers_performing_at_fe_20261002124402.webp') }}" alt="Cultural Festivals" class="destination-card-img" loading="lazy">
        <div class="destination-card-overlay" style="flex-direction: column; align-items: flex-start; justify-content: flex-end;">
          <h3 class="destination-card-title">Cultural Festivals</h3>
          <span style="font-size: 0.85rem; color: var(--primary-gold); font-weight: 600;">All Year</span>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
