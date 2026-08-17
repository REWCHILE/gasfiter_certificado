<?php
/**
 * Dynamic SEO Landing Page Engine
 * Handles Google Search Console 77 URLs & High-CTR Local/Niche Landings
 * Gásfiter Certificado - gasfiter-certificado.cl
 */

require_once __DIR__ . '/data/seo-routes.php';

$raw_slug = isset($_GET['slug']) ? trim($_GET['slug'], '/') : '';

// If slug is empty or home, include index.php
if ($raw_slug === '' || $raw_slug === 'home') {
    include __DIR__ . '/index.php';
    exit;
}

$route = get_seo_route($raw_slug);

if (!$route) {
    // Graceful fallback to index with 404 or redirect
    header("Location: /", true, 301);
    exit;
}

// Meta & OpenGraph variables for header
$page_title = $route['title'];
$page_description = $route['description'];
$page_type = "website";
$canonical_url = "https://gasfiter-certificado.cl/" . htmlspecialchars($raw_slug);
$og_image = !empty($route['og_image']) ? $route['og_image'] : "https://gasfiter-certificado.cl/assets/images/og-share-gasfiter.jpg";

// Additional FAQ Schema JSON-LD if FAQs exist
$faq_schema = [];
if (!empty($route['faqs'])) {
    $main_entities = [];
    foreach ($route['faqs'] as $faq) {
        $main_entities[] = [
            '@type' => 'Question',
            'name' => $faq['q'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq['a']
            ]
        ];
    }
    $faq_schema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => $main_entities
    ];
}

include_once __DIR__ . '/includes/header.php';
?>

