<?php
// Security headers
header("X-Frame-Options: DENY");
header("X-Content-Type-Options: nosniff");
header("Referrer-Policy: strict-origin-when-cross-origin");
header("Permissions-Policy: microphone=(), camera=(), geolocation=()");
function safe($v){ return htmlspecialchars($v,ENT_QUOTES,'UTF-8'); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Blog and Awareness Stream · Maizura Digital Empowerment Trust</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Curated insights, open-source tool updates and digital awareness posts from Maizura Digital Empowerment Trust — connecting Aotearoa New Zealand with responsible AI and IT awareness.">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" type="image/png" href="assets/images/logo.png">
  <style>
    .page-blog h1 {
      background: linear-gradient(120deg,var(--accent-blue),var(--accent-pink),var(--accent-gold));
      -webkit-background-clip:text;
      -webkit-text-fill-color:transparent;
      font-weight:800;
      font-size:clamp(2rem,4vw,2.6rem);
      margin-bottom:1rem;
      text-transform:capitalize;
    }

    /* Gradient headings for cards */
    .card h3 {
      font-size: 1.4rem;
      font-weight: 700;
      background: linear-gradient(120deg,var(--accent-blue),var(--accent-pink),var(--accent-gold));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 0.5rem;
    }

    /* Blue-light buttons (like Blog tab) */
    .btn.small {
      background: rgba(37,99,235,0.1);
      border: 1px solid rgba(37,99,235,0.3);
      color: var(--accent-blue);
      padding: 0.4rem 0.9rem;
      border-radius: 8px;
      font-weight: 600;
      font-size: 0.85rem;
      text-decoration: none;
      transition: all 0.3s ease;
      display: inline-block;
    }
    .btn.small:hover {
      background: linear-gradient(120deg,var(--accent-blue),var(--accent-pink));
      color: #fff;
      box-shadow: 0 0 8px rgba(0,0,0,0.15);
      border: none;
    }

    /* Visible colorful pills */
    .section-dark .pill.soft {
      background: linear-gradient(120deg,var(--accent-blue),var(--accent-pink));
      color:#fff;
      border:none;
      font-weight:500;
      box-shadow:0 1px 4px rgba(0,0,0,0.2);
    }

    /* Ticker */
    .ai-ticker {
      overflow:hidden;
      white-space:nowrap;
      background:linear-gradient(90deg,var(--accent-blue),var(--accent-pink));
      color:#fff;
      padding:.6rem 0;
      font-size:.9rem;
    }
    .ai-ticker span {
      display:inline-block;
      padding-right:3rem;
      animation:ticker-scroll 120s linear infinite;
    }
    @keyframes ticker-scroll {
      0% { transform:translateX(100%); }
      100% { transform:translateX(-100%); }
    }

    .section-light .card-grid { margin-top: 1rem; }
  </style>
</head>
<body class="page-blog">

<header class="site-header">
  <div class="shell">
    <div class="brand-block">
      <img src="assets/images/logo.png" alt="Maizura logo" class="brand-logo">
      <div class="brand-text">
        <span class="brand-name">Maizura</span>
        <span class="brand-tagline">Digital Empowerment Trust</span>
      </div>
    </div>
    <nav class="main-nav">
      <a href="index.php" class="nav-link">Home</a>
      <a href="about.php" class="nav-link">About</a>
      <a href="services.php" class="nav-link">Services</a>
      <a href="blog.php" class="nav-link active">Blog</a>
      <a href="contact.php" class="nav-link nav-cta">Contact</a>
    </nav>
  </div>
</header>

<div class="ai-ticker" id="aiTicker">
  <span>Loading latest AI, open-source and digital awareness updates...</span>
</div>

<main>
  <section class="section section-light">
    <div class="shell">
      <h1>Blog and Awareness Stream</h1>

      <p class="section-intro">
        Most of our content currently lives on platforms such as
        <a href="https://www.linkedin.com/company/mdetrust" target="_blank">LinkedIn</a>,
        <a href="https://tiktok.com/@mdetrust" target="_blank">TikTok</a>,
        and <a href="https://instagram.com/mdetrust" target="_blank">Instagram</a>.
        This page collects those streams and highlights key awareness topics for people across Aotearoa New Zealand.
      </p>

      <p style="margin-top:1rem;color:var(--text-soft);max-width:750px;">
        Every post, video, or short clip we publish is created to encourage responsible use of technology in everyday life — from small businesses adopting open-source tools to families learning safe AI practices. Our aim is to make digital awareness part of New Zealand’s community culture.
      </p>
    </div>
  </section>

  <section class="section section-light">
    <div class="shell card-grid three">
      <article class="card">
        <h3>LinkedIn Insights</h3>
        <p>Daily write-ups on open-source projects, AI tools we explore, and digital transformation stories from New Zealand businesses.</p>
        <p><a href="https://www.linkedin.com/company/mdetrust" target="_blank" class="btn small">Visit LinkedIn</a></p>
      </article>

      <article class="card">
        <h3>TikTok Updates</h3>
        <p>Quick awareness clips on scams, privacy, and digital wellbeing short-form videos that make IT learning fun and easy.</p>
        <p><a href="https://tiktok.com/@mdetrust" target="_blank" class="btn small">See TikTok Feed</a></p>
      </article>

      <article class="card">
        <h3>Instagram Reels</h3>
        <p>Visual snippets that share quick IT tips, open-source tools, and AI awareness for young audiences in Aotearoa.</p>
        <p><a href="https://instagram.com/mdetrust" target="_blank" class="btn small">View on Instagram</a></p>
      </article>
    </div>
  </section>

  <section class="section section-dark">
    <div class="shell">
      <h2>Topics we care about</h2>
      <div class="pill-board">
        <div class="pill-row">
          <span class="pill soft">Safe use of AI tools</span>
          <span class="pill soft">Password & identity hygiene</span>
          <span class="pill soft">Open-source platforms</span>
        </div>
        <div class="pill-row">
          <span class="pill soft">Digital wellbeing for families</span>
          <span class="pill soft">Low-cost automation ideas</span>
          <span class="pill soft">Privacy-aware hosting</span>
        </div>
      </div>
      <p style="margin-top:1.6rem;">
        Over time, we plan to publish long-form articles directly on this website. Until then, this page serves as a hub for all the content we share across platforms, helping New Zealanders access everything in one place.
      </p>
    </div>
  </section>
</main>

<footer class="site-footer">
  <div class="shell footer-grid">
    <div class="footer-col">
      <strong>Maizura Digital Empowerment Trust</strong>
      <p>Curating practical digital awareness content for communities around New Zealand.</p>
    </div>
    <div class="footer-col">
      <span class="footer-label">Quick links</span>
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="services.php">Services</a>
      <a href="contact.php">Contact</a>
    </div>
    <div class="footer-col">
      <span class="footer-label">Connect</span>
      <a href="mailto:info@maizura.org.nz">info@maizura.org.nz</a>
      <a href="https://www.linkedin.com/company/mdetrust" target="_blank">LinkedIn</a>
      <a href="https://tiktok.com/@mdetrust" target="_blank">TikTok</a>
      <a href="https://instagram.com/mdetrust" target="_blank">Instagram</a>
      <a href="https://x.com/mdetrust" target="_blank">X (Twitter)</a>
    </div>
  </div>
  <div class="shell footer-bottom">
    <span>© <?php echo date('Y'); ?> Maizura Digital Empowerment Trust</span>
    <span>Independent • Secure • Transparent Awareness Platform</span>
  </div>
</footer>

<script>
async function loadAITicker() {
  const el = document.getElementById('aiTicker');
  el.innerHTML = '<span>Loading latest AI, open-source and digital awareness updates...</span>';
  try {
    const feeds = [
      'https://techcrunch.com/feed/',
      'https://www.theverge.com/rss/index.xml'
    ];
    const allItems = [];
    for (const f of feeds) {
      const res = await fetch(`https://api.rss2json.com/v1/api.json?rss_url=${encodeURIComponent(f)}`);
      const data = await res.json();
      data.items.slice(0,25).forEach(i=>allItems.push(i.title.replace(/&amp;/g,'&')));
    }
    for(let i=allItems.length-1;i>0;i--){const j=Math.floor(Math.random()*(i+1));[allItems[i],allItems[j]]=[allItems[j],allItems[i]];}
    const titles=allItems.slice(0,50);
    el.innerHTML=`<span>${titles.join(' • ')}</span><span>${titles.join(' • ')}</span>`;
  }catch{
    el.innerHTML='<span>Stay tuned for trusted AI and IT awareness updates from Maizura Digital Empowerment Trust...</span>';
  }
}
loadAITicker();
</script>

</body>
</html>
