<footer class="site-footer">
  <div class="container">
    <div class="footer-top-grid">
      <!-- Brand Column -->
      <div class="footer-brand">
        <a href="{{ url('/') }}" class="brand-logo">
          <div class="brand-logo-wrap">
            <img src="{{ asset('images/logo.png') }}" alt="My Ceylon Walk" class="brand-logo-img">
          </div>
          <div class="brand-logo-text">
            <span class="brand-title">My Ceylon Walk</span>
            <span class="brand-subtitle">Tour Booking & Accommodation</span>
          </div>
        </a>
        <p>Curating meaningful, sustainable and authentic journeys across Sri Lanka's breathtaking landscapes, ancient kingdoms and vibrant communities.</p>
        <div class="footer-social-row">
          <a href="#" class="footer-social-icon" aria-label="Facebook">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
              <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
            </svg>
          </a>
          <a href="#" class="footer-social-icon" aria-label="Twitter">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
              <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/>
            </svg>
          </a>
          <a href="#" class="footer-social-icon" aria-label="Instagram">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
              <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
              <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
            </svg>
          </a>
        </div>
      </div>

      <!-- Column 1: Destinations -->
      <div class="footer-col">
        <h4 class="footer-col-title">Destinations</h4>
        <ul class="footer-links">
          <li><a href="{{ url('/') }}#destinations" class="footer-link">Sigiriya</a></li>
          <li><a href="{{ url('/') }}#destinations" class="footer-link">Ella</a></li>
          <li><a href="{{ url('/') }}#destinations" class="footer-link">Yala</a></li>
          <li><a href="{{ url('/') }}#destinations" class="footer-link">Mirissa</a></li>
        </ul>
      </div>

      <!-- Column 2: Tours -->
      <div class="footer-col">
        <h4 class="footer-col-title">Tours</h4>
        <ul class="footer-links">
          <li><a href="{{ url('/tours') }}" class="footer-link">Signature</a></li>
          <li><a href="{{ url('/tours') }}" class="footer-link">Highlands</a></li>
          <li><a href="{{ url('/tours') }}" class="footer-link">Wildlife</a></li>
          <li><a href="{{ url('/tours') }}" class="footer-link">Coast</a></li>
        </ul>
      </div>

      <!-- Column 3: Stays -->
      <div class="footer-col">
        <h4 class="footer-col-title">Stays</h4>
        <ul class="footer-links">
          <li><a href="{{ url('/stays') }}" class="footer-link">Hill Country</a></li>
          <li><a href="{{ url('/stays') }}" class="footer-link">Beach</a></li>
          <li><a href="{{ url('/stays') }}" class="footer-link">Boutique</a></li>
          <li><a href="{{ url('/stays') }}" class="footer-link">Eco Stays</a></li>
        </ul>
      </div>

      <!-- Column 4: Experiences -->
      <div class="footer-col">
        <h4 class="footer-col-title">Experiences</h4>
        <ul class="footer-links">
          <li><a href="{{ url('/experiences') }}" class="footer-link">Culture</a></li>
          <li><a href="{{ url('/experiences') }}" class="footer-link">Nature</a></li>
          <li><a href="{{ url('/experiences') }}" class="footer-link">Food</a></li>
          <li><a href="{{ url('/experiences') }}" class="footer-link">Wellness</a></li>
        </ul>
      </div>
    </div>

    <!-- Bottom Copyright -->
    <div class="footer-bottom">
      <p>© 2026 My Ceylon Walk. All rights reserved.</p>
      <div class="footer-legal-links">
        <a href="#">Privacy</a>
        <a href="#">Terms</a>
        <a href="#">Sitemap</a>
      </div>
    </div>
  </div>
</footer>
