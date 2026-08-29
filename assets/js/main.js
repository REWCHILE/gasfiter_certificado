/**
 * Gásfiter Certificado - Main Interactive Scripts
 * Handles Header Scroll, Mobile Drawer, FAQ Accordions, Comunas Filter, Live Toasts & Contact AJAX
 */

document.addEventListener('DOMContentLoaded', () => {
  initStickyHeader();
  initMobileDrawer();

  // Defer non-critical bindings until browser idle
  const idleInit = window.requestIdleCallback || ((cb) => setTimeout(cb, 100));
  idleInit(() => {
    initFaqAccordion();
    initComunasFilter();
    initLiveSocialToasts();
    initContactForms();
  });
});

/* Sticky Header on Scroll (Optimized with requestAnimationFrame & passive listener) */
function initStickyHeader() {
  const header = document.querySelector('.header-main');
  if (!header) return;

  let ticking = false;
  window.addEventListener('scroll', () => {
    if (!ticking) {
      window.requestAnimationFrame(() => {
        if (window.scrollY > 40) {
          header.classList.add('header-scrolled');
        } else {
          header.classList.remove('header-scrolled');
        }
        ticking = false;
      });
      ticking = true;
    }
  }, { passive: true });
}

/* Mobile Drawer Menu */
function initMobileDrawer() {
  const hamburger = document.querySelector('.btn-hamburger');
  const drawer = document.querySelector('.mobile-drawer');
  const overlay = document.querySelector('.mobile-drawer-overlay');
  const closeBtn = document.querySelector('.mobile-drawer-close');

  if (!hamburger || !drawer || !overlay) return;

  function openDrawer() {
    hamburger.classList.add('active');
    drawer.classList.add('active');
    overlay.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function closeDrawer() {
    hamburger.classList.remove('active');
    drawer.classList.remove('active');
    overlay.classList.remove('active');
    document.body.style.overflow = '';
  }

  hamburger.addEventListener('click', () => {
    if (drawer.classList.contains('active')) {
      closeDrawer();
    } else {
      openDrawer();
    }
  });

  if (closeBtn) closeBtn.addEventListener('click', closeDrawer);
  overlay.addEventListener('click', closeDrawer);

  // Close on nav link click
  const navLinks = drawer.querySelectorAll('a');
  navLinks.forEach(link => {
    link.addEventListener('click', closeDrawer);
  });
}

/* FAQ Accordion */
function initFaqAccordion() {
  const faqItems = document.querySelectorAll('.faq-item');
  if (!faqItems.length) return;

  faqItems.forEach(item => {
    const questionBtn = item.querySelector('.faq-question');
    if (!questionBtn) return;

    questionBtn.addEventListener('click', () => {
      const isActive = item.classList.contains('active');

      // Close all other accordions
      faqItems.forEach(otherItem => {
        if (otherItem !== item) {
          otherItem.classList.remove('active');
        }
      });

      // Toggle current
      if (isActive) {
        item.classList.remove('active');
      } else {
        item.classList.add('active');
      }
    });
  });
}

/* Comunas Search / Filter */
function initComunasFilter() {
  const input = document.querySelector('.comunas-search-input');
  const pills = document.querySelectorAll('.comuna-pill');
  if (!input || !pills.length) return;

  input.addEventListener('input', (e) => {
    const term = e.target.value.toLowerCase().trim();

    pills.forEach(pill => {
      const text = pill.textContent.toLowerCase();
      if (text.includes(term)) {
        pill.style.display = 'inline-flex';
      } else {
        pill.style.display = 'none';
      }
    });
  });
}

/* Social Proof Live Activity Toasts (Deferred & Non-blocking) */
function initLiveSocialToasts() {
  const toastContainer = document.querySelector('.social-toast-container');
  if (!toastContainer) return;

  const activities = [
    { text: 'Juan solicitó revisión de <strong>Fuga de Gas</strong> en Las Condes', time: 'Hace 3 min' },
    { text: 'María cotizó <strong>Reparación de Calefont</strong> en Ñuñoa', time: 'Hace 6 min' },
    { text: 'Comunidad Edificio solicitó <strong>Certificación Sello Verde SEC</strong> en Santiago', time: 'Hace 11 min' },
    { text: 'Rodrigo agendó <strong>Sellado Prodoral sin picar</strong> en Vitacura', time: 'Hace 15 min' },
    { text: 'Ignacio solicitó <strong>Destape de Urgencia 24/7</strong> en Providencia', time: 'Hace 19 min' },
    { text: 'Carmen solicitó <strong>Gásfiter SEC de Emergencia</strong> en La Florida', time: 'Hace 23 min' }
  ];

  let currentIndex = 0;

  function showNextToast() {
    const activity = activities[currentIndex];
    const toast = document.createElement('div');
    toast.className = 'social-toast';
    toast.innerHTML = `
      <div class="toast-icon">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
      </div>
      <div class="toast-content">
        <p>${activity.text}</p>
        <span class="toast-time">${activity.time}</span>
      </div>
    `;

    toastContainer.innerHTML = '';
    toastContainer.appendChild(toast);

    // Trigger animation via double RAF
    window.requestAnimationFrame(() => {
      window.requestAnimationFrame(() => {
        toast.classList.add('show');
      });
    });

    // Hide after 5.5s
    setTimeout(() => {
      toast.classList.remove('show');
      setTimeout(() => {
        toast.remove();
      }, 500);
    }, 5500);

    currentIndex = (currentIndex + 1) % activities.length;
  }

  // Defer initial toast to 6s (after initial load and first user interaction)
  setTimeout(() => {
    showNextToast();
    setInterval(showNextToast, 14000);
  }, 6000);
}

/* AJAX Contact Forms with Instant WhatsApp option */
function initContactForms() {
  const forms = document.querySelectorAll('.ajax-contact-form');
  forms.forEach(form => {
    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      const submitBtn = form.querySelector('button[type="submit"]');
      const originalText = submitBtn ? submitBtn.innerHTML : 'Enviar';

      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = 'Enviando solicitud...';
      }

      const formData = new FormData(form);

      try {
        const response = await fetch('api/process-contact.php', {
          method: 'POST',
          body: formData
        });

        const data = await response.json();

        if (data.success) {
          const name = formData.get('nombre') || '';
          const phone = formData.get('telefono') || '';
          const comuna = formData.get('comuna') || 'Santiago';
          const service = formData.get('servicio') || 'Gasfitería SEC';
          const inmueble = formData.get('inmueble') || 'Inmueble';
          const detail = formData.get('mensaje') || '';

          const waText = `¡Hola Central Gásfiter Certificado! 👋\nAcabo de solicitar atención desde la web gasfiter-certificado.cl:\n\n👤 *Cliente:* ${name}\n📞 *Teléfono:* ${phone}\n📍 *Comuna:* ${comuna}\n🛠️ *Servicio:* ${service}\n🏠 *Inmueble:* ${inmueble}${detail ? `\n📝 *Detalle:* ${detail}` : ''}\n\n¿Tienen disponibilidad de un técnico SEC en mi sector?`;
          const waUrl = `https://wa.me/56932237072?text=${encodeURIComponent(waText)}`;

          // Success Feedback with Auto-Redirect countdown
          form.innerHTML = `
            <div style="text-align: center; padding: 2rem 1rem;">
              <div style="width: 58px; height: 58px; background: #dcfce7; color: #16a34a; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-size: 2rem; margin-bottom: 1rem; box-shadow: 0 4px 12px rgba(22, 163, 74, 0.2);">✓</div>
              <h3 style="font-family: var(--font-heading); color: var(--primary-navy); margin-bottom: 0.5rem; font-size: 1.35rem; font-weight: 800;">¡Solicitud Recibida con Éxito!</h3>
              <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.25rem; line-height: 1.5;">Hemos registrado tus datos y enviado la alerta a nuestra central técnica.</p>
              <div style="background: #f0fdf4; border: 1.5px dashed #86efac; padding: 1rem; border-radius: 12px; margin-bottom: 1.5rem;">
                <p style="font-size: 0.85rem; color: #166534; font-weight: 700; margin-bottom: 0.35rem;">⚡ Conexión Inmediata por WhatsApp:</p>
                <p style="font-size: 0.8rem; color: #15803d; margin: 0;">Abriendo chat con el técnico de turno en <span id="wa-countdown" style="font-weight: 800; font-size: 1rem;">2</span>s...</p>
              </div>
              <a href="${waUrl}" id="manual-wa-btn" class="btn btn-whatsapp" target="_blank" style="width: 100%; font-size: 1rem; padding: 0.9rem;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" style="margin-right: 0.4rem;"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.046.419-.098.824z"/></svg>
                Abrir WhatsApp Ahora
              </a>
            </div>
          `;

          let timeLeft = 2;
          const countdownEl = document.getElementById('wa-countdown');
          const timer = setInterval(() => {
            timeLeft--;
            if (countdownEl) countdownEl.textContent = timeLeft;
            if (timeLeft <= 0) {
              clearInterval(timer);
              window.open(waUrl, '_blank');
            }
          }, 1000);
        } else {
          alert(data.message || 'Ocurrió un error al enviar el formulario. Por favor llama directo al 9 3223 7072');
          if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalText;
          }
        }
      } catch (err) {
        console.error(err);
        // Direct Fallback to WhatsApp
        const name = formData.get('nombre') || '';
        const phone = formData.get('telefono') || '';
        const comuna = formData.get('comuna') || '';
        const service = formData.get('servicio') || '';
        const msg = `¡Hola Central Gásfiter Certificado! 👋\nSolicito atención desde la web:\n- Nombre: ${name}\n- Teléfono: ${phone}\n- Comuna: ${comuna}\n- Servicio: ${service}`;
        window.open(`https://wa.me/56932237072?text=${encodeURIComponent(msg)}`, '_blank');
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalText;
        }
      }
    });
  });
}
