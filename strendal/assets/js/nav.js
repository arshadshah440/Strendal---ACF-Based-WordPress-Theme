(function () {
  'use strict';

  /* ── NAV SCROLL: transparent → solid ── */
  var nav = document.getElementById('site-nav');
  if (nav && !nav.classList.contains('always-light')) {
    var onScroll = function () {
      nav.classList.toggle('scrolled', window.scrollY > 60);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  /* ── HAMBURGER TOGGLE ── */
  var hamburger  = document.querySelector('.nav-hamburger');
  var mobileMenu = document.querySelector('.nav-mobile-menu');

  if (!hamburger || !mobileMenu) return;

  function openMenu() {
    hamburger.classList.add('active');
    hamburger.setAttribute('aria-expanded', 'true');
    mobileMenu.classList.add('open');
    document.body.classList.add('nav-open');
  }

  function closeMenu() {
    hamburger.classList.remove('active');
    hamburger.setAttribute('aria-expanded', 'false');
    mobileMenu.classList.remove('open');
    document.body.classList.remove('nav-open');
  }

  hamburger.addEventListener('click', function () {
    mobileMenu.classList.contains('open') ? closeMenu() : openMenu();
  });

  /* Close when clicking the backdrop (not the panel) */
  mobileMenu.addEventListener('click', function (e) {
    if (e.target === mobileMenu) closeMenu();
  });

  /* Close on Escape */
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && mobileMenu.classList.contains('open')) closeMenu();
  });

  /* Close when a nav link is clicked (not a parent toggle) */
  mobileMenu.querySelectorAll('a').forEach(function (a) {
    a.addEventListener('click', function () {
      /* Only close if not a parent menu item being expanded */
      var li = a.parentElement;
      if (!li.classList.contains('menu-item-has-children')) closeMenu();
    });
  });

  /* ── MOBILE SUB-MENU ACCORDION ── */
  mobileMenu.querySelectorAll('.menu-item-has-children > a').forEach(function (a) {
    a.addEventListener('click', function (e) {
      e.preventDefault();
      var li = a.parentElement;
      var wasOpen = li.classList.contains('expanded');
      /* Collapse all siblings */
      li.parentElement.querySelectorAll('.menu-item-has-children').forEach(function (el) {
        el.classList.remove('expanded');
      });
      if (!wasOpen) li.classList.add('expanded');
    });
  });

})();
