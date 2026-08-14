<?php
$page_title = "Gásfiter a Domicilio en Santiago y Comunas RM | Llegada 45 Min";
$page_description = "Cobertura total de gásfiter certificado SEC en Santiago: Las Condes, Providencia, Vitacura, Ñuñoa, Santiago Centro, Lo Barnechea, Maipú, La Florida y toda la RM. Llama al 9 3223 7072.";
$page_type = "cobertura";

include_once __DIR__ . '/includes/header.php';
?>

<main>
  <!-- Cobertura Header -->
  <section class="hero-section" style="padding: 3.5rem 0 4rem;">
    <div class="container" style="text-align: center; max-width: 860px;">
      <span class="hero-badge-live">Móviles Distribuidos Estratégicamente</span>
      <h1 class="hero-title" style="font-size: 2.8rem;">
        Cobertura de <span class="highlight-gold">Gásfiter Certificado</span> en Toda la RM
      </h1>
      <p class="hero-lead">
        Contamos con técnicos de turno en las 32 comunas del Gran Santiago y sectores aledaños, garantizando un tiempo promedio de llegada de <strong>30 a 45 minutos</strong>.
      </p>
      <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
        <a href="tel:932237072" class="btn btn-danger btn-lg">Llamar Central 9 3223 7072</a>
        <a href="https://wa.me/56932237072?text=Hola,%20necesito%20saber%20disponibilidad%20de%20gásfiter%20para%20mi%20comuna." target="_blank" class="btn btn-whatsapp btn-lg">Consultar por WhatsApp</a>
      </div>
    </div>
  </section>

  <!-- Interactive Comunas Search and Cards -->
  <section class="section-padding">
    <div class="container">
      <div class="section-header">
        <span class="section-subtitle">Zonas de Atención</span>
        <h2 class="section-title">Comunas con Servicio de Urgencia 24 Horas</h2>
        <p class="section-desc">Escribe el nombre de tu comuna para verificar el tiempo estimado de arribo del móvil más cercano.</p>
      </div>

      <div class="comunas-search-box">
        <span class="comunas-search-icon">🔍</span>
        <input type="text" class="comunas-search-input" placeholder="Buscar mi comuna (ej: Vitacura, Providencia, Maipú)..." aria-label="Buscar comuna">
      </div>

      <div class="services-grid" style="grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));">
        <!-- Sector Oriente -->
        <div class="trust-sec-card comuna-card">
          <div style="font-size: 0.8rem; font-weight: 800; color: var(--sec-green-dark); text-transform: uppercase;">Sector Oriente</div>
          <h3 style="margin-top: 0.25rem;">Las Condes</h3>
          <p style="font-size: 0.85rem; color: var(--text-muted);">Móvil activo en El Golf, Manquehue, Colón y San Carlos de Apoquindo.</p>
          <div style="font-size: 0.85rem; font-weight: 700; color: var(--safety-red); margin-top: 0.5rem;">⏱️ Llegada: ~30 min</div>
        </div>

        <div class="trust-sec-card comuna-card">
          <div style="font-size: 0.8rem; font-weight: 800; color: var(--sec-green-dark); text-transform: uppercase;">Sector Oriente</div>
          <h3 style="margin-top: 0.25rem;">Providencia</h3>
          <p style="font-size: 0.85rem; color: var(--text-muted);">Atención en Pedro de Valdivia, Tobalaba, Los Leones y Manuel Montt.</p>
          <div style="font-size: 0.85rem; font-weight: 700; color: var(--safety-red); margin-top: 0.5rem;">⏱️ Llegada: ~25 min</div>
        </div>

        <div class="trust-sec-card comuna-card">
          <div style="font-size: 0.8rem; font-weight: 800; color: var(--sec-green-dark); text-transform: uppercase;">Sector Oriente</div>
          <h3 style="margin-top: 0.25rem;">Vitacura</h3>
          <p style="font-size: 0.85rem; color: var(--text-muted);">Móvil en Santa María de Manquehue, Lo Curro y Alonso de Córdova.</p>
          <div style="font-size: 0.85rem; font-weight: 700; color: var(--safety-red); margin-top: 0.5rem;">⏱️ Llegada: ~35 min</div>
        </div>

        <div class="trust-sec-card comuna-card">
          <div style="font-size: 0.8rem; font-weight: 800; color: var(--sec-green-dark); text-transform: uppercase;">Sector Oriente</div>
          <h3 style="margin-top: 0.25rem;">Lo Barnechea</h3>
          <p style="font-size: 0.85rem; color: var(--text-muted);">La Dehesa, El Arrayán, Los Trapenses y Camino a Farellones.</p>
          <div style="font-size: 0.85rem; font-weight: 700; color: var(--safety-red); margin-top: 0.5rem;">⏱️ Llegada: ~40 min</div>
        </div>

        <div class="trust-sec-card comuna-card">
          <div style="font-size: 0.8rem; font-weight: 800; color: var(--sec-green-dark); text-transform: uppercase;">Sector Oriente</div>
          <h3 style="margin-top: 0.25rem;">Ñuñoa & La Reina</h3>
          <p style="font-size: 0.85rem; color: var(--text-muted);">Plaza Ñuñoa, Irarrázaval, Príncipe de Gales y Simón Bolívar.</p>
          <div style="font-size: 0.85rem; font-weight: 700; color: var(--safety-red); margin-top: 0.5rem;">⏱️ Llegada: ~30 min</div>
        </div>

        <!-- Sector Centro -->
        <div class="trust-sec-card comuna-card">
          <div style="font-size: 0.8rem; font-weight: 800; color: #2563eb; text-transform: uppercase;">Sector Centro</div>
          <h3 style="margin-top: 0.25rem;">Santiago Centro</h3>
          <p style="font-size: 0.85rem; color: var(--text-muted);">Casco histórico, Santa Isabel, Barrio Lastarria, República y Parque Almagro.</p>
          <div style="font-size: 0.85rem; font-weight: 700; color: var(--safety-red); margin-top: 0.5rem;">⏱️ Llegada: ~20 min</div>
        </div>

        <div class="trust-sec-card comuna-card">
          <div style="font-size: 0.8rem; font-weight: 800; color: #2563eb; text-transform: uppercase;">Sector Centro / Norte</div>
          <h3 style="margin-top: 0.25rem;">Recoleta & Independencia</h3>
          <p style="font-size: 0.85rem; color: var(--text-muted);">Sector Hospitales, Bellavista norte, Av. Independencia y Santos Dumont.</p>
          <div style="font-size: 0.85rem; font-weight: 700; color: var(--safety-red); margin-top: 0.5rem;">⏱️ Llegada: ~25 min</div>
        </div>

        <!-- Sector Sur / Poniente -->
        <div class="trust-sec-card comuna-card">
          <div style="font-size: 0.8rem; font-weight: 800; color: #d97706; text-transform: uppercase;">Sector Sur / Poniente</div>
          <h3 style="margin-top: 0.25rem;">San Miguel & San Joaquín</h3>
          <p style="font-size: 0.85rem; color: var(--text-muted);">Gran Avenida, El Llano Subercaseaux, Departamental y Santa Rosa.</p>
          <div style="font-size: 0.85rem; font-weight: 700; color: var(--safety-red); margin-top: 0.5rem;">⏱️ Llegada: ~30 min</div>
        </div>

        <div class="trust-sec-card comuna-card">
          <div style="font-size: 0.8rem; font-weight: 800; color: #d97706; text-transform: uppercase;">Sector Sur / Oriente</div>
          <h3 style="margin-top: 0.25rem;">La Florida & Peñalolén</h3>
          <p style="font-size: 0.85rem; color: var(--text-muted);">Vicuña Mackenna, Rojas Magallanes, Consistorial y Quilín.</p>
          <div style="font-size: 0.85rem; font-weight: 700; color: var(--safety-red); margin-top: 0.5rem;">⏱️ Llegada: ~35 min</div>
        </div>

        <div class="trust-sec-card comuna-card">
          <div style="font-size: 0.8rem; font-weight: 800; color: #d97706; text-transform: uppercase;">Sector Poniente</div>
          <h3 style="margin-top: 0.25rem;">Maipú & Cerrillos</h3>
          <p style="font-size: 0.85rem; color: var(--text-muted);">Pajaritos, Plaza de Maipú, Las Parcelas y Ciudad Satélite.</p>
          <div style="font-size: 0.85rem; font-weight: 700; color: var(--safety-red); margin-top: 0.5rem;">⏱️ Llegada: ~35 min</div>
        </div>

        <div class="trust-sec-card comuna-card">
          <div style="font-size: 0.8rem; font-weight: 800; color: #d97706; text-transform: uppercase;">Sector Sur</div>
          <h3 style="margin-top: 0.25rem;">Puente Alto & La Cisterna</h3>
          <p style="font-size: 0.85rem; color: var(--text-muted);">Concha y Toro, Las Vizcachas, Américo Vespucio y San Ramón.</p>
          <div style="font-size: 0.85rem; font-weight: 700; color: var(--safety-red); margin-top: 0.5rem;">⏱️ Llegada: ~40 min</div>
        </div>

        <div class="trust-sec-card comuna-card">
          <div style="font-size: 0.8rem; font-weight: 800; color: var(--sec-green-dark); text-transform: uppercase;">Sector Norte / Chicureo</div>
          <h3 style="margin-top: 0.25rem;">Colina & Chicureo</h3>
          <p style="font-size: 0.85rem; color: var(--text-muted);">Piedra Roja, Chamisero, Los Ingleses y Valle Grande.</p>
          <div style="font-size: 0.85rem; font-weight: 700; color: var(--safety-red); margin-top: 0.5rem;">⏱️ Llegada: ~45 min</div>
        </div>
      </div>
    </div>
  </section>

  <?php include_once __DIR__ . '/includes/reviews-section.php'; ?>
  <?php include_once __DIR__ . '/includes/cta-urgencia.php'; ?>
</main>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
