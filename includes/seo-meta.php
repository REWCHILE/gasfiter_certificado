<?php
/**
 * SEO Meta Tags & Schema.org JSON-LD Generator
 * Gásfiter Certificado - gasfiter-certificado.cl
 * Optimized for Google PageSpeed & Facebook Sharing Debugger
 */

// Default SEO values
$site_name = "Gásfiter Certificado Chile";
$site_phone = "+56 9 3223 7072";
$site_phone_raw = "56932237072";
$site_phone_display = "9 3223 7072";
$site_domain = "https://gasfiter-certificado.cl";

// Default page variables
$page_title = isset($page_title) ? $page_title : "📞 9 3223 7072 | Gásfiter Certificado SEC en Santiago 24/7";
$page_description = isset($page_description) ? $page_description : "Central Gásfiter Certificado SEC en Santiago. Detección y reparación de fugas de gas, sellado con Prodoral R6-1 sin picar, mantención de calefont y destapes. Tiempo de respuesta: 30 a 45 min. Llama al 9 3223 7072.";

// Compute clean canonical URL without .php
if (!isset($canonical_url)) {
    $req_uri = strtok($_SERVER['REQUEST_URI'] ?? '', '?');
    $clean_path = preg_replace('/\.php$/i', '', $req_uri);
    if ($clean_path === '' || $clean_path === '/index') {
        $clean_path = '/';
    }
    $canonical_url = rtrim($site_domain, '/') . $clean_path;
}

$og_image = isset($og_image) ? $og_image : $site_domain . "/assets/images/og-share-gasfiter.jpg";
$og_image_width = isset($og_image_width) ? $og_image_width : "1200";
$og_image_height = isset($og_image_height) ? $og_image_height : "630";
$og_image_alt = isset($og_image_alt) ? $og_image_alt : "Gásfiter Certificado SEC - Atención de Urgencias 24/7 en Santiago";
$page_type = isset($page_type) ? $page_type : "website";
?>

<!-- Primary Meta Tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($page_title); ?></title>
<meta name="title" content="<?php echo htmlspecialchars($page_title); ?>">
<meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
<meta name="keywords" content="gasfiter, gasfiter certificado, gasfiter sec, central gasfiter, casa del gasfiter, fuga de gas, fuga gas, prodoral, sellado prodoral r6-1, prodoral r6, instalacion de calefont, reparacion calefont, plomeria, fontanero, sello verde sec, gas natural, gas licuado, santiago chile">
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
<meta name="language" content="Spanish">
<meta name="author" content="Central Gásfiter Certificado SEC Chile">
<link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">
<link rel="alternate" type="text/plain" href="llms.txt" title="Contexto para Modelos de Lenguaje / IA">

<!-- Open Graph / Facebook / WhatsApp Sharing Optimization -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?php echo htmlspecialchars($site_name); ?>">
<meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
<meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
<meta property="og:image" content="<?php echo htmlspecialchars($og_image); ?>">
<meta property="og:image:secure_url" content="<?php echo htmlspecialchars($og_image); ?>">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:width" content="<?php echo htmlspecialchars($og_image_width); ?>">
<meta property="og:image:height" content="<?php echo htmlspecialchars($og_image_height); ?>">
<meta property="og:image:alt" content="<?php echo htmlspecialchars($og_image_alt); ?>">
<meta property="og:locale" content="es_CL">

<!-- Twitter Cards -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
<meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
<meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
<meta name="twitter:image" content="<?php echo htmlspecialchars($og_image); ?>">
<meta name="twitter:image:alt" content="<?php echo htmlspecialchars($og_image_alt); ?>">

<!-- Geo Tags for Local SEO in Santiago & Región Metropolitana -->
<meta name="geo.region" content="CL-RM">
<meta name="geo.placename" content="Santiago, Chile">
<meta name="geo.position" content="-33.448890;-70.669265">
<meta name="ICBM" content="-33.448890, -70.669265">

<!-- Schema.org JSON-LD Structured Data for Rich Snippets -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "PlumbingService",
      "@id": "<?php echo $site_domain; ?>/#organization",
      "name": "Central Gásfiter Certificado SEC Chile",
      "url": "<?php echo $site_domain; ?>/",
      "logo": "<?php echo $site_domain; ?>/assets/images/logo.webp",
      "image": "<?php echo $site_domain; ?>/assets/images/hero-home-main.webp",
      "telephone": "+56932237072",
      "priceRange": "$$",
      "currenciesAccepted": "CLP",
      "paymentAccepted": "Efectivo, Tarjeta de Débito, Tarjeta de Crédito, Transferencia Bancaria",
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
            "Sunday"
          ],
          "opens": "00:00",
          "closes": "23:59"
        }
      ],
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Región Metropolitana",
        "addressLocality": "Santiago",
        "addressRegion": "Región Metropolitana",
        "postalCode": "8320000",
        "addressCountry": "CL"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": -33.448890,
        "longitude": -70.669265
      },
      "areaServed": [
        "Las Condes",
        "Providencia",
        "Santiago Centro",
        "Vitacura",
        "Ñuñoa",
        "Lo Barnechea",
        "La Reina",
        "Peñalolén",
        "La Florida",
        "San Miguel",
        "Maipú",
        "Puente Alto",
        "Macul",
        "Independencia",
        "Recoleta",
        "Toda la Región Metropolitana"
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Servicios de Gasfitería Certificada SEC",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Detección y Reparación de Fugas de Gas 24/7"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Sellado de Fugas de Gas con Prodoral R6-1 sin Picar"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Certificación Sello Verde SEC e Inspecciones TC6"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Mantención, Reparación e Instalación de Calefont"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Destape de Cañerías y Alcantarillado"
            }
          }
        ]
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "287",
        "bestRating": "5",
        "worstRating": "1"
      }
    },
    {
      "@type": "WebSite",
      "@id": "<?php echo $site_domain; ?>/#website",
      "url": "<?php echo $site_domain; ?>/",
      "name": "Gásfiter Certificado Chile",
      "publisher": {
        "@id": "<?php echo $site_domain; ?>/#organization"
      }
    }
  ]
}
</script>
