@extends('layouts.app')

@section('title', 'About Us | My Ceylon Walk')
@section('meta_description', 'Meet the team behind My Ceylon Walk — passionate local storytellers and travel specialists dedicated to sustainable, authentic journeys.')

@section('content')
<!-- About Hero Section -->
<section class="hero-section" style="border-radius:0;">
  <img
    src="{{ asset('images/Travellers_walking_through_tea_p_20261002124415.webp') }}"
    alt="Travellers walking through lush Sri Lanka tea plantation"
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
        Our story<br>
        <span class="highlight-gold">is rooted in Sri Lanka.</span>
      </h1>
      <p class="hero-subheading reveal-text delay-200">
        My Ceylon Walk was born from a love for this island, and a desire to share its authentic beauty with the world.
      </p>
    </div>
  </div>
</section>

<!-- A Local Team Section -->
<section class="section section-cream">
  <div class="container">
    <div class="split-story-grid">
      <div class="split-story-content">
        <h2 class="section-title reveal-text">
          A local team.<br>
          <span style="color: var(--primary-gold); font-style: italic;">A deeper purpose.</span>
        </h2>
        <p class="reveal-text delay-100" style="margin: 20px 0 28px; color: var(--text-muted); font-size: 1.05rem; line-height: 1.7;">
          We are a team of local travel experts, nature lovers and storytellers, dedicated to creating meaningful travel experiences that support local communities and protect the natural beauty of Sri Lanka.
        </p>
        <p class="reveal-text delay-200" style="color: var(--text-muted); font-size: 1rem; line-height: 1.7;">
          Every route we design is walked by us first, every boutique stay is personally vetted, and every guide is part of our extended family on this paradise island.
        </p>
      </div>
      <div class="split-story-img-wrap reveal-card">
        <img src="{{ asset('images/Team_posing_in_tropical_garden_20261002124402.webp') }}" alt="My Ceylon Walk Local Team of Guides" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- 4 Value Pillars -->
<div class="features-strip-light" style="background-color: var(--bg-cream); padding: 10px 0 60px;">
  <div class="container">
    <div class="features-strip-grid">
      <div class="features-strip-item reveal-text">
        <div class="features-strip-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <circle cx="12" cy="12" r="10"/>
            <polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/>
          </svg>
        </div>
        <div class="features-strip-title">Local Knowledge &amp; Expertise</div>
      </div>

      <div class="features-strip-item reveal-text delay-100">
        <div class="features-strip-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
          </svg>
        </div>
        <div class="features-strip-title">Responsible Travel</div>
      </div>

      <div class="features-strip-item reveal-text delay-200">
        <div class="features-strip-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
            <circle cx="12" cy="10" r="3"/>
          </svg>
        </div>
        <div class="features-strip-title">Authentic Experiences</div>
      </div>

      <div class="features-strip-item reveal-text delay-300">
        <div class="features-strip-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
          </svg>
        </div>
        <div class="features-strip-title">Support Local Communities</div>
      </div>
    </div>
  </div>
</div>

<!-- How We Plan Your Journey Stepper -->
<section class="section section-cream" style="padding-top: 30px;">
  <div class="container">
    <div style="text-align: center; max-width: 600px; margin: 0 auto 50px;">
      <h2 class="section-title reveal-text">How We Plan Your Journey</h2>
    </div>

    <div class="stepper-grid">
      <div class="step-card reveal-card">
        <div class="step-circle">1</div>
        <h3 class="step-title">Understand Your Interests</h3>
      </div>

      <div class="step-card reveal-card delay-100">
        <div class="step-circle">2</div>
        <h3 class="step-title">Design Your Itinerary</h3>
      </div>

      <div class="step-card reveal-card delay-200">
        <div class="step-circle">3</div>
        <h3 class="step-title">Personalise Every Detail</h3>
      </div>

      <div class="step-card reveal-card delay-300">
        <div class="step-circle">4</div>
        <h3 class="step-title">Support You Throughout</h3>
      </div>
    </div>
  </div>
</section>

<!-- Impact Banner: Travel that gives back -->
<section class="banner-full" style="background-image: url('{{ asset('images/Train_crossing_Nine_Arches_Bridge_20261002124349_2.webp') }}');">
  <div class="promo-banner-overlay"></div>
  <div class="container banner-full-inner">
    <div class="promo-banner-content reveal-text">
      <div class="hero-eyebrow-line"></div>
      <h3 class="promo-banner-title">
        Travel that gives back.
      </h3>
      <p class="promo-banner-desc">
        We work with local communities, support sustainable tourism and help preserve Sri Lanka's natural and cultural heritage for future generations.
      </p>
      <button type="button" class="btn-primary btn-plan-trip">
        Our Commitment
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <line x1="5" y1="12" x2="19" y2="12"></line>
          <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
      </button>
    </div>
  </div>
</section>

<!-- Traveller Stories Section -->
<section class="section section-cream">
  <div class="container">
    <div class="section-header-flex">
      <div>
        <h2 class="section-title reveal-text">Traveller Stories</h2>
        <p class="section-subtitle reveal-text delay-100">Real experiences. Real people.</p>
      </div>
      <a href="{{ url('/about') }}" class="link-view-all reveal-text delay-200">
        View all stories
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <line x1="5" y1="12" x2="19" y2="12"></line>
          <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
      </a>
    </div>

    <div class="testimonials-grid">
      <!-- Testimonial 1 -->
      <article class="testimonial-card reveal-card">
        <p class="testimonial-quote">
          &ldquo;An incredible journey! Everything was perfectly organised and the team was so helpful throughout our stay in the highlands.&rdquo;
        </p>
        <div class="testimonial-author">
          <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=120&q=80" alt="Sarah T." class="testimonial-avatar">
          <div>
            <div class="testimonial-author-name">Sarah T.</div>
            <div class="testimonial-author-location">Australia</div>
          </div>
        </div>
      </article>

      <!-- Testimonial 2 -->
      <article class="testimonial-card reveal-card delay-100">
        <p class="testimonial-quote">
          &ldquo;We experienced the real Sri Lanka &mdash; beautiful places, warm people and unforgettable moments. Truly exceeded all our expectations.&rdquo;
        </p>
        <div class="testimonial-author">
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=120&q=80" alt="James K." class="testimonial-avatar">
          <div>
            <div class="testimonial-author-name">James K.</div>
            <div class="testimonial-author-location">United Kingdom</div>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>
@endsection
