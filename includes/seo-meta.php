<?php
/**
 * SEO Meta Tags & Schema.org JSON-LD Generator
 * Gásfiter Certificado - gasfiter-certificado.cl
 */

// Default SEO values if not provided by the individual page
$site_name = "Gásfiter Certificado";
$site_phone = "+56 9 3223 7072";
$site_phone_raw = "56932237072";
$site_phone_display = "9 3223 7072";
$site_domain = "https://gasfiter-certificado.cl";

$page_title = isset($page_title) ? $page_title : "Gásfiter Certificado SEC en Santiago | Detección Fugas de Gas 24/7";
$page_description = isset($page_description) ? $page_description : "Central Gásfiter Certificado SEC en Santiago. Detección y reparación de fugas de gas, sellado con Prodoral sin picar, mantención de calefont y destapes. Llegamos en 45 min. Llama al 9 3223 7072.";
$canonical_url = isset($canonical_url) ? $canonical_url : $site_domain . $_SERVER['REQUEST_URI'];
$og_image = isset($og_image) ? $og_image : $site_domain . "/assets/images/hero-gasfiter.png";
$page_type = isset($page_type) ? $page_type : "home";
?>

<!-- Primary Meta Tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($page_title); ?></title>
<meta name="title" content="<?php echo htmlspecialchars($page_title); ?>">
<meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
<meta name="keywords" content="gasfiter, gasfiter certificado, gasfiter sec, central gasfiter, casa del gasfiter, fuga de gas, fuga gas, prodoral, sellado prodoral r200, instalacion de calefont, reparacion calefont, plomeria, fontanero, sello verde sec, gas natural, gas licuado, santiago chile">
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
<meta name="language" content="Spanish">
<meta name="author" content="Central Gásfiter Certificado SEC Chile">
<link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">

<!-- Open Graph / Facebook / WhatsApp -->
<meta property="og:type" content="business.business">
<meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
<meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
<meta property="og:image" content="<?php echo htmlspecialchars($og_image); ?>">
<meta property="og:locale" content="es_CL">
<meta property="og:site_name" content="Gásfiter Certificado Chile">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
<meta property="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
<meta property="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
<meta property="twitter:image" content="<?php echo htmlspecialchars($og_image); ?>">

<!-- Geo Tags for Local SEO in Santiago & RM -->
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
      "url": "<?php echo $site_domain; ?>",
      "logo": "<?php echo $site_domain; ?>/assets/images/logo.jpg",
      "image": "<?php echo $site_domain; ?>/assets/images/hero-gasfiter.png",
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
              "name": "Sellado de Fugas de Gas con Prodoral R200 sin Picar"
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
      "url": "<?php echo $site_domain; ?>",
      "name": "Gásfiter Certificado Chile",
      "publisher": {
        "@id": "<?php echo $site_domain; ?>/#organization"
      }
    }
  ]
}
</script>
