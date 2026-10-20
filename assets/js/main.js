/**
 * Editorial Studio — Main JavaScript
 *
 * Handles: mobile menu toggle, contact form submission, scroll animations
 */

(function () {
  'use strict';

  /* =============================================
     Mobile Menu Toggle
     ============================================= */

  const toggle = document.getElementById('mobile-toggle');
  const menu = document.getElementById('mobile-menu');

  if (toggle && menu) {
    toggle.addEventListener('click', function () {
      const isOpen = menu.classList.toggle('open');
      toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });

    // Close menu when clicking a link
    menu.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        menu.classList.remove('open');
        toggle.setAttribute('aria-expanded', 'false');
      });
    });
  }

  /* =============================================
     Contact Form (AJAX)
     ============================================= */

  const form = document.getElementById('contact-form');
  const successEl = document.getElementById('contact-success');

  if (form && successEl) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();

      // Clear previous errors
      document.querySelectorAll('.form-error').forEach(function (el) {
        el.textContent = '';
      });

      var name = document.getElementById('contact-name').value.trim();
      var email = document.getElementById('contact-email').value.trim();
      var company = document.getElementById('contact-company').value.trim();
      var message = document.getElementById('contact-message').value.trim();
      var valid = true;

      if (!name) {
        document.getElementById('error-name').textContent = 'Name is required.';
        valid = false;
      }
      if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        document.getElementById('error-email').textContent = 'A valid email is required.';
        valid = false;
      }
      if (!message) {
        document.getElementById('error-message').textContent = 'Message is required.';
        valid = false;
      }

      if (!valid) return;

      var submitBtn = document.getElementById('contact-submit');
      submitBtn.disabled = true;
      submitBtn.textContent = 'Sending...';

      // Use AJAX if WordPress localized data is available
      if (typeof bh_ajax !== 'undefined') {
        var data = new FormData();
        data.append('action', 'editorialstudio_contact');
        data.append('nonce', bh_ajax.nonce);
        data.append('name', name);
        data.append('email', email);
        data.append('company', company);
        data.append('message', message);

        fetch(bh_ajax.ajax_url, {
          method: 'POST',
          body: data,
          credentials: 'same-origin',
        })
          .then(function (res) { return res.json(); })
          .then(function (response) {
            if (response.success) {
              form.style.display = 'none';
              document.getElementById('success-name').textContent = name;
              successEl.style.display = 'block';
            } else {
              submitBtn.disabled = false;
              submitBtn.textContent = 'Send Message';
              alert(response.data && response.data.message ? response.data.message : 'Something went wrong. Please try again.');
            }
          })
          .catch(function () {
            submitBtn.disabled = false;
            submitBtn.textContent = 'Send Message';
            alert('Network error. Please try again.');
          });
      } else {
        // Fallback: show success directly (for static preview)
        form.style.display = 'none';
        document.getElementById('success-name').textContent = name;
        successEl.style.display = 'block';
      }
    });
  }

  /* =============================================
     Scroll-triggered animations (IntersectionObserver)
     ============================================= */

  var animateEls = document.querySelectorAll('.animate-in');
  if (animateEls.length > 0 && 'IntersectionObserver' in window) {
    // Initially hide animated elements
    animateEls.forEach(function (el) {
      el.style.opacity = '0';
      el.style.transform = 'translateY(20px)';
    });

    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.style.opacity = '';
            entry.target.style.transform = '';
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.1, rootMargin: '0px 0px -40px 0px' }
    );

    animateEls.forEach(function (el) {
      observer.observe(el);
    });
  }

})();
