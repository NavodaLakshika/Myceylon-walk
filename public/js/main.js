/**
 * My Ceylon Walk - Custom Vanilla JavaScript
 * Handles Scroll Text Animations, Sticky Navigation, Modals, Card Filters, and Interactivity
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Sticky Header on Scroll
  const header = document.querySelector('.site-header');
  const handleScroll = () => {
    if (!header) return;
    if (window.scrollY > 40) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  };
  window.addEventListener('scroll', handleScroll, { passive: true });
  handleScroll();

  // 2. Mobile Navigation Toggle
  const navToggle = document.querySelector('.mobile-nav-toggle');
  const navDrawer = document.querySelector('.mobile-nav-drawer');
  const navBackdrop = document.querySelector('.nav-backdrop');

  const toggleMobileNav = () => {
    if (!navDrawer) return;
    navDrawer.classList.toggle('open');
    if (navBackdrop) navBackdrop.classList.toggle('active');
    document.body.style.overflow = navDrawer.classList.contains('open') ? 'hidden' : '';
  };

  if (navToggle) {
    navToggle.addEventListener('click', toggleMobileNav);
  }
  if (navBackdrop) {
    navBackdrop.addEventListener('click', toggleMobileNav);
  }

  // 3. Scroll-Triggered Text & Card Animations (Intersection Observer)
  const revealElements = document.querySelectorAll('.reveal-text, .reveal-card, .reveal-lines');
  
  if ('IntersectionObserver' in window) {
    const observerOptions = {
      root: null,
      rootMargin: '0px 0px -60px 0px',
      threshold: 0.12
    };

    const revealObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          // Once animated, keep revealed or unobserve for smooth performance
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    revealElements.forEach(el => revealObserver.observe(el));
  } else {
    // Fallback for older browsers
    revealElements.forEach(el => el.classList.add('revealed'));
  }

  // 4. Interactive Filter Pills (Filter Cards)
  const filterPillContainers = document.querySelectorAll('.filter-pills-bar');
  filterPillContainers.forEach(container => {
    const pills = container.querySelectorAll('.btn-pill');
    pills.forEach(pill => {
      pill.addEventListener('click', (e) => {
        e.preventDefault();
        pills.forEach(p => p.classList.remove('active'));
        pill.classList.add('active');

        const category = pill.getAttribute('data-filter') || 'all';
        const targetGridId = container.getAttribute('data-target-grid');
        if (targetGridId) {
          const targetGrid = document.getElementById(targetGridId);
          if (targetGrid) {
            const items = targetGrid.querySelectorAll('[data-category]');
            items.forEach(item => {
              const itemCats = item.getAttribute('data-category').split(' ');
              if (category === 'all' || itemCats.includes(category)) {
                item.style.display = '';
                setTimeout(() => item.classList.add('revealed'), 50);
              } else {
                item.style.display = 'none';
              }
            });
          }
        }
      });
    });
  });

  // 5. Interactive Favorite Heart Buttons
  const favoriteButtons = document.querySelectorAll('.journey-card-badge-top, .btn-fav');
  favoriteButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.stopPropagation();
      e.preventDefault();
      btn.classList.toggle('active');
      const svg = btn.querySelector('svg');
      if (svg) {
        if (btn.classList.contains('active')) {
          svg.setAttribute('fill', 'currentColor');
        } else {
          svg.setAttribute('fill', 'none');
        }
      }
    });
  });

  // 6. Plan My Trip & Custom Tour Modal Popup
  const planTripBtns = document.querySelectorAll('.btn-plan-trip, .btn-header-plan, .btn-request-tour');
  const modalOverlay = document.getElementById('planTripModal');
  const modalCloseBtn = document.getElementById('modalCloseBtn');
  const modalForm = document.getElementById('planTripForm');

  const openModal = () => {
    if (modalOverlay) {
      modalOverlay.classList.add('active');
      document.body.style.overflow = 'hidden';
    }
  };

  const closeModal = () => {
    if (modalOverlay) {
      modalOverlay.classList.remove('active');
      document.body.style.overflow = '';
    }
  };

  planTripBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      openModal();
    });
  });

  if (modalCloseBtn) {
    modalCloseBtn.addEventListener('click', closeModal);
  }

  if (modalOverlay) {
    modalOverlay.addEventListener('click', (e) => {
      if (e.target === modalOverlay) closeModal();
    });
  }

  if (modalForm) {
    modalForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const submitBtn = modalForm.querySelector('button[type="submit"]');
      const origText = submitBtn.innerHTML;
      submitBtn.innerHTML = 'Sending Itinerary Request...';
      submitBtn.disabled = true;

      setTimeout(() => {
        alert('Thank you! Your customized Sri Lanka journey request has been received. Our local travel specialist will contact you shortly.');
        modalForm.reset();
        submitBtn.innerHTML = origText;
        submitBtn.disabled = false;
        closeModal();
      }, 900);
    });
  }

  // // 7. Video Modal for "Watch Video" Button
  // const videoBtns = document.querySelectorAll('.btn-video');
  // videoBtns.forEach(btn => {
  //   btn.addEventListener('click', (e) => {
  //     e.preventDefault();
  //     alert('Playing: "Sri Lanka - A Journey Through the Wonder of Asia" (Video Showcase).');
  //   });
  // });

  // 8. Dynamic Active Navigation Highlighting
  const currentPath = window.location.pathname;
  const navLinks = document.querySelectorAll('.nav-link');
  navLinks.forEach(link => {
    const href = link.getAttribute('href');
    if (href && (currentPath.endsWith(href) || (href === '/' && currentPath.endsWith('/')))) {
      link.classList.add('active');
    }
  });
});
