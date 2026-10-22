@extends('layouts.app')

@section('title', 'My Ceylon Walk | Authentic Journeys in Sri Lanka')
@section('meta_description', 'Discover handpicked Sri Lanka journeys, misty highlands, ancient wonders, and bespoke travel experiences.')

@section('content')
  <!-- Hero Section -->
  <section class="hero-section" style="border-radius:0;">
    {{-- High-quality hero image — no background-image, use <img> for sharpest rendering --}}
    <img
      src="{{ asset('images/hero-sigiriya-hd.webp') }}"
      srcset="{{ asset('images/hero-sigiriya-1376.webp') }} 1376w,
              {{ asset('images/hero-sigiriya-1920.webp') }} 1920w,
              {{ asset('images/hero-sigiriya-hd.webp') }} 2400w"
      sizes="100vw"
      alt="Sigiriya Rock Fortress at golden hour"
      class="hero-bg-img"
      fetchpriority="high"
      decoding="async"
    >
    {{-- Layered atmospheric effects --}}
    <div class="hero-vignette"></div>
    <div class="hero-grain"></div>
    <div class="hero-glow"></div>
    <div class="hero-sheen"></div>
    <div class="hero-overlay"></div>
    <div class="container hero-content">
      <div class="hero-text-wrap">
        <div class="hero-eyebrow-line reveal-text"></div>
        <h1 class="hero-title reveal-text delay-100">
          Find the Sri Lanka<br>
          <span class="highlight-gold">you thought only</span><br>
          existed in stories.
        </h1>
        <p class="hero-subheading reveal-text delay-200">
          Ancient wonders, wild safaris, golden beaches and meaningful local experiences — all in one place.
        </p>
        <div class="hero-btn-group reveal-text delay-300">
          <a href="{{ url('/tours') }}" class="btn-primary">
            Explore Journeys
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
              stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
          <button type="button" class="btn-video">
            <span class="play-circle">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                <polygon points="5 3 19 12 5 21 5 3"></polygon>
              </svg>
            </span>
            Watch Video
          </button>
        </div>
      </div>

      <!-- Trust Metrics (inside hero) -->
      <div class="hero-trust">
        <div class="trust-grid">
          <div class="trust-item reveal-text">
            <svg class="trust-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
            </svg>
            <div>
              <div class="trust-text-val">100+</div>
              <div class="trust-text-sub">Experiences</div>
            </div>
          </div>
          <div class="trust-item reveal-text delay-100">
            <svg class="trust-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
              <circle cx="12" cy="12" r="10" />
              <polyline points="12 6 12 12 16 14" />
            </svg>
            <div>
              <div class="trust-text-val">24/7</div>
              <div class="trust-text-sub">Local Support</div>
            </div>
          </div>
          <div class="trust-item reveal-text delay-200">
            <svg class="trust-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
            </svg>
            <div>
              <div class="trust-text-val">Trusted</div>
              <div class="trust-text-sub">by Travelers</div>
            </div>
          </div>
          <div class="trust-item reveal-text delay-300">
            <svg class="trust-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
              <path
                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
            </svg>
            <div>
              <div class="trust-text-val">Sustainable</div>
              <div class="trust-text-sub">Tourism</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Featured Journeys Section -->
  <section class="section section-cream">
    <div class="container">
      <div class="section-header-flex">
        <div>
          <h2 class="section-title reveal-text">Featured Journeys</h2>
          <p class="section-subtitle reveal-text delay-100">Handpicked journeys for an unforgettable Sri Lanka.</p>
        </div>
        <a href="{{ url('/tours') }}" class="link-view-all reveal-text delay-200">
          View all
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </a>
      </div>

      <div class="cards-grid-3">
        <!-- Card 1 -->
        <article class="journey-card reveal-card">
          <img src="{{ asset('images/Sigiriya_landscape_photograph_20261002124348.webp') }}" alt="The Ceylon Signature"
            class="journey-card-img" loading="lazy">
          <div class="journey-card-gradient"></div>
          <button class="journey-card-badge-top" aria-label="Save to favorites">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path
                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
            </svg>
          </button>
          <div class="journey-card-content">
            <h3 class="journey-card-title">The Ceylon Signature</h3>
            <div class="journey-card-meta">
              <span><strong class="meta-tag">10 Days</strong> • Culture • Wildlife</span>
              <div class="btn-card-arrow">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </div>
            </div>
          </div>
        </article>

        <!-- Card 2 -->
        <article class="journey-card reveal-card delay-100">
          <img src="{{ asset('images/Train_crossing_Nine_Arches_Bridge_20261002124349.webp') }}" alt="Into the Highlands"
            class="journey-card-img" loading="lazy">
          <div class="journey-card-gradient"></div>
          <button class="journey-card-badge-top" aria-label="Save to favorites">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path
                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
            </svg>
          </button>
          <div class="journey-card-content">
            <h3 class="journey-card-title">Into the Highlands</h3>
            <div class="journey-card-meta">
              <span><strong class="meta-tag">7 Days</strong> • Hills • Heritage</span>
              <div class="btn-card-arrow">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </div>
            </div>
          </div>
        </article>

        <!-- Card 3 -->
        <article class="journey-card reveal-card delay-200">
          <img src="{{ asset('images/Leopard_standing_on_rock_ledge_20261002124401.webp') }}" alt="Wild to Water"
            class="journey-card-img" loading="lazy">
          <div class="journey-card-gradient"></div>
          <button class="journey-card-badge-top" aria-label="Save to favorites">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path
                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
            </svg>
          </button>
          <div class="journey-card-content">
            <h3 class="journey-card-title">Wild to Water</h3>
            <div class="journey-card-meta">
              <span><strong class="meta-tag">8 Days</strong> • Safari • Coast</span>
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

  <!-- Explore by Destination -->
  <section class="section section-white" id="destinations">
    <div class="container">
      <div class="section-header-flex">
        <div>
          <h2 class="section-title reveal-text">Explore by Destination</h2>
          <p class="section-subtitle reveal-text delay-100">One small island. A thousand worlds.</p>
        </div>
      </div>

      <div class="destinations-grid-4">
        <div class="destination-card reveal-card">
          <img src="{{ asset('images/Sigiriya_Rock_Fortress_rising_ab_20261002124349.webp') }}" alt="Sigiriya"
            class="destination-card-img" loading="lazy">
          <div class="destination-card-overlay">
            <h3 class="destination-card-title">Sigiriya</h3>
          </div>
        </div>
        <div class="destination-card reveal-card delay-100">
          <img src="{{ asset('images/Train_crossing_Nine_Arches_Bridge_20261002124420.webp') }}" alt="Ella"
            class="destination-card-img" loading="lazy">
          <div class="destination-card-overlay">
            <h3 class="destination-card-title">Ella</h3>
          </div>
        </div>
        <div class="destination-card reveal-card delay-200">
          <img src="{{ asset('images/Elephants_at_watering_hole_20261002124420.webp') }}" alt="Yala"
            class="destination-card-img" loading="lazy">
          <div class="destination-card-overlay">
            <h3 class="destination-card-title">Yala</h3>
          </div>
        </div>
        <div class="destination-card reveal-card delay-300">
          <img src="{{ asset('images/Tropical_beach_in_Mirissa_20261002124349.webp') }}" alt="Mirissa"
            class="destination-card-img" loading="lazy">
          <div class="destination-card-overlay">
            <h3 class="destination-card-title">Mirissa</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Story Section: Not just a trip. A deeper connection. -->
  <section class="section section-cream">
    <div class="container">
      <div class="split-story-grid">
        <div class="split-story-content">
          <h2 class="section-title reveal-text">
            Not just a trip.<br>
            <span style="color: var(--primary-gold); font-style: italic;">A deeper connection.</span>
          </h2>
          <p class="reveal-text delay-100"
            style="margin: 20px 0 32px; color: var(--text-muted); font-size: 1.05rem; line-height: 1.7;">
            Travel should leave you changed, not just entertained. We believe in immersive journeys that connect you with
            ancient traditions, pristine wildlife sanctuaries, and the warm smiles of our local island community.
          </p>
          <div class="reveal-text delay-200">
            <a href="{{ url('/about') }}" class="btn-primary">
              Our Story
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </a>
          </div>
        </div>
        <div class="split-story-img-wrap reveal-card">
          <img src="{{ asset('images/Elephant_and_train_in_hills_20261002124349.webp') }}"
            alt="Sri Lanka Scenic Journey with Train and Elephant" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- Why Travel with Us Section (Dark Forest Green) -->
  <section class="section section-dark">
    <div class="container">
      <div style="text-align: center; max-width: 600px; margin: 0 auto;">
        <h2 class="section-title reveal-text">Why Travel with Us?</h2>
      </div>

      <div class="why-travel-grid">
        <div class="why-travel-card reveal-card">
          <div class="why-travel-circle">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
              <path d="M12 2a8 8 0 0 0-8 8c0 5 8 12 8 12s8-7 8-12a8 8 0 0 0-8-8z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
          </div>
          <h3 class="why-travel-name">Authentic Local Experiences</h3>
        </div>

        <div class="why-travel-card reveal-card delay-100">
          <div class="why-travel-circle">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
              <line x1="16" y1="2" x2="16" y2="6" />
              <line x1="8" y1="2" x2="8" y2="6" />
              <line x1="3" y1="10" x2="21" y2="10" />
            </svg>
          </div>
          <h3 class="why-travel-name">Curated Journeys</h3>
        </div>

        <div class="why-travel-card reveal-card delay-200">
          <div class="why-travel-circle">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
              <path
                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
            </svg>
          </div>
          <h3 class="why-travel-name">Flexible &amp; Personalised</h3>
        </div>

        <div class="why-travel-card reveal-card delay-300">
          <div class="why-travel-circle">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
            </svg>
          </div>
          <h3 class="why-travel-name">Responsible Travel</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action Banner -->
  <section class="banner-full banner-full--right"
    style="background-image: url('{{ asset('images/Sri_Lanka_tropical_beach_sunset_20261002124349.webp') }}');">
    <div class="cta-destination-banner-overlay"></div>
    <div class="container banner-full-inner">
      <div class="cta-destination-content reveal-text">
        <h2 class="cta-destination-title">
          Let's turn<br>
          <span>someday into now</span>
        </h2>
        <p class="cta-destination-desc">
          Tell us a little about your travel plans and we'll create a personalised journey for you.
        </p>
        <button type="button" class="btn-primary btn-plan-trip">
          Plan My Trip
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </button>
      </div>
    </div>
  </section>
@endsection