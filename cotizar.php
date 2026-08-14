<?php
$page_title = "📞 9 3223 7072 | Cotizador Online de Gasfitería SEC Santiago";
$page_description = "Calcula el costo estimado de tu servicio de gasfitería, detección de fugas de gas, sellado con Prodoral R6-1 o mantención de calefont en segundos. Llama al 9 3223 7072.";
$page_type = "website";
$canonical_url = "https://gasfiter-certificado.cl/cotizar";
$og_image = "https://gasfiter-certificado.cl/assets/images/og-share-gasfiter.jpg";

include_once __DIR__ . '/includes/header.php';
?>

<main>
  <!-- Cotizador Header -->
  <section class="hero-section" style="padding: 3.5rem 0 4rem;">
    <div class="container" style="text-align: center; max-width: 860px;">
      <span class="hero-badge-live">Cotizador en Línea 24/7</span>
      <h1 class="hero-title" style="font-size: 2.8rem;">
        Cotiza Tu Servicio de <span class="highlight-gold">Gásfiter Certificado</span>
      </h1>
      <p class="hero-lead">
        Calcula un rango de precio estimado de acuerdo al problema específico de tu inmueble y confirma disponibilidad con nuestros técnicos SEC de inmediato.
      </p>
    </div>
  </section>

  <!-- Interactive Quote Section -->
  <section class="section-padding" style="background: #f8fafc;">
    <div class="container container-narrow">
      <div class="calculator-card">
        <div class="calculator-stepper">
          <div class="step-indicator active" data-step="1">
            <span class="step-number">1</span>
            <span>Servicio</span>
          </div>
          <div class="step-indicator" data-step="2">
            <span class="step-number">2</span>
            <span>Ubicación</span>
          </div>
          <div class="step-indicator" data-step="3">
            <span class="step-number">3</span>
            <span>Presupuesto</span>
          </div>
        </div>

        <div class="calculator-body">
          <!-- Step 1 -->
          <div class="calc-step active" data-step="1">
            <h3 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; color: var(--primary-navy); margin-bottom: 1.25rem;">
              Selecciona el servicio que necesitas:
            </h3>

            <div class="calc-options-grid">
              <div class="calc-option-card selected" data-service="fuga-gas">
                <div class="calc-option-icon">🔥</div>
                <div class="calc-option-title">Fuga de Gas / Olor</div>
                <div class="calc-option-desc">Prueba de hermeticidad & detector electrónico / gas trazador</div>
              </div>

              <div class="calc-option-card" data-service="prodoral">
                <div class="calc-option-icon">🧪</div>
                <div class="calc-option-title">Sellado Prodoral R6-1</div>
                <div class="calc-option-desc">Sellado sin romper pisos ni muros</div>
              </div>

              <div class="calc-option-card" data-service="calefont">
                <div class="calc-option-icon">⚡</div>
                <div class="calc-option-title">Calefont / Caldera</div>
                <div class="calc-option-desc">Mantención, calibración o no enciende</div>
              </div>

              <div class="calc-option-card" data-service="sello-verde">
                <div class="calc-option-icon">🛡️</div>
                <div class="calc-option-title">Sello Verde SEC</div>
                <div class="calc-option-desc">Certificación e inspección regularización TC6</div>
              </div>

              <div class="calc-option-card" data-service="destape">
                <div class="calc-option-icon">🚰</div>
                <div class="calc-option-title">Destape Cañerías</div>
                <div class="calc-option-desc">WC, lavaplatos, cámaras con máquina</div>
              </div>

              <div class="calc-option-card" data-service="gasfiteria">
                <div class="calc-option-icon">🔧</div>
                <div class="calc-option-title">Fugas de Agua / Plomería</div>
                <div class="calc-option-desc">Gas trazador, higrómetro, termografía y griferías</div>
              </div>
            </div>

            <div class="calc-actions" style="justify-content: flex-end;">
              <button type="button" class="btn btn-primary btn-calc-next">
                <span>Continuar al Paso 2 &raquo;</span>
              </button>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="calc-step" data-step="2">
            <h3 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; color: var(--primary-navy); margin-bottom: 1.25rem;">
              Indica tu tipo de inmueble y comuna:
            </h3>

            <div style="display: grid; grid-template-columns: 1fr; gap: 1.5rem; margin-bottom: 2rem;">
              <div class="form-group">
                <label class="form-label">Tipo de Inmueble:</label>
                <div style="display: flex; gap: 1.25rem; flex-wrap: wrap; margin-top: 0.5rem;">
                  <label style="display: flex; align-items: center; gap: 0.5rem; font-weight: 600; cursor: pointer;">
                    <input type="radio" name="property_type" value="casa" checked> Casa
                  </label>
                  <label style="display: flex; align-items: center; gap: 0.5rem; font-weight: 600; cursor: pointer;">
                    <input type="radio" name="property_type" value="departamento"> Departamento
                  </label>
                  <label style="display: flex; align-items: center; gap: 0.5rem; font-weight: 600; cursor: pointer;">
                    <input type="radio" name="property_type" value="comunidad"> Comunidad / Edificio
                  </label>
                  <label style="display: flex; align-items: center; gap: 0.5rem; font-weight: 600; cursor: pointer;">
                    <input type="radio" name="property_type" value="comercio"> Local Comercial
                  </label>
                </div>
              </div>

              <div class="form-group">
                <label class="form-label" for="calc-comuna">Comuna en la Región Metropolitana:</label>
                <select id="calc-comuna" class="form-control">
                  <option value="Las Condes">Las Condes</option>
                  <option value="Providencia">Providencia</option>
                  <option value="Santiago Centro" selected>Santiago Centro</option>
                  <option value="Vitacura">Vitacura</option>
                  <option value="Ñuñoa">Ñuñoa</option>
                  <option value="Lo Barnechea">Lo Barnechea</option>
                  <option value="La Reina">La Reina</option>
                  <option value="Peñalolén">Peñalolén</option>
                  <option value="La Florida">La Florida</option>
                  <option value="San Miguel">San Miguel</option>
                  <option value="Maipú">Maipú</option>
                  <option value="Puente Alto">Puente Alto</option>
                  <option value="Macul">Macul</option>
                  <option value="Independencia">Independencia</option>
                  <option value="Recoleta">Recoleta</option>
                  <option value="Colina / Chicureo">Colina / Chicureo</option>
                  <option value="Otra Comuna">Otra Comuna RM</option>
                </select>
              </div>
            </div>

            <div class="calc-actions">
              <button type="button" class="btn btn-outline-primary btn-calc-prev">&laquo; Volver</button>
              <button type="button" class="btn btn-primary btn-calc-next">Ver Diagnóstico y Evaluación &raquo;</button>
            </div>
          </div>

          <!-- Step 3 -->
          <div class="calc-step" data-step="3">
            <h3 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; color: var(--primary-navy); margin-bottom: 1.25rem;">
              Evaluación y Diagnóstico Técnico
            </h3>

            <div class="calc-summary-box">
              <div style="font-size: 0.85rem; text-transform: uppercase; font-weight: 800; color: var(--primary-blue-light); letter-spacing: 0.5px; margin-bottom: 0.35rem;">
                Detalle de tu Solicitud
              </div>
              <h4 class="calc-summary-title" id="summary-service">Detección y Reparación Fuga de Gas</h4>
              <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1rem;">
                <strong>Ubicación:</strong> <span id="summary-comuna">Santiago Centro (CASA)</span>
              </p>
              <div style="background: #ffffff; padding: 1.25rem; border-radius: var(--radius-md); border: 1.5px dashed var(--primary-blue-light); display: inline-block; width: 100%;">
                <div style="font-size: 0.85rem; color: var(--text-muted); font-weight: 700; text-transform: uppercase;">Alcance y Diagnóstico Técnico:</div>
                <div style="font-family: var(--font-heading); font-size: 1.15rem; font-weight: 800; color: var(--primary-navy); margin-top: 0.35rem; line-height: 1.4;" id="summary-range">
                  Prueba de Hermeticidad Normativa + Detector Electrónico / Gas Trazador + Reparación Certificada SEC
                </div>
                <div style="font-size: 0.78rem; color: var(--text-muted); margin-top: 0.5rem; line-height: 1.4;">* Evaluación técnica realizada en terreno por instalador autorizado SEC con instrumental calibrado. Garantía por escrito en todos los trabajos.</div>
              </div>
            </div>

            <div style="display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center;">
              <a href="#" id="btn-calc-whatsapp" target="_blank" class="btn btn-whatsapp btn-lg">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.046.419-.098.824z"/></svg>
                Coordinar Evaluación por WhatsApp
              </a>
              <a href="tel:932237072" class="btn btn-danger btn-lg">
                Llamar Ahora al 9 3223 7072
              </a>
            </div>

            <div class="calc-actions">
              <button type="button" class="btn btn-outline-primary btn-calc-prev">&laquo; Recalcular</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include_once __DIR__ . '/includes/reviews-section.php'; ?>
  <?php include_once __DIR__ . '/includes/cta-urgencia.php'; ?>
</main>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
