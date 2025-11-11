<?php
declare(strict_types=1);

// Harden session cookies before starting the session.
if (session_status() === PHP_SESSION_NONE) {
    $secure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'domain' => '',
        'secure' => $secure,
        'httponly' => true,
        'samesite' => 'Strict',
    ]);
    session_start();
}

// Security headers applied consistently across the site.
$securityHeaders = [
    'X-Frame-Options' => 'DENY',
    'X-Content-Type-Options' => 'nosniff',
    'Referrer-Policy' => 'strict-origin-when-cross-origin',
    'Permissions-Policy' => 'microphone=(), camera=(), geolocation=()',
    'X-Permitted-Cross-Domain-Policies' => 'none',
    'X-Download-Options' => 'noopen',
    'Cross-Origin-Opener-Policy' => 'same-origin',
    'Cross-Origin-Resource-Policy' => 'same-origin',
    'Strict-Transport-Security' => 'max-age=63072000; includeSubDomains; preload',
    'Content-Security-Policy' => "default-src 'self'; img-src 'self' data:; script-src 'self'; connect-src 'self' https://api.rss2json.com; style-src 'self'; font-src 'self'; base-uri 'self'; form-action 'self'; frame-ancestors 'none'",
];

if (!headers_sent()) {
    foreach ($securityHeaders as $header => $value) {
        header(sprintf('%s: %s', $header, $value));
    }
}

if (!function_exists('e')) {
    function e(string $value): string
    {
        return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }
}

if (!function_exists('asset')) {
    function asset(string $path): string
    {
        $trimmed = ltrim($path, '/');
        $fullPath = __DIR__ . '/../' . $trimmed;
        $version = file_exists($fullPath) ? (string) filemtime($fullPath) : (string) time();
        return $trimmed . '?v=' . $version;
    }
}
