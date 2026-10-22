<header class="site-header">
  <div class="container nav-container">
    <a href="{{ url('/') }}" class="brand-logo" aria-label="My Ceylon Walk Home">
      <div class="brand-logo-wrap">
        <img src="{{ asset('images/logo-emblem-gold.png') }}?v={{ filemtime(public_path('images/logo-emblem-gold.png')) }}" alt="My Ceylon Walk" class="brand-logo-img" width="68" height="68">
      </div>
      <div class="brand-logo-text">
        <span class="brand-title">My Ceylon Walk</span>
        <span class="brand-subtitle">Authentic Journeys in Sri Lanka</span>
      </div>
    </a>

    <nav aria-label="Main Navigation">
      <ul class="nav-links">
        <li><a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Destinations</a></li>
        <li><a href="{{ url('/tours') }}" class="nav-link {{ request()->is('tours*') ? 'active' : '' }}">Tours</a></li>
        <li><a href="{{ url('/stays') }}" class="nav-link {{ request()->is('stays*') ? 'active' : '' }}">Stays</a></li>
        <li><a href="{{ url('/experiences') }}" class="nav-link {{ request()->is('experiences*') ? 'active' : '' }}">Experiences</a></li>
        <li><a href="{{ url('/about') }}" class="nav-link {{ request()->is('about*') ? 'active' : '' }}">About</a></li>
      </ul>
    </nav>

    <div class="header-actions">
      <button type="button" class="btn-header-plan btn-plan-trip">Plan My Trip</button>
    </div>

    <!-- Mobile Hamburger Toggle -->
    <div class="mobile-nav-toggle" aria-label="Toggle Menu" role="button" tabindex="0">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</header>

<!-- Mobile Navigation Drawer -->
<div class="mobile-nav-drawer" id="mobileDrawer">
  <a href="{{ url('/') }}" class="brand-logo" style="margin-bottom: 20px;">
    <div class="brand-logo-wrap">
      <img src="{{ asset('images/logo-emblem-gold.png') }}?v={{ filemtime(public_path('images/logo-emblem-gold.png')) }}" alt="My Ceylon Walk" class="brand-logo-img" width="68" height="68">
    </div>
    <div class="brand-logo-text">
      <span class="brand-title">My Ceylon Walk</span>
    </div>
  </a>
  <a href="{{ url('/') }}" class="nav-link">Destinations</a>
  <a href="{{ url('/tours') }}" class="nav-link">Tours</a>
  <a href="{{ url('/stays') }}" class="nav-link">Stays</a>
  <a href="{{ url('/experiences') }}" class="nav-link">Experiences</a>
  <a href="{{ url('/about') }}" class="nav-link">About Us</a>
  <div style="margin-top: 24px;">
    <button type="button" class="btn-primary btn-plan-trip" style="width: 100%; justify-content: center;">Plan My Trip</button>
  </div>
</div>
<div class="nav-backdrop" id="navBackdrop"></div>
