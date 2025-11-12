<?php
$pageTitle = 'Blog and Awareness Stream · Maizura Digital Empowerment Trust';
$pageDescription = 'Curated insights, open-source tool updates and digital awareness posts from Maizura Digital Empowerment Trust — connecting Aotearoa New Zealand with responsible AI and IT awareness.';
$pageSlug = 'blog';
$pageScripts = '<script defer src="' . e(asset('assets/js/blog-ticker.js')) . '"></script>';
require __DIR__ . '/includes/head.php';
?>
<section class="hero hero--subpage">
    <div class="shell hero-grid">
        <div class="hero-copy">
            <p class="eyebrow">Kōrero · Community · Learning</p>
            <h1>Insights from Maizura</h1>
            <p class="hero-lead">We share daily posts, tool reviews, safety tips, and stories across social channels — tailored to Aotearoa communities. This is where we discuss what's happening in the digital world and how it affects the people we support.</p>
            <div class="hero-metas">
                <span class="meta-pill">Real insights for Aotearoa</span>
                <span class="meta-pill">Open-source focus</span>
                <span class="meta-pill">Community-driven learning</span>
            </div>
        </div>
        <div class="hero-supplement">
            <p class="supplement-title">Connect with us</p>
            <ul class="supplement-links">
                <li><a href="https://www.linkedin.com/company/mdetrust" target="_blank" rel="noopener">LinkedIn<span
                            aria-hidden="true">&rarr;</span></a></li>
                <li><a href="https://tiktok.com/@mdetrust" target="_blank" rel="noopener">TikTok<span aria-hidden="true">&rarr;</span></a>
                </li>
                <li><a href="https://instagram.com/mdetrust" target="_blank" rel="noopener">Instagram<span aria-hidden="true">&rarr;</span></a>
                </li>
                <li><a href="https://youtube.com/@mdetrust" target="_blank" rel="noopener">YouTube<span aria-hidden="true">&rarr;</span></a>
                </li>
            </ul>
        </div>
    </div>
</section>
<div class="ai-ticker" id="aiTicker">
    <span>Loading latest AI, open-source and digital awareness updates...</span>
</div>
<section class="section section-light">
    <div class="shell">
        <h2>Where we share and why</h2>
        <p class="section-intro">We post daily on platforms where Aotearoa whānau actually spend time — LinkedIn, TikTok, Instagram, YouTube. Every post is written for real people, not algorithms. Here's what you'll find:</p>
        <p class="section-note">From a hairdresser asking about email security to a marae coordinator wondering about data storage, we answer real questions in plain language. We break down open-source tools, share stories of digital empowerment, and help people spot scams. Everything is grounded in Aotearoa context — our climate, our values, our challenges.</p>
    </div>
</section>

<section class="section section-light">
    <div class="shell card-grid three">
        <article class="card">
            <h3>LinkedIn — In-depth stories</h3>
            <p>We write longer posts about what's happening in the open-source world, stories of whānau and businesses getting digital confidence, and discussions about AI ethics and responsibility. This is where we go deep.</p>
            <p><a href="https://www.linkedin.com/company/mdetrust" target="_blank" rel="noopener" class="btn small">Read on LinkedIn</a></p>
        </article>
        <article class="card">
            <h3>TikTok — Quick wins</h3>
            <p>60-second awareness clips: how to spot a scam email, why privacy matters, how to set a strong password, should you trust that AI tool? Real situations, real answers, no nonsense.</p>
            <p><a href="https://tiktok.com/@mdetrust" target="_blank" rel="noopener" class="btn small">Follow on TikTok</a>
            </p>
        </article>
        <article class="card">
            <h3>Instagram — Visual guides</h3>
            <p>Infographics, step-by-step visual tutorials, and stories from our community. We break down digital safety and open-source tools into shareable, beautiful visuals.</p>
            <p><a href="https://instagram.com/mdetrust" target="_blank" rel="noopener" class="btn small">Follow on Instagram</a>
            </p>
        </article>
    </div>
</section>

<section class="section section-dark">
    <div class="shell">
        <h2>What you'll learn from us</h2>
        <div class="pill-board">
            <div class="pill-row">
                <span class="pill soft">Spotting scams and staying safe</span>
                <span class="pill soft">Understanding AI honestly</span>
                <span class="pill soft">Open-source tool reviews</span>
            </div>
            <div class="pill-row">
                <span class="pill soft">Privacy for whānau</span>
                <span class="pill soft">Digital confidence building</span>
                <span class="pill soft">Community tech stories</span>
            </div>
            <div class="pill-row">
                <span class="pill soft">Business automation ideas</span>
                <span class="pill soft">Kids &amp; screen time wisdom</span>
                <span class="pill soft">Building independent tech</span>
            </div>
        </div>
        <p class="section-note section-note--spaced">Every piece of content we create is a conversation, not a lecture. We welcome your questions, your stories, and your feedback. Follow, comment, and tag us — let's learn together as a community.</p>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
