<!-- Mobile Drawer Menu Component -->
<div class="mobile-drawer-overlay" id="mobile-drawer-overlay"></div>

<aside class="mobile-drawer" id="mobile-drawer" aria-label="Menú Móvil">
  <div class="mobile-drawer-header">
    <div class="brand-text-block">
      <span class="brand-name">Gásfiter <span>Certificado</span></span>
      <span class="brand-sub">SEC Autorizado 24/7</span>
    </div>
    <button class="mobile-drawer-close" aria-label="Cerrar menú">&times;</button>
  </div>

  <div class="mobile-drawer-body">
    <ul class="mobile-nav-links">
      <li>
        <a href="index.php" class="mobile-nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">
          <span>🏠 Inicio</span>
        </a>
      </li>
      <li>
        <a href="fuga-de-gas.php" class="mobile-nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'fuga-de-gas.php') ? 'active' : ''; ?>">
          <span>🔥 Fugas de Gas 24/7</span>
          <span class="nav-badge-pill">Urgente</span>
        </a>
      </li>
      <li>
        <a href="prodoral.php" class="mobile-nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'prodoral.php') ? 'active' : ''; ?>">
          <span>🧪 Sellado Prodoral (Sin Picar)</span>
        </a>
      </li>
      <li>
        <a href="gasfiter-sec.php" class="mobile-nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'gasfiter-sec.php') ? 'active' : ''; ?>">
          <span>🛡️ Sello Verde SEC / Certificación</span>
        </a>
      </li>
      <li>
        <a href="calefont.php" class="mobile-nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'calefont.php') ? 'active' : ''; ?>">
          <span>⚡ Calefont y Calderas</span>
        </a>
      </li>
      <li>
        <a href="destape-alcantarillado.php" class="mobile-nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'destape-alcantarillado.php') ? 'active' : ''; ?>">
          <span>🚰 Destape de Cañerías</span>
        </a>
      </li>
      <li>
        <a href="servicios.php" class="mobile-nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'servicios.php') ? 'active' : ''; ?>">
          <span>📋 Todos los Servicios</span>
        </a>
      </li>
      <li>
        <a href="cobertura.php" class="mobile-nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'cobertura.php') ? 'active' : ''; ?>">
          <span>📍 Cobertura Comunas RM</span>
        </a>
      </li>
      <li>
        <a href="cotizar.php" class="mobile-nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'cotizar.php') ? 'active' : ''; ?>">
          <span>🧮 Cotizador Online</span>
        </a>
      </li>
      <li>
        <a href="contacto.php" class="mobile-nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'contacto.php') ? 'active' : ''; ?>">
          <span>📞 Contacto Directo</span>
        </a>
      </li>
    </ul>
  </div>

  <div class="mobile-drawer-ctas">
    <a href="tel:932237072" class="btn btn-danger" style="width: 100%;">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
      Llamar Central 9 3223 7072
    </a>
    <a href="https://wa.me/56932237072?text=Hola%20Central%20Gásfiter%20Certificado,%20necesito%20atención%20urgente%20o%20cotización." target="_blank" class="btn btn-whatsapp" style="width: 100%;">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.046.419-.098.824z"/></svg>
      Escribir al WhatsApp
    </a>
  </div>
</aside>
