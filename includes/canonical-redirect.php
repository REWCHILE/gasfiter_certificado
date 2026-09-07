<?php
/**
 * Canonical 301 Redirect Engine
 * Forces HTTPS and non-WWW across all environments (Apache, Nginx, LiteSpeed, Cloudflare)
 * Gásfiter Certificado - gasfiter-certificado.cl
 */

if (!empty($_SERVER['HTTP_HOST'])) {
    $host = $_SERVER['HTTP_HOST'];
    
    // Skip local development domains
    $is_local = (
        strpos($host, 'localhost') !== false ||
        strpos($host, '.test') !== false ||
        strpos($host, '127.0.0.1') !== false
    );

    if (!$is_local) {
        $is_www = (stripos($host, 'www.') === 0);
        
        // Detect if request is not HTTPS (checking standard HTTPS and reverse-proxy headers)
        $is_http = (
            (!isset($_SERVER['HTTPS']) || strtolower($_SERVER['HTTPS']) === 'off' || empty($_SERVER['HTTPS'])) &&
            (!isset($_SERVER['HTTP_X_FORWARDED_PROTO']) || strtolower($_SERVER['HTTP_X_FORWARDED_PROTO']) !== 'https')
        );

        if ($is_www || $is_http) {
            $clean_host = preg_replace('/^www\./i', '', $host);
            $request_uri = $_SERVER['REQUEST_URI'] ?? '/';
            
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: https://{$clean_host}{$request_uri}");
            exit;
        }
    }
}
