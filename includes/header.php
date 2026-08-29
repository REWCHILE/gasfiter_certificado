<?php
// Compute hero image preload for LCP optimization
$current_script = basename($_SERVER['PHP_SELF']);
if (!isset($hero_preload_image)) {
    switch ($current_script) {
        case 'fuga-de-gas.php':
            $hero_preload_image = 'assets/images/hero-fuga-gas.webp';
            break;
        case 'prodoral.php':
            $hero_preload_image = 'assets/images/hero-prodoral.webp';
            break;
        case 'gasfiter-sec.php':
            $hero_preload_image = 'assets/images/hero-sec.webp';
            break;
        case 'calefont.php':
            $hero_preload_image = 'assets/images/hero-calefont.webp';
            break;
        case 'destape-alcantarillado.php':
            $hero_preload_image = 'assets/images/hero-destapes.webp';
            break;
        default:
            $hero_preload_image = 'assets/images/hero-home-main.webp';
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="es-CL">
<head>
  <base href="/">
  <?php include_once __DIR__ . '/seo-meta.php'; ?>
  
  <!-- Preload High-Priority LCP Hero Image -->
  <link rel="preload" as="image" href="<?php echo htmlspecialchars($hero_preload_image); ?>" fetchpriority="high">

  <!-- Preconnect & Non-Blocking Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Plus+Jakarta+Sans:wght@700;800&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Plus+Jakarta+Sans:wght@700;800&display=swap" media="print" onload="this.media='all'">
  <noscript>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Plus+Jakarta+Sans:wght@700;800&display=swap">
  </noscript>

  <!-- Consolidated Minified High-Performance Stylesheet -->
  <link rel="stylesheet" href="assets/css/main.min.css?v=<?php echo file_exists(__DIR__ . '/../assets/css/main.min.css') ? filemtime(__DIR__ . '/../assets/css/main.min.css') : '2.4'; ?>">
  <link rel="icon" type="image/webp" href="assets/images/logo.webp">
</head>
<body>

  <!-- Topbar Emergency 24/7 -->
  <aside class="topbar-emergency" aria-label="Aviso de Emergencias 24 Horas">
    <div class="container topbar-container">
      <div class="topbar-left">
        <span class="radar-live">
          <span class="radar-dot"></span>
          Urgencias 24/7
        </span>
        <span class="topbar-text">
          <strong>+40 años de trayectoria</strong> prestando servicios en todas las especialidades de gasfitería
        </span>
      </div>

      <div class="topbar-right">
        <span class="topbar-item">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
          Instaladores Autorizados SEC
        </span>
        <span class="topbar-item">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
          Respuesta 30 a 45 min
        </span>
        <a href="tel:932237072" class="topbar-phone-link" aria-label="Llamar a Central Gásfiter Certificado">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
          Central: 9 3223 7072
        </a>
      </div>
    </div>
  </aside>

  <!-- Main Sticky Navigation Header -->
  <header class="header-main" id="header-main">
    <div class="container navbar-container">
      <!-- Brand Logo & Identity -->
      <a href="./" class="brand-logo-link" aria-label="Gásfiter Certificado - Volver al Inicio">
        <img src="assets/images/logo.webp" alt="Logotipo Gásfiter Certificado SEC" class="brand-logo-img" width="48" height="48">
        <div class="brand-text-block">
          <span class="brand-name">Gásfiter<span>Certificado</span></span>
          <span class="brand-sub">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
            SEC AUTORIZADO 24/7
          </span>
        </div>
      </a>

      <!-- Desktop Navigation Menu -->
      <nav class="desktop-nav" aria-label="Menú Principal">
        <ul class="nav-menu-desktop">
          <li class="nav-item">
            <a href="./" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">Inicio</a>
          </li>

          <li class="nav-item">
            <a href="servicios" class="nav-link <?php echo (in_array(basename($_SERVER['PHP_SELF']), ['servicios.php', 'fuga-de-gas.php', 'prodoral.php', 'gasfiter-sec.php', 'calefont.php', 'destape-alcantarillado.php'])) ? 'active' : ''; ?>">
              Servicios
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="fuga-de-gas" class="dropdown-link">
                  <span class="dropdown-icon" style="color: var(--safety-red);">🔥</span>
                  <div>
                    <strong>Fugas de Gas 24/7</strong>
                    <div style="font-size: 0.75rem; color: var(--text-muted);">Detector electrónico & hermeticidad</div>
                  </div>
                </a>
              </li>
              <li>
                <a href="prodoral" class="dropdown-link">
                  <span class="dropdown-icon" style="color: #0284c7;">🧪</span>
                  <div>
                    <strong>Sellado Prodoral R6-1</strong>
                    <div style="font-size: 0.75rem; color: var(--text-muted);">Reparación sin romper pisos ni muros</div>
                  </div>
                </a>
              </li>
              <li>
                <a href="gasfiter-sec" class="dropdown-link">
                  <span class="dropdown-icon" style="color: var(--sec-green);">🛡️</span>
                  <div>
                    <strong>Certificación Sello Verde SEC</strong>
                    <div style="font-size: 0.75rem; color: var(--text-muted);">Inspección y regularización TC6</div>
                  </div>
                </a>
              </li>
              <li>
                <a href="calefont" class="dropdown-link">
                  <span class="dropdown-icon" style="color: #f59e0b;">⚡</span>
                  <div>
                    <strong>Calefont & Calderas</strong>
                    <div style="font-size: 0.75rem; color: var(--text-muted);">Mantención e instalación</div>
                  </div>
                </a>
              </li>
              <li>
                <a href="destape-alcantarillado" class="dropdown-link">
                  <span class="dropdown-icon" style="color: #6366f1;">🚰</span>
                  <div>
                    <strong>Destapes & Plomería</strong>
                    <div style="font-size: 0.75rem; color: var(--text-muted);">Máquinas eléctricas de alto poder</div>
                  </div>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="fuga-de-gas" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'fuga-de-gas.php') ? 'active' : ''; ?>">
              Fugas de Gas
              <span class="nav-badge-pill">Urgente</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="prodoral" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'prodoral.php') ? 'active' : ''; ?>">Sin Picar (Prodoral)</a>
          </li>

          <li class="nav-item">
            <a href="cobertura" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'cobertura.php') ? 'active' : ''; ?>">Cobertura RM</a>
          </li>

          <li class="nav-item">
            <a href="cotizar" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'cotizar.php') ? 'active' : ''; ?>">Cotizador Online</a>
          </li>

          <li class="nav-item">
            <a href="contacto" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'contacto.php') ? 'active' : ''; ?>">Contacto</a>
          </li>
        </ul>
      </nav>

      <!-- Action Buttons Desktop -->
      <div class="header-actions">
        <a href="tel:932237072" class="btn-header-call">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
          9 3223 7072
        </a>
        <a href="https://wa.me/56932237072?text=Hola%20Central%20Gásfiter%20Certificado,%20necesito%20atención%20urgente%20o%20cotización." target="_blank" class="btn-header-whatsapp" aria-label="Escribir a WhatsApp">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.046.419-.098.824z"/></svg>
          WhatsApp
        </a>
      </div>

      <!-- Hamburger Button (Mobile) -->
      <button class="btn-hamburger" aria-label="Abrir Menú de Navegación" id="btn-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </header>

  <?php include_once __DIR__ . '/navbar.php'; ?>
