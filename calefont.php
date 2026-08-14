<?php
$page_title = "Reparación y Mantención de Calefont en Santiago | Gásfiter SEC";
$page_description = "Servicio técnico multimarca para calefont y calderas en Santiago. Junkers, Splendid, Mademsa, Trotter, Neckar, Rheem. Repuestos originales y garantía. Llama al 9 3223 7072.";
$page_type = "calefont";

include_once __DIR__ . '/includes/header.php';
?>

<main>
  <!-- Hero Section Calefont -->
  <section class="hero-section hero-calefont" aria-label="Hero Calefont">
    <div class="container hero-grid">
      <div class="hero-content">
        <div class="hero-badge-live" style="background: rgba(245, 158, 11, 0.2); border-color: rgba(245, 158, 11, 0.4); color: #fde68a;">
          <span class="radar-dot" style="background: #f59e0b;"></span>
          <span>Servicio Técnico Multimarca Autorizado</span>
        </div>

        <h1 class="hero-title">
          Mantención, Reparación e <span class="highlight-gold">Instalación de Calefont</span>
        </h1>

        <p class="hero-lead">
          ¿Tu calefont no enciende, se apaga a los minutos, gotea o genera explosiones? Reparamos en el día con <strong>repuestos originales</strong> y garantía técnica por escrito.
        </p>

        <div class="hero-trust-bullets">
          <div class="hero-trust-item">
            <span class="hero-trust-icon">🔥</span>
            <span>Junkers, Splendid, Mademsa, Trotter</span>
          </div>
          <div class="hero-trust-item">
            <span class="hero-trust-icon">🛠️</span>
            <span>Cambio de Membranas y Sensores</span>
          </div>
          <div class="hero-trust-item">
            <span class="hero-trust-icon">🚿</span>
            <span>Limpieza Química de Serpentín</span>
          </div>
          <div class="hero-trust-item">
            <span class="hero-trust-icon">💨</span>
            <span>Tiro Natural, Forzado e Ionizados</span>
          </div>
        </div>

        <div class="hero-ctas">
          <a href="tel:932237072" class="btn btn-danger btn-lg">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            Llamar al 9 3223 7072
          </a>
          <a href="https://wa.me/56932237072?text=Hola,%20necesito%20reparar/mantener%20mi%20calefont." target="_blank" class="btn btn-whatsapp btn-lg">
            Cotizar por WhatsApp
          </a>
        </div>
      </div>

      <div class="hero-card-form">
        <div class="hero-card-header">
          <span class="hero-card-tag" style="background: #fef3c7; color: #b45309;">Calefont & Calderas</span>
          <h3 class="hero-card-title">Agenda Tu Técnico en Calefont</h3>
          <p class="hero-card-subtitle">Diagnóstico profesional a domicilio</p>
        </div>

        <form class="ajax-contact-form" method="POST">
          <input type="text" name="website_hp" style="display:none;" tabindex="-1" autocomplete="off">
          <input type="hidden" name="servicio" value="Servicio Técnico de Calefont">

          <div class="form-group">
            <label class="form-label">Tu Nombre *</label>
            <input type="text" name="nombre" class="form-control" placeholder="Ej: Carolina Rojas" required>
          </div>

          <div class="form-group">
            <label class="form-label">Teléfono *</label>
            <input type="tel" name="telefono" class="form-control" placeholder="Ej: +56 9 5432 1098" required>
          </div>

          <div class="form-group">
            <label class="form-label">Comuna *</label>
            <select name="comuna" class="form-control" required>
              <option value="Las Condes">Las Condes</option>
              <option value="Providencia">Providencia</option>
              <option value="Vitacura">Vitacura</option>
              <option value="Ñuñoa">Ñuñoa</option>
              <option value="Santiago Centro" selected>Santiago Centro</option>
              <option value="Lo Barnechea">Lo Barnechea</option>
              <option value="La Reina">La Reina</option>
              <option value="Peñalolén">Peñalolén</option>
              <option value="La Florida">La Florida</option>
              <option value="San Miguel">San Miguel</option>
              <option value="Maipú">Maipú</option>
              <option value="Puente Alto">Puente Alto</option>
              <option value="Otra Comuna">Otra Comuna RM</option>
            </select>
          </div>

          <div class="form-group">
            <label class="form-label">Marca y Falla del Calefont</label>
            <input type="text" name="mensaje" class="form-control" placeholder="Ej: Junkers 13L, no da chispa / no calienta el agua">
          </div>

          <button type="submit" class="btn btn-danger" style="width: 100%;">
            Agendar Revisión Técnica &raquo;
          </button>
        </form>
      </div>
    </div>
  </section>

  <!-- Calefont Brands Grid -->
  <section class="section-padding">
    <div class="container">
      <div class="section-header">
        <span class="section-subtitle">Especialistas Multimarca</span>
        <h2 class="section-title">Servicio Técnico Especializado para Todas las Marcas</h2>
        <p class="section-desc">Contamos con repuestos originales de fábrica y herramientas de diagnóstico electrónico.</p>
      </div>

      <div class="services-grid">
        <div class="service-card">
          <div class="service-body">
            <h3 class="service-title">Junkers / Bosch</h3>
            <p class="service-text">Modelos HydroPower, Minimaxx, Celsius, tiro forzado y tiro natural. Reparación de microinterruptores, servoválvulas e hidrogeneradores.</p>
            <ul class="service-bullets">
              <li>✔️ Repuestos legítimos Junkers</li>
              <li>✔️ Ajuste de presión de gas y caudal</li>
            </ul>
          </div>
        </div>

        <div class="service-card">
          <div class="service-body">
            <h3 class="service-title">Splendid & Mademsa</h3>
            <p class="service-text">Modelos Master, Templatech, Vital, ionizados y de encendido automático. Reparación de módulo de encendido y termocuplas.</p>
            <ul class="service-bullets">
              <li>✔️ Cambio de membrana de silicona de alta duración</li>
              <li>✔️ Limpieza de quemadores y toberas</li>
            </ul>
          </div>
        </div>

        <div class="service-card">
          <div class="service-body">
            <h3 class="service-title">Ursus Trotter & Neckar</h3>
            <p class="service-text">Calefonts y calderas murales Ursus Trotter, Neckar y Rheem. Mantenimiento del intercambiador de calor y regulación de llama modulante.</p>
            <ul class="service-bullets">
              <li>✔️ Desincrustación con ácido descalcificador</li>
              <li>✔️ Conversión de gas GLP a GN y viceversa</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include_once __DIR__ . '/includes/reviews-section.php'; ?>
  <?php include_once __DIR__ . '/includes/cta-urgencia.php'; ?>
</main>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
