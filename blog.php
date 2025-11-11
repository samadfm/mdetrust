<?php
$pageTitle = 'Blog and Awareness Stream · Maizura Digital Empowerment Trust';
$pageDescription = 'Curated insights, open-source tool updates and digital awareness posts from Maizura Digital Empowerment Trust — connecting Aotearoa New Zealand with responsible AI and IT awareness.';
$pageSlug = 'blog';
$pageScripts = '<script defer src="' . e(asset('assets/js/blog-ticker.js')) . '"></script>';
require __DIR__ . '/includes/head.php';
?>
<div class="ai-ticker" id="aiTicker">
    <span>Loading latest AI, open-source and digital awareness updates...</span>
</div>
<section class="section section-light">
    <div class="shell">
        <h1>Blog and awareness stream</h1>
        <p class="section-intro">Most of our content currently lives on platforms such as
            <a href="https://www.linkedin.com/company/mdetrust" target="_blank" rel="noopener">LinkedIn</a>,
            <a href="https://tiktok.com/@mdetrust" target="_blank" rel="noopener">TikTok</a>, and
            <a href="https://instagram.com/mdetrust" target="_blank" rel="noopener">Instagram</a>. This page collects those
            streams and highlights key awareness topics for people across Aotearoa New Zealand.</p>
        <p class="section-note">Every post, video, or short clip we publish is created to encourage responsible use of
            technology in everyday life — from small businesses adopting open-source tools to families learning safe AI
            practices. Our aim is to make digital awareness part of New Zealand’s community culture.</p>
    </div>
</section>

<section class="section section-light">
    <div class="shell card-grid three">
        <article class="card">
            <h3>LinkedIn insights</h3>
            <p>Daily write-ups on open-source projects, AI tools we explore, and digital transformation stories from New Zealand
                businesses.</p>
            <p><a href="https://www.linkedin.com/company/mdetrust" target="_blank" rel="noopener" class="btn small">Visit
                    LinkedIn</a></p>
        </article>
        <article class="card">
            <h3>TikTok updates</h3>
            <p>Quick awareness clips on scams, privacy, and digital wellbeing – short-form videos that make IT learning fun and
                easy.</p>
            <p><a href="https://tiktok.com/@mdetrust" target="_blank" rel="noopener" class="btn small">See TikTok feed</a>
            </p>
        </article>
        <article class="card">
            <h3>Instagram reels</h3>
            <p>Visual snippets that share quick IT tips, open-source tools, and AI awareness for young audiences in Aotearoa.</p>
            <p><a href="https://instagram.com/mdetrust" target="_blank" rel="noopener" class="btn small">View on Instagram</a>
            </p>
        </article>
    </div>
</section>

<section class="section section-dark">
    <div class="shell">
        <h2>Topics we care about</h2>
        <div class="pill-board">
            <div class="pill-row">
                <span class="pill soft">Safe use of AI tools</span>
                <span class="pill soft">Password &amp; identity hygiene</span>
                <span class="pill soft">Open-source platforms</span>
            </div>
            <div class="pill-row">
                <span class="pill soft">Digital wellbeing for families</span>
                <span class="pill soft">Low-cost automation ideas</span>
                <span class="pill soft">Privacy-aware hosting</span>
            </div>
        </div>
        <p class="section-note section-note--spaced">Over time, we plan to publish long-form articles directly on this
            website. Until then, this page serves as a hub for all the content we share across platforms, helping New
            Zealanders access everything in one place.</p>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
