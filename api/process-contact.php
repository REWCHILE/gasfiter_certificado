<?php
/**
 * AJAX Contact & Lead Processing Endpoint
 * Gásfiter Certificado - gasfiter-certificado.cl
 */

header('Content-Type: application/json; charset=utf-8');

// Allow only POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  echo json_encode([
    'success' => false,
    'message' => 'Método de solicitud no permitido.'
  ]);
  exit;
}

// Honeypot anti-spam verification
if (!empty($_POST['website_hp'])) {
  echo json_encode([
    'success' => false,
    'message' => 'Solicitud rechazada.'
  ]);
  exit;
}

// Extract and sanitize input data
$nombre = isset($_POST['nombre']) ? htmlspecialchars(trim($_POST['nombre'])) : '';
$telefono = isset($_POST['telefono']) ? htmlspecialchars(trim($_POST['telefono'])) : '';
$comuna = isset($_POST['comuna']) ? htmlspecialchars(trim($_POST['comuna'])) : 'Santiago';
$servicio = isset($_POST['servicio']) ? htmlspecialchars(trim($_POST['servicio'])) : 'Gasfitería General';
$mensaje = isset($_POST['mensaje']) ? htmlspecialchars(trim($_POST['mensaje'])) : '';
$inmueble = isset($_POST['inmueble']) ? htmlspecialchars(trim($_POST['inmueble'])) : 'Casa/Depto';

// Basic validation
if (empty($nombre) || empty($telefono)) {
  echo json_encode([
    'success' => false,
    'message' => 'Por favor completa al menos tu nombre y número de teléfono.'
  ]);
  exit;
}

// Prepare lead record
$lead = [
  'id' => uniqid('lead_', true),
  'fecha' => date('Y-m-d H:i:s'),
  'nombre' => $nombre,
  'telefono' => $telefono,
  'comuna' => $comuna,
  'servicio' => $servicio,
  'inmueble' => $inmueble,
  'mensaje' => $mensaje,
  'ip' => $_SERVER['REMOTE_ADDR'] ?? 'desconocida',
  'estado' => 'nuevo'
];

// Configuration: Destination Email for Lead Notifications
$destinatario_email = 'satorisatorchile@gmail.com'; // Puedes cambiarlo o agregar varios separados por coma

// Send Email Notification
$asunto = "🚨 NUEVO LEAD WEB SEC: {$servicio} - {$nombre} ({$comuna})";

$cuerpo_html = "
<!DOCTYPE html>
<html lang='es'>
<head>
  <meta charset='UTF-8'>
  <style>
    body { font-family: 'Segoe UI', Arial, sans-serif; background-color: #f8fafc; margin: 0; padding: 20px; color: #0f172a; }
    .card { max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 12px; border: 1px solid #e2e8f0; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); }
    .header { background: #0f2b5c; color: #ffffff; padding: 20px; text-align: center; }
    .header h2 { margin: 0; font-size: 20px; }
    .badge { display: inline-block; background: #d9381e; color: #ffffff; padding: 4px 10px; border-radius: 20px; font-size: 12px; font-weight: bold; margin-top: 8px; }
    .content { padding: 25px; }
    .field { margin-bottom: 15px; border-bottom: 1px solid #f1f5f9; padding-bottom: 10px; }
    .field-label { font-weight: bold; color: #64748b; font-size: 12px; text-transform: uppercase; }
    .field-value { font-size: 16px; color: #0f172a; margin-top: 3px; font-weight: 600; }
    .btn-call { display: inline-block; background: #d9381e; color: #ffffff !important; padding: 12px 24px; border-radius: 30px; text-decoration: none; font-weight: bold; margin-top: 15px; }
    .btn-wa { display: inline-block; background: #25d366; color: #ffffff !important; padding: 12px 24px; border-radius: 30px; text-decoration: none; font-weight: bold; margin-top: 15px; margin-left: 10px; }
    .footer { background: #f1f5f9; padding: 15px; text-align: center; font-size: 12px; color: #64748b; }
  </style>
</head>
<body>
  <div class='card'>
    <div class='header'>
      <h2>Central Gásfiter Certificado</h2>
      <span class='badge'>NUEVA SOLICITUD DE SERVICIO</span>
    </div>
    <div class='content'>
      <div class='field'>
        <div class='field-label'>Cliente / Empresa:</div>
        <div class='field-value'>{$nombre}</div>
      </div>
      <div class='field'>
        <div class='field-label'>Teléfono de Contacto:</div>
        <div class='field-value'><a href='tel:{$telefono}' style='color: #d9381e; text-decoration: none;'>{$telefono}</a></div>
      </div>
      <div class='field'>
        <div class='field-label'>Comuna:</div>
        <div class='field-value'>{$comuna}</div>
      </div>
      <div class='field'>
        <div class='field-label'>Servicio Solicitado:</div>
        <div class='field-value' style='color: #0f2b5c;'>{$servicio}</div>
      </div>
      <div class='field'>
        <div class='field-label'>Tipo de Inmueble:</div>
        <div class='field-value'>{$inmueble}</div>
      </div>
      <div class='field'>
        <div class='field-label'>Detalle / Mensaje:</div>
        <div class='field-value' style='font-weight: normal; background: #f8fafc; padding: 10px; border-radius: 6px;'>".(!empty($mensaje) ? $mensaje : 'Sin mensaje adicional')."</div>
      </div>
      <div style='text-align: center; margin-top: 20px;'>
        <a href='tel:{$telefono}' class='btn-call'>📞 Llamar al Cliente</a>
        <a href='https://wa.me/".preg_replace('/[^0-9]/', '', $telefono)."?text=".urlencode("Hola {$nombre}, te contactamos de Central Gásfiter Certificado respecto a tu solicitud de {$servicio}.")." ' class='btn-wa'>💬 Abrir WhatsApp</a>
      </div>
    </div>
    <div class='footer'>
      Enviado automáticamente desde <strong>gasfiter-certificado.cl</strong> | ".date('d/m/Y H:i:s')."
    </div>
  </div>
</body>
</html>
";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: Gásfiter Certificado <notificaciones@gasfiter-certificado.cl>\r\n";
$headers .= "Reply-To: {$nombre} <notificaciones@gasfiter-certificado.cl>\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Attempt to send email
@mail($destinatario_email, $asunto, $cuerpo_html, $headers);

// Save to data/leads.json as local backup
$dataFile = __DIR__ . '/../data/leads.json';
$leads = [];

if (file_exists($dataFile)) {
  $content = file_get_contents($dataFile);
  $leads = json_decode($content, true);
  if (!is_array($leads)) {
    $leads = [];
  }
}

$leads[] = $lead;
file_put_contents($dataFile, json_encode($leads, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

// Return success response
echo json_encode([
  'success' => true,
  'message' => '¡Solicitud recibida con éxito! Un gásfiter certificado te contactará de inmediato.',
  'lead_id' => $lead['id']
]);

