<?php
declare(strict_types=1);
$brandLogoPath = site_logo_path();
$navItems = [
    'home' => ['label' => 'Home', 'href' => 'index.php'],
    'about' => ['label' => 'About', 'href' => 'about.php'],
    'services' => ['label' => 'Services', 'href' => 'services.php'],
    'blog' => ['label' => 'Blog', 'href' => 'blog.php'],
    'contact' => ['label' => 'Contact', 'href' => 'contact.php', 'cta' => true],
];
?>
<header class="site-header">
    <div class="shell header-shell">
        <a class="brand-block" href="index.php">
            <img src="<?php echo e(asset($brandLogoPath)); ?>" alt="Maizura Digital Empowerment Trust logo" class="brand-logo" width="84" height="96" loading="eager" fetchpriority="high">
            <span class="brand-text">
                <span class="brand-name">Maizura</span>
                <span class="brand-tagline">Digital Empowerment Trust</span>
            </span>
        </a>
        <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="primary-nav" data-nav-toggle>
            <span class="nav-toggle__bar"></span>
            <span class="nav-toggle__bar"></span>
            <span class="nav-toggle__bar"></span>
            <span class="sr-only">Toggle navigation</span>
        </button>
        <nav id="primary-nav" class="main-nav" data-nav aria-label="Primary navigation">
            <?php foreach ($navItems as $slug => $item): ?>
                <?php $classes = ['nav-link'];
                if (!empty($item['cta'])) {
                    $classes[] = 'nav-cta';
                }
                if ($pageSlug === $slug) {
                    $classes[] = 'active';
                }
                ?>
                <a href="<?php echo e($item['href']); ?>" class="<?php echo e(implode(' ', $classes)); ?>"><?php echo e($item['label']); ?></a>
            <?php endforeach; ?>
        </nav>
    </div>
</header>
