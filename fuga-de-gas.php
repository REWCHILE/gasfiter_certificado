<?php
$page_title = "Detección y Reparación de Fugas de Gas 24/7 en Santiago | SEC";
$page_description = "Servicio de urgencia 24 horas para detección y reparación de fugas de gas en Santiago. Detector electrónico, gas trazador, prueba de hermeticidad y reposición inmediata. Llama al 9 3223 7072.";
$page_type = "fuga";

include_once __DIR__ . '/includes/header.php';
?>

<main>
  <!-- Dedicated Hero for Gas Leaks -->
  <section class="hero-section hero-fuga" aria-label="Hero Fugas de Gas">
    <div class="container hero-grid">
      <div class="hero-content">
        <div class="hero-badge-live" style="background: rgba(239, 68, 68, 0.2); border-color: rgba(239, 68, 68, 0.4); color: #fca5a5;">
          <span class="radar-dot" style="background: #ef4444;"></span>
          <span>Respuesta Inmediata ante Fugas de Gas</span>
        </div>

        <h1 class="hero-title">
          Detección y Reparación de <span class="highlight-red">Fugas de Gas 24 Horas</span>
        </h1>

        <p class="hero-lead">
          ¿Sientes olor a gas o te cortaron el suministro? Despachamos un <strong>Instalador Certificado SEC</strong> con detectores electrónicos y prueba de hermeticidad para ubicar y reparar la fuga con total seguridad.
        </p>

        <div class="hero-trust-bullets">
          <div class="hero-trust-item">
            <span class="hero-trust-icon">⚡</span>
            <span>Llegada Express en 30 a 45 min</span>
          </div>
          <div class="hero-trust-item">
            <span class="hero-trust-icon">🔍</span>
            <span>Detector Electrónico y Gas Trazador</span>
          </div>
          <div class="hero-trust-item">
            <span class="hero-trust-icon">📜</span>
            <span>Prueba de Hermeticidad Normativa SEC</span>
          </div>
          <div class="hero-trust-item">
            <span class="hero-trust-icon">🛡️</span>
            <span>Gas Natural y Gas Licuado GLP</span>
          </div>
        </div>

        <div class="hero-ctas">
          <a href="tel:932237072" class="btn btn-danger btn-lg">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            Urgencia Fugas: 9 3223 7072
          </a>
          <a href="https://wa.me/56932237072?text=EMERGENCIA:%20Tengo%20una%20fuga%20de%20gas.%20Necesito%20un%20técnico%20urgente." target="_blank" class="btn btn-whatsapp btn-lg">
            WhatsApp Fugas 24/7
          </a>
        </div>
      </div>

      <div class="hero-card-form">
        <div class="hero-card-header">
          <span class="hero-card-tag" style="background: #fee2e2; color: #dc2626;">Alerta Fuga de Gas</span>
          <h3 class="hero-card-title">Atención Prioritaria Inmediata</h3>
          <p class="hero-card-subtitle">Tu seguridad es nuestra prioridad</p>
        </div>

        <form class="ajax-contact-form" method="POST">
          <input type="text" name="website_hp" style="display:none;" tabindex="-1" autocomplete="off">
          <input type="hidden" name="servicio" value="Fuga de Gas Prioritaria">

          <div class="form-group">
            <label class="form-label">Tu Nombre *</label>
            <input type="text" name="nombre" class="form-control" placeholder="Ej: Marcela Gómez" required>
          </div>

          <div class="form-group">
            <label class="form-label">Teléfono Directo *</label>
            <input type="tel" name="telefono" class="form-control" placeholder="Ej: +56 9 8765 4321" required>
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
            <label class="form-label">¿Dónde percibes el olor o fuga?</label>
            <input type="text" name="mensaje" class="form-control" placeholder="Ej: En la cocina, cerca del medidor o calefont">
          </div>

          <button type="submit" class="btn btn-danger" style="width: 100%;">
            Solicitar Despacho de Técnico SEC &raquo;
          </button>
        </form>
      </div>
    </div>
  </section>

  <!-- Process Breakdown Section -->
  <section class="section-padding">
    <div class="container">
      <div class="section-header">
        <span class="section-subtitle red">Protocolo Técnico Riguroso</span>
        <h2 class="section-title">¿Cómo Detectamos y Solucionamos Tu Fuga de Gas?</h2>
        <p class="section-desc">Aplicamos un procedimiento normado bajo la regulación SEC DS 66 para garantizar máxima seguridad y precisión.</p>
      </div>

      <div class="services-grid">
        <div class="trust-sec-card">
          <div class="trust-sec-icon" style="background: linear-gradient(135deg, #ef4444 0%, #991b1b 100%);">1</div>
          <h3>Prueba de Hermeticidad Normativa</h3>
          <p>La prueba de hermeticidad manométrica es la que define fehacientemente si existe fuga o no en la matriz de gas, registrando variaciones milimétricas de presión.</p>
        </div>

        <div class="trust-sec-card">
          <div class="trust-sec-icon" style="background: linear-gradient(135deg, #f59e0b 0%, #b45309 100%);">2</div>
          <h3>Detector Electrónico y Gas Trazador</h3>
          <p>Localizamos el punto exacto de escape utilizando detectores de fuga electrónicos calibrados (con el gas de red) o inyectando mezcla de gas trazador no inflamable.</p>
        </div>

        <div class="trust-sec-card">
          <div class="trust-sec-icon" style="background: linear-gradient(135deg, #10b981 0%, #047857 100%);">3</div>
          <h3>Reparación y Certificación SEC</h3>
          <p>Ejecutamos la reparación reglamentaria (soldadura de plata al 45% o sellado polimérico Prodoral R200) y emitimos el informe técnico oficial para la reposición del suministro.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Emergency Safety Protocol Banner -->
  <section style="background: #fff1f2; border-top: 1px solid #fecdd3; border-bottom: 1px solid #fecdd3; padding: 3.5rem 0;">
    <div class="container">
      <div style="max-width: 860px; margin: 0 auto; text-align: center;">
        <span style="font-size: 2.5rem; display: block; margin-bottom: 1rem;">⚠️</span>
        <h3 style="font-family: var(--font-heading); font-size: 1.8rem; font-weight: 800; color: #9f1239; margin-bottom: 1rem;">
          Medidas de Seguridad Inmediatas si Sientes Olor a Gas
        </h3>
        <ul style="text-align: left; display: inline-block; list-style: none; margin-bottom: 1.5rem; line-height: 1.8; font-size: 1rem; color: #881337;">
          <li>❌ <strong>NO</strong> enciendas luces, fósforos, velas ni artefactos eléctricos.</li>
          <li>❌ <strong>NO</strong> uses el timbre ni conectes cargadores de teléfono cerca.</li>
          <li>✔️ <strong>CIERRA</strong> la llave de paso general del medidor o cilindro.</li>
          <li>✔️ <strong>VENTILA</strong> abriendo ventanas y puertas hacia el exterior.</li>
          <li>✔️ <strong>LLAMA</strong> a nuestra central de emergencias desde una zona ventilada: <a href="tel:932237072" style="font-weight: 800; text-decoration: underline;">9 3223 7072</a>.</li>
        </ul>
      </div>
    </div>
  </section>

  <?php include_once __DIR__ . '/includes/reviews-section.php'; ?>
  <?php include_once __DIR__ . '/includes/cta-urgencia.php'; ?>
</main>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
