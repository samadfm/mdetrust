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
    <link rel="icon" type="image/svg+xml" href="<?php echo e(asset('assets/images/logo.svg')); ?>">
    <link rel="apple-touch-icon" href="<?php echo e(asset('assets/images/logo.svg')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <script defer src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
</head>
<body class="<?php echo e($bodyClass); ?>">
<a class="skip-link" href="#main-content">Skip to content</a>
<?php require __DIR__ . '/site-header.php'; ?>
<main id="main-content" tabindex="-1">
