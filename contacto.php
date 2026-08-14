<?php
$page_title = "📞 9 3223 7072 | Central Gásfiter Certificado SEC 24 Horas";
$page_description = "Contáctanos las 24 horas para emergencias de gas, fugas, mantención de calefont o destapes. Teléfono directo: 9 3223 7072. Base central en Santiago de Chile.";
$page_type = "website";
$canonical_url = "https://gasfiter-certificado.cl/contacto";
$og_image = "https://gasfiter-certificado.cl/assets/images/og-share-gasfiter.jpg";

include_once __DIR__ . '/includes/header.php';
?>

<main>
  <!-- Contact Hero Header -->
  <section class="hero-section" style="padding: 3.5rem 0 4rem;">
    <div class="container" style="text-align: center; max-width: 860px;">
      <span class="hero-badge-live">Central Telefónica y WhatsApp 24/7</span>
      <h1 class="hero-title" style="font-size: 2.8rem;">
        Contacto Directo <span class="highlight-gold">Gásfiter Certificado</span>
      </h1>
      <p class="hero-lead">
        Comunícate con nuestra central técnica autorizada SEC para coordinar una visita técnica o atención prioritaria ante emergencias.
      </p>
    </div>
  </section>

  <!-- Contact Details & Form Section -->
  <section class="section-padding">
    <div class="container">
      <div class="hero-grid">
        <!-- Contact Cards -->
        <div>
          <div class="section-header" style="text-align: left; margin-bottom: 2rem;">
            <span class="section-subtitle">Canales de Atención</span>
            <h2 class="section-title">Estamos Listos para Atenderte</h2>
            <p class="section-desc">Elige tu canal preferido para respuesta inmediata.</p>
          </div>

          <div style="display: flex; flex-direction: column; gap: 1.25rem;">
            <div class="trust-sec-card" style="padding: 1.5rem; display: flex; align-items: center; gap: 1.25rem;">
              <div class="trust-sec-icon" style="margin-bottom: 0; background: var(--safety-red); flex-shrink: 0;">📞</div>
              <div>
                <div style="font-size: 0.85rem; font-weight: 700; color: var(--text-muted);">Central Telefónica 24/7</div>
                <a href="tel:932237072" style="font-family: var(--font-heading); font-size: 1.4rem; font-weight: 800; color: var(--primary-navy);">
                  9 3223 7072
                </a>
              </div>
            </div>

            <div class="trust-sec-card" style="padding: 1.5rem; display: flex; align-items: center; gap: 1.25rem;">
              <div class="trust-sec-icon" style="margin-bottom: 0; background: var(--whatsapp-green); flex-shrink: 0;">💬</div>
              <div>
                <div style="font-size: 0.85rem; font-weight: 700; color: var(--text-muted);">WhatsApp Oficial</div>
                <a href="https://wa.me/56932237072?text=Hola%20Central%20Gásfiter%20Certificado,%20necesito%20atención." target="_blank" style="font-family: var(--font-heading); font-size: 1.4rem; font-weight: 800; color: #15803d;">
                  +56 9 3223 7072
                </a>
              </div>
            </div>

            <div class="trust-sec-card" style="padding: 1.5rem; display: flex; align-items: center; gap: 1.25rem;">
              <div class="trust-sec-icon" style="margin-bottom: 0; background: var(--primary-blue-light); flex-shrink: 0;">📍</div>
              <div>
                <div style="font-size: 0.85rem; font-weight: 700; color: var(--text-muted);">Base Central y Despachos</div>
                <div style="font-family: var(--font-heading); font-size: 1.1rem; font-weight: 800; color: var(--primary-navy);">
                  Santiago, Región Metropolitana, Chile
                </div>
                <div style="font-size: 0.85rem; color: var(--sec-green-dark); font-weight: 700; margin-top: 0.2rem;">
                  ✔️ Cobertura en las 32 comunas del Gran Santiago
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="hero-card-form" style="box-shadow: var(--shadow-xl);">
          <div class="hero-card-header">
            <span class="hero-card-tag">Formulario Web</span>
            <h2 class="hero-card-title">Envíanos un Mensaje</h2>
            <p class="hero-card-subtitle">Te responderemos a la brevedad</p>
          </div>

          <form class="ajax-contact-form" method="POST">
            <input type="text" name="website_hp" style="display:none;" tabindex="-1" autocomplete="off">

            <div class="form-group">
              <label class="form-label">Nombre y Apellido *</label>
              <input type="text" name="nombre" class="form-control" placeholder="Ej: Francisco Soto" required>
            </div>

            <div class="form-group">
              <label class="form-label">Teléfono de Contacto *</label>
              <input type="tel" name="telefono" class="form-control" placeholder="Ej: +56 9 3223 7072" required>
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
              <label class="form-label">Servicio Requerido *</label>
              <select name="servicio" class="form-control" required>
                <option value="Fuga de Gas 24/7">Detección de Fuga de Gas (Urgente)</option>
                <option value="Sellado Prodoral R6-1">Sellado Prodoral R6-1 sin Romper</option>
                <option value="Sello Verde SEC">Certificación Sello Verde SEC</option>
                <option value="Calefont o Caldera">Mantención / Reparación Calefont</option>
                <option value="Destape de Cañerías">Destape de Cañerías / Alcantarillado</option>
                <option value="Gasfitería General">Gasfitería General</option>
              </select>
            </div>

            <div class="form-group">
              <label class="form-label">Mensaje o Detalles Adicionales</label>
              <textarea name="mensaje" class="form-control" rows="3" placeholder="Describe brevemente el problema o requerimiento..."></textarea>
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%;">
              Enviar Solicitud &raquo;
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Google Map Embed Section -->
  <section style="background: var(--bg-surface); padding: 3rem 0;">
    <div class="container">
      <div style="background: #ffffff; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-md); border: 1px solid var(--border-light);">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106518.25737525791!2d-70.73038379435695!3d-33.44888998818816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c5410425e2ff%3A0x302e0773f3ded77!2sSantiago%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses!2scl!4v1700000000000!5m2!1ses!2scl"
          width="100%"
          height="380"
          style="border:0; display: block;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="Mapa Cobertura Gran Santiago">
        </iframe>
      </div>
    </div>
  </section>

  <?php include_once __DIR__ . '/includes/cta-urgencia.php'; ?>
</main>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
