  <!-- Main Footer -->
  <footer class="footer-main" id="footer-main">
    <div class="container">
      <div class="footer-grid">
        <!-- Col 1: Brand & SEC credentials -->
        <div class="footer-brand">
          <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
            <img src="assets/images/logo.webp" alt="Central Gásfiter Certificado" width="48" height="48" style="border-radius: 50%;">
            <span style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; color: #ffffff;">Gásfiter Certificado</span>
          </div>
          <p>Más de 40 años prestando servicios en distintas especialidades de la gasfitería. Detección electrónica de fugas de gas, prueba de hermeticidad manométrica, gas trazador, detección de fugas de agua, sellado Prodoral R6-1 sin romper muros y certificación Sello Verde SEC en toda la Región Metropolitana.</p>
          <div style="display: flex; align-items: center; gap: 0.5rem; color: #34d399; font-weight: 700; font-size: 0.85rem;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
            Instaladores Autorizados Clase 1, 2 y 3 SEC
          </div>
        </div>

        <!-- Col 2: Servicios SEO -->
        <div class="footer-col">
          <h3>Servicios SEC</h3>
          <ul class="footer-links">
            <li><a href="fuga-de-gas">Detección de Fugas de Gas 24/7</a></li>
            <li><a href="prodoral">Sellado con Prodoral R6-1 (Sin Picar)</a></li>
            <li><a href="gasfiter-sec">Certificación Sello Verde SEC</a></li>
            <li><a href="calefont">Reparación y Mantención de Calefont</a></li>
            <li><a href="destape-alcantarillado">Destape de Cañerías y Alcantarillado</a></li>
            <li><a href="servicios">Catálogo Completo de Servicios</a></li>
          </ul>
        </div>

        <!-- Col 3: Cobertura Comunas -->
        <div class="footer-col">
          <h3>Cobertura Santiago</h3>
          <ul class="footer-links">
            <li><a href="cobertura">Gásfiter Las Condes</a></li>
            <li><a href="cobertura">Gásfiter Providencia</a></li>
            <li><a href="cobertura">Gásfiter Vitacura</a></li>
            <li><a href="cobertura">Gásfiter Ñuñoa</a></li>
            <li><a href="cobertura">Gásfiter Santiago Centro</a></li>
            <li><a href="cobertura">Gásfiter Lo Barnechea</a></li>
            <li><a href="cobertura">Gásfiter La Reina y Peñalolén</a></li>
            <li><a href="cobertura">Ver todas las 32 comunas &raquo;</a></li>
          </ul>
        </div>

        <!-- Col 4: Contacto Inmediato -->
        <div class="footer-col">
          <h3>Central de Atención</h3>
          <ul class="footer-contact-items">
            <li class="footer-contact-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
              <div>
                <strong>Teléfono Directo:</strong><br>
                <a href="tel:932237072" style="color: #ffffff; font-weight: 700; font-size: 1.1rem;">9 3223 7072</a>
              </div>
            </li>
            <li class="footer-contact-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
              <div>
                <strong>Horario de Urgencias:</strong><br>
                Lunes a Domingo las 24 Horas
              </div>
            </li>
            <li class="footer-contact-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
              <div>
                <strong>Base Central:</strong><br>
                Santiago, Región Metropolitana, Chile
              </div>
            </li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom">
        <div>
          © <?php echo date('Y'); ?> <strong>Gásfiter Certificado</strong> (gasfiter-certificado.cl). Todos los derechos reservados.
        </div>
        <div style="display: flex; gap: 1.5rem;">
          <a href="cotizar" style="color: #cbd5e1;">Cotizador Express</a>
          <a href="cobertura" style="color: #cbd5e1;">Mapa Cobertura</a>
          <a href="contacto" style="color: #cbd5e1;">Contacto SEC</a>
        </div>
      </div>
    </div>
  </footer>

  <?php include_once __DIR__ . '/floating-buttons.php'; ?>
  <?php include_once __DIR__ . '/toast-activity.php'; ?>

  <!-- Scripts (Deferred & Minified for Maximum Performance) -->
  <script src="assets/js/main.min.js" defer></script>
  <?php if (in_array(basename($_SERVER['PHP_SELF']), ['index.php', 'cotizar.php'])): ?>
  <script src="assets/js/calculator.min.js" defer></script>
  <?php endif; ?>
</body>
</html>