<!-- FAQ Schema Injection -->
<?php if (!empty($faq_schema)): ?>
<script type="application/ld+json">
<?php echo json_encode($faq_schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
<?php endif; ?>

<main>
  <!-- Hero Section -->
  <section class="hero-section" aria-label="<?php echo strip_tags($route['h1']); ?>">
    <div class="container hero-grid">
      <div class="hero-content">
        <div class="hero-badge-live">
          <span class="radar-dot"></span>
          <span><?php echo htmlspecialchars($route['badge']); ?></span>
        </div>

        <h1 class="hero-title">
          <?php echo $route['h1']; ?>
        </h1>

        <p class="hero-lead">
          <?php echo htmlspecialchars($route['lead']); ?>
        </p>

        <!-- Trust Bullets -->
        <div class="hero-trust-bullets">
          <?php foreach ($route['bullets'] as $bullet): ?>
          <div class="hero-trust-item">
            <span class="hero-trust-icon">✓</span>
            <span><?php echo htmlspecialchars($bullet); ?></span>
          </div>
          <?php endforeach; ?>
        </div>

        <!-- Call to Actions -->
        <div class="hero-ctas">
          <a href="tel:932237072" class="btn btn-danger btn-lg">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            Llamar Ahora: 9 3223 7072
          </a>
          <a href="https://wa.me/56932237072?text=<?php echo rawurlencode($route['whatsapp_msg']); ?>" target="_blank" rel="noopener" class="btn btn-whatsapp btn-lg">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
            WhatsApp 24/7
          </a>
        </div>
      </div>

      <!-- Quick Contact Form -->
      <div class="hero-card-form">
        <div class="hero-card-header">
          <span class="hero-card-tag">Atención Rápida</span>
          <h2 class="hero-card-title">Solicitar Técnico a Domicilio</h2>
          <p class="hero-card-subtitle">Llegada estimada en 30 a 45 minutos</p>
        </div>

        <form class="ajax-contact-form" method="POST" action="api/contact.php">
          <input type="text" name="website_hp" style="display:none;" tabindex="-1" autocomplete="off">
          <input type="hidden" name="servicio" value="<?php echo htmlspecialchars(strip_tags($route['h1'])); ?>">

          <div class="form-group">
            <label class="form-label">Tu Nombre *</label>
            <input type="text" name="nombre" class="form-control" placeholder="Ej: Carlos Silva" required>
          </div>

          <div class="form-group">
            <label class="form-label">Teléfono Directo *</label>
            <input type="tel" name="telefono" class="form-control" placeholder="Ej: +56 9 1234 5678" required>
          </div>

          <div class="form-group">
            <label class="form-label">Comuna o Sector *</label>
            <input type="text" name="comuna" class="form-control" placeholder="Ej: <?php echo !empty($route['comuna_name']) ? htmlspecialchars($route['comuna_name']) : 'Las Condes, Santiago Centro, etc.'; ?>" value="<?php echo !empty($route['comuna_name']) ? htmlspecialchars($route['comuna_name']) : ''; ?>" required>
          </div>

          <div class="form-group">
            <label class="form-label">Detalle del requerimiento</label>
            <input type="text" name="mensaje" class="form-control" placeholder="Ej: Fuga, calefont, destape, mantención...">
          </div>

          <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center; font-size: 1rem; padding: 0.9rem;">
            Despachar Gásfiter SEC &raquo;
          </button>
        </form>
      </div>
    </div>
  </section>

  <!-- Key Value Propositions Grid -->
  <section class="section-padding" style="background: var(--bg-surface); border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color);">
    <div class="container">
      <div class="section-header">
        <span class="section-subtitle">Garantía y Seguridad</span>
        <h2 class="section-title">¿Por Qué Confiar en Central Gásfiter Certificado?</h2>
        <p class="section-desc">Instaladores autorizados por la Superintendencia de Electricidad y Combustibles (SEC) con más de 40 años de trayectoria.</p>
      </div>

      <div class="services-grid" style="grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));">
        <div class="trust-sec-card">
          <div class="trust-sec-icon">⚡</div>
          <h3>Llegada en 30 a 45 Min</h3>
          <p>Móviles patrullando las comunas de Santiago para atender urgencias domiciliarias y comerciales sin demoras.</p>
        </div>

        <div class="trust-sec-card">
          <div class="trust-sec-icon">📜</div>
          <h3>Carnet Oficial SEC</h3>
          <p>Instaladores autorizados Clase 1, 2 y 3. Emitimos declaraciones oficiales TC6, pruebas de hermeticidad y Sello Verde.</p>
        </div>

        <div class="trust-sec-card">
          <div class="trust-sec-icon">🔬</div>
          <h3>Tecnología No Invasiva</h3>
          <p>Detección ultrasónica, gas trazador y sellado alemán Prodoral R6-1 para reparar cañerías sin romper muros ni pisos.</p>
        </div>

        <div class="trust-sec-card">
          <div class="trust-sec-icon">🛡️</div>
          <h3>Garantía por Escrito</h3>
          <p>Todos nuestros trabajos cuentan con boleta o factura formal y garantía extendida por escrito de hasta 6 meses.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Related Services & Specializations -->
  <section class="section-padding">
    <div class="container">
      <div class="section-header">
        <span class="section-subtitle">Especialidades Técnicas</span>
        <h2 class="section-title">Servicios de Gasfitería Autorizada Disponibles</h2>
        <p class="section-desc">Soluciones integrales de alta complejidad en gas natural, gas licuado, calefacción y redes sanitarias.</p>
      </div>

      <div class="services-grid">
        <article class="service-card">
          <div class="service-img-wrap">
            <img src="assets/images/fuga-gas.webp" alt="Detección de Fugas de Gas" loading="lazy" width="380" height="210">
            <span class="service-tag urgent">🚨 Emergencias 24/7</span>
          </div>
          <div class="service-body">
            <h3 class="service-title">Detección de Fugas de Gas</h3>
            <p class="service-text">Rastreo electrónico con gas trazador, prueba de hermeticidad con manómetro y solución definitiva a cortes de suministro.</p>
            <div class="service-footer">
              <a href="fuga-de-gas" class="service-link">Ver detalles &raquo;</a>
              <a href="tel:932237072" class="btn btn-danger btn-sm">Llamar 24/7</a>
            </div>
          </div>
        </article>

        <article class="service-card">
          <div class="service-img-wrap">
            <img src="assets/images/prodoral.webp" alt="Sellado Prodoral R6-1" loading="lazy" width="380" height="210">
            <span class="service-tag green">🧪 Sin Picar Muros</span>
          </div>
          <div class="service-body">
            <h3 class="service-title">Sellado Prodoral R6-1</h3>
            <p class="service-text">Tecnología alemana de sellado interno de tuberías de gas mediante inyección de polímero sin demolición.</p>
            <div class="service-footer">
              <a href="prodoral" class="service-link">Conocer Prodoral &raquo;</a>
              <a href="https://wa.me/56932237072?text=Hola,%20quisiera%20cotizar%20sellado%20Prodoral%20R6-1." class="btn btn-primary btn-sm" target="_blank">Cotizar</a>
            </div>
          </div>
        </article>

        <article class="service-card">
          <div class="service-img-wrap">
            <img src="assets/images/hero-sec.webp" alt="Certificación Sello Verde SEC" loading="lazy" width="380" height="210">
            <span class="service-tag">📜 Normativa SEC</span>
          </div>
          <div class="service-body">
            <h3 class="service-title">Certificación Sello Verde</h3>
            <p class="service-text">Levantamiento urgente de sellos rojos y amarillos, normalización de ventilaciones, proyectos de gas y trámites TC6.</p>
            <div class="service-footer">
              <a href="gasfiter-sec" class="service-link">Trámites SEC &raquo;</a>
              <a href="https://wa.me/56932237072?text=Hola,%20necesito%20levantar%20un%20sello%20rojo%20o%20tramitar%20Sello%20Verde." class="btn btn-primary btn-sm" target="_blank">Regularizar</a>
            </div>
          </div>
        </article>

        <article class="service-card">
          <div class="service-img-wrap">
            <img src="assets/images/calefont.webp" alt="Calefont y Calderas" loading="lazy" width="380" height="210">
            <span class="service-tag">🔥 Multimarca</span>
          </div>
          <div class="service-body">
            <h3 class="service-title">Calefont & Calderas</h3>
            <p class="service-text">Mantención preventiva, cambio de serpentín, reparación de ionizados, tiro forzado, calderas murales y termos eléctricos.</p>
            <div class="service-footer">
              <a href="calefont" class="service-link">Servicio Calefont &raquo;</a>
              <a href="tel:932237072" class="btn btn-danger btn-sm">Llamar 24/7</a>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- FAQ Section (Schema Ready) -->
  <?php if (!empty($route['faqs'])): ?>
  <section class="section-padding" style="background: var(--bg-surface); border-top: 1px solid var(--border-color);">
    <div class="container" style="max-width: 860px;">
      <div class="section-header">
        <span class="section-subtitle">Dudas Habituales</span>
        <h2 class="section-title">Preguntas Frecuentes</h2>
        <p class="section-desc">Respuestas claras y directas de nuestros instaladores certificados SEC.</p>
      </div>

      <div class="faq-list">
        <?php foreach ($route['faqs'] as $index => $faq): ?>
        <details class="faq-item" <?php echo $index === 0 ? 'open' : ''; ?>>
          <summary class="faq-question">
            <span><?php echo htmlspecialchars($faq['q']); ?></span>
            <span class="faq-toggle-icon">+</span>
          </summary>
          <div class="faq-answer">
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        </details>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- Emergency Banner CTA -->
  <section class="cta-urgent-banner" style="background: linear-gradient(135deg, var(--navy-900), var(--navy-800)); color: #ffffff; padding: 4rem 0; text-align: center; border-top: 1px solid rgba(255,255,255,0.1);">
    <div class="container" style="max-width: 800px;">
      <span class="hero-badge-live" style="margin-bottom: 1.5rem;">Atención Continua 24 Horas</span>
      <h2 style="font-size: 2.3rem; margin-bottom: 1rem; color: #ffffff;">¿Necesitas Asistencia Técnica Inmediata?</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 2rem;">Llámanos directamente o escríbenos por WhatsApp. Un instalador certificado SEC acudirá a tu domicilio en 30 a 45 minutos.</p>
      <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
        <a href="tel:932237072" class="btn btn-danger btn-lg" style="font-size: 1.1rem; padding: 1rem 2rem;">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
          Llamar al 9 3223 7072
        </a>
        <a href="https://wa.me/56932237072?text=<?php echo rawurlencode($route['whatsapp_msg']); ?>" target="_blank" rel="noopener" class="btn btn-whatsapp btn-lg" style="font-size: 1.1rem; padding: 1rem 2rem;">
          Chatear por WhatsApp
        </a>
      </div>
    </div>
  </section>
</main>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
