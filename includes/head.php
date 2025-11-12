<?php
declare(strict_types=1);
require_once __DIR__ . '/init.php';

$pageTitle = $pageTitle ?? 'Maizura Digital Empowerment Trust';
$pageDescription = $pageDescription ?? 'Maizura Digital Empowerment Trust helps people and small businesses across Aotearoa New Zealand with digital awareness, open-source tools, and AI-powered workflows.';
$pageSlug = $pageSlug ?? 'home';
$bodyClass = 'page-' . preg_replace('/[^a-z0-9\-]+/i', '-', $pageSlug);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo e($pageTitle); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo e($pageDescription); ?>">
    <meta name="theme-color" content="#2563eb">
    <meta name="color-scheme" content="light dark">

    <!-- Open Graph / Social Media -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://maizura.org.nz/">
    <meta property="og:title" content="<?php echo e($pageTitle); ?>">
    <meta property="og:description" content="<?php echo e($pageDescription); ?>">
    <meta property="og:locale" content="en_NZ">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@mdetrust">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/images/favicon.png')); ?>">
    <link rel="apple-touch-icon" href="<?php echo e(asset('assets/images/apple-touch-icon.png')); ?>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <script defer src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
</head>
<body class="<?php echo e($bodyClass); ?>">
<a class="skip-link" href="#main-content">Skip to content</a>
<?php require __DIR__ . '/site-header.php'; ?>
<main id="main-content" tabindex="-1">
