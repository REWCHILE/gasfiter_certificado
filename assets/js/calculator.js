/**
 * Interactive Quote Calculator - Gásfiter Certificado
 * Step 1: Select Problem/Service
 * Step 2: Property Type & Comuna
 * Step 3: Instant Estimate & WhatsApp Send
 */

document.addEventListener('DOMContentLoaded', () => {
  initCalculator();
});

function initCalculator() {
  const container = document.querySelector('.calculator-card');
  if (!container) return;

  let currentStep = 1;
  const quoteData = {
    service: 'fuga-gas',
    serviceName: 'Detección y Reparación Fuga de Gas',
    urgency: 'alta',
    property: 'casa',
    comuna: 'Santiago Centro',
    scopeDesc: 'Prueba de Hermeticidad + Detector de Fugas Electrónico / Gas Trazador + Reparación SEC'
  };

  const serviceScopeMap = {
    'fuga-gas': { 
      name: 'Detección y Reparación de Fuga de Gas', 
      desc: 'Prueba de Hermeticidad Normativa + Detector Electrónico / Gas Trazador + Reparación Certificada SEC' 
    },
    'prodoral': { 
      name: 'Sellado de Cañerías con Prodoral R200 (Sin Picar)', 
      desc: 'Sellado Polimérico Alemán sin Romper Muros ni Pisos + Prueba de Hermeticidad (Garantía 5 años)' 
    },
    'calefont': { 
      name: 'Mantención / Reparación de Calefont Multimarca', 
      desc: 'Diagnóstico Técnico en Terreno + Calibración de Quemadores, Válvula de Agua/Gas y Repuestos Originales' 
    },
    'sello-verde': { 
      name: 'Certificación e Inspección Sello Verde SEC', 
      desc: 'Inspección Normativa Completa + Informe Técnico, Regularización y Tramitación de Declaración TC6' 
    },
    'destape': { 
      name: 'Destape de Cañería / Alcantarillado Sanitario', 
      desc: 'Desobstrucción Mecanizada con Máquina Eléctrica de Espirales de Alto Poder + Limpieza Sanitaria' 
    },
    'gasfiteria': { 
      name: 'Detección de Fugas de Agua e Instalaciones Sanitarias', 
      desc: 'Detección No Destructiva (Gas Trazador, Higrómetro, Ultrasonido y Termografía) + Reparación Especializada' 
    }
  };

  const steps = container.querySelectorAll('.calc-step');
  const stepIndicators = container.querySelectorAll('.step-indicator');
  const nextBtns = container.querySelectorAll('.btn-calc-next');
  const prevBtns = container.querySelectorAll('.btn-calc-prev');
  const optionCards = container.querySelectorAll('.calc-option-card');
  const comunaSelect = container.querySelector('#calc-comuna');
  const propertyRadios = container.querySelectorAll('input[name="property_type"]');
  const sendWhatsAppBtn = container.querySelector('#btn-calc-whatsapp');

  // Handle service card selection
  optionCards.forEach(card => {
    card.addEventListener('click', () => {
      optionCards.forEach(c => c.classList.remove('selected'));
      card.classList.add('selected');
      const serviceVal = card.getAttribute('data-service');
      if (serviceScopeMap[serviceVal]) {
        quoteData.service = serviceVal;
        quoteData.serviceName = serviceScopeMap[serviceVal].name;
        quoteData.scopeDesc = serviceScopeMap[serviceVal].desc;
      }
    });
  });

  // Handle next step transitions
  nextBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      if (currentStep < 3) {
        currentStep++;
        updateStepUI();
      }
    });
  });

  // Handle previous step
  prevBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      if (currentStep > 1) {
        currentStep--;
        updateStepUI();
      }
    });
  });

  function updateStepUI() {
    steps.forEach((step, index) => {
      if (index + 1 === currentStep) {
        step.classList.add('active');
      } else {
        step.classList.remove('active');
      }
    });

    stepIndicators.forEach((ind, index) => {
      if (index + 1 === currentStep) {
        ind.classList.add('active');
      } else {
        ind.classList.remove('active');
      }
    });

    // Update Summary on Step 3
    if (currentStep === 3) {
      if (comunaSelect) {
        quoteData.comuna = comunaSelect.value || 'Santiago';
      }
      propertyRadios.forEach(radio => {
        if (radio.checked) {
          quoteData.property = radio.value;
        }
      });

      const summaryService = container.querySelector('#summary-service');
      const summaryComuna = container.querySelector('#summary-comuna');
      const summaryScope = container.querySelector('#summary-range') || container.querySelector('#summary-scope');

      if (summaryService) summaryService.textContent = quoteData.serviceName;
      if (summaryComuna) summaryComuna.textContent = `${quoteData.comuna} (${quoteData.property.toUpperCase()})`;
      if (summaryScope) summaryScope.textContent = quoteData.scopeDesc;

      if (sendWhatsAppBtn) {
        const text = `¡Hola Central Gásfiter Certificado! 👋\nSolicito evaluación técnica para:\n\n🛠️ *Servicio:* ${quoteData.serviceName}\n📍 *Comuna:* ${quoteData.comuna}\n🏠 *Inmueble:* ${quoteData.property.toUpperCase()}\n📋 *Alcance Requerido:* ${quoteData.scopeDesc}\n\n¿Tienen técnico SEC disponible para coordinar visita en terreno?`;
        sendWhatsAppBtn.href = `https://wa.me/56932237072?text=${encodeURIComponent(text)}`;
      }
    }
  }
}
