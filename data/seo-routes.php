<?php
/**
 * SEO Routes Database & Content Profiles Engine
 * Generated for Google Search Coverage & Maximum CTR
 * Gásfiter Certificado - gasfiter-certificado.cl
 */

function get_seo_routes() {
    static $routes = null;
    if ($routes !== null) {
        return $routes;
    }
    
    $json_file = __DIR__ . '/seo-routes.json';
    if (file_exists($json_file)) {
        $content = file_get_contents($json_file);
        $routes = json_decode($content, true);
    }
    
    if (!is_array($routes)) {
        $routes = [];
    }
    
    return $routes;
}

function get_canonical_slug($slug) {
    $clean_slug = strtolower(trim($slug, '/'));
    $slug_no_php = preg_replace('/\.php$/i', '', $clean_slug);
    
    // Canonical aliases map (legacy/ugly slugs -> clean SEO slugs)
    $aliases = [
        'gasfiter-sec-2' => 'gasfiter-sec-urgencias',
        'gasfiter-sec-chile' => 'gasfiter-sec-chile',
        'gasfiter-certificado-2' => 'gasfiter-certificado-urgencias',
        'gasfiter-certificado-gas' => 'gasfiter-certificado-gas-sec',
        'gasfiter-para-fugas-de-gas' => 'gasfiter-certificado-en-fugas-de-gas',
        'gasfiter-certificado-alcantarillado' => 'gasfiter-certificado-destape',
        'gasfiter-para-fugas-de-agua' => 'gasfiter-certificado-en-fugas-de-agua',
        'gasfiter-certificado-agua' => 'gasfiter-certificado-en-fugas-de-agua',
        'gasfiter-agua' => 'gasfiter-para-fugas-de-agua',
        'gasfiter-urgente' => 'gasfiter-urgencia',
        'gasfiter-emergencia' => 'gasfiter-urgencia',
        'gasfiter-ahora' => 'gasfiter-urgencia',
        'gasfiter-tecnico' => 'gasfiter-certificado-tecnico',
        'gasfiter-experto' => 'gasfiter-certificado-tecnico-sec',
        'gasfiter-especialista' => 'gasfiter-certificado-tecnico-sec',
        'gasfiter-recomendado' => 'gasfiter-certificado',
        'gasfiter-chile' => 'gasfiter-sec-chile',
        'gasfiter' => 'gasfiter-a-domicilio',
    ];
    
    if (isset($aliases[$slug_no_php])) {
        return $aliases[$slug_no_php];
    }
    
    return $slug_no_php;
}

function get_seo_route($slug) {
    $routes = get_seo_routes();
    $clean_slug = strtolower(trim($slug, '/'));
    $canonical_slug = get_canonical_slug($clean_slug);
    
    // Direct match on canonical slug
    if (isset($routes[$canonical_slug])) {
        return $routes[$canonical_slug];
    }
    
    // Direct match on original clean slug
    if (isset($routes[$clean_slug])) {
        return $routes[$clean_slug];
    }
    
    // Direct match with .php removed if passed
    $slug_no_php = preg_replace('/\.php$/i', '', $clean_slug);
    if (isset($routes[$slug_no_php])) {
        return $routes[$slug_no_php];
    }
    
    // Dynamic fallback for any other gasfiter-* or comuna slug
    if (str_starts_with($canonical_slug, 'gasfiter-') || str_starts_with($canonical_slug, 'gasfiter')) {
        $human_title = ucwords(str_replace(['gasfiter-', 'certificado-', '-'], ['Gásfiter ', 'Certificado ', ' '], $canonical_slug));
        return [
            'title' => "📞 9 3223 7072 | " . $human_title . " SEC en Santiago 24/7",
            'description' => "Servicio de " . strtolower($human_title) . " certificado SEC en Santiago. Fugas de gas, Sello Verde, calefont y destapes. Llegada 30-45 min. Llama al 9 3223 7072.",
            'h1' => $human_title . ' <span class="highlight-gold">Certificado SEC</span>',
            'badge' => "Servicio Autorizado SEC 24/7",
            'category' => "General",
            'lead' => "Atención especializada y certificada SEC en Santiago. Técnicos de turno permanente con tiempo de llegada estimado de 30 a 45 minutos.",
            'og_image' => "https://gasfiter-certificado.cl/assets/images/og-share-gasfiter.jpg",
            'whatsapp_msg' => "Hola, necesito un " . strtolower($human_title) . " certificado SEC.",
            'bullets' => [
                "Técnicos certificados con registro SEC oficial",
                "Detección y reparación con tecnología no destructiva",
                "Garantía por escrito de cada trabajo",
                "Atención de urgencia 24/7 en toda la RM"
            ],
            'faqs' => [
                ['q' => "¿Cuánto tardan en acudir a mi dirección?", 'a' => "Nuestro tiempo promedio de llegada es de 30 a 45 minutos en todo Santiago."],
                ['q' => "¿Entregan boleta y garantía?", 'a' => "Sí, todos los trabajos cuentan con respaldo formal, boleta/factura y garantía escrita."]
            ]
        ];
    }
    
    return null;
}
?>
