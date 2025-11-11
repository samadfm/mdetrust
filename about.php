<?php
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
  <title>About · Maizura Digital Empowerment Trust</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Maizura Digital Empowerment Trust is a New Zealand charitable trust promoting digital learning, open-source awareness, and responsible technology use across Aotearoa.">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" type="image/png" href="assets/images/logo.png">
  <style>
    .page-about h1 {
      background: linear-gradient(120deg,var(--accent-blue),var(--accent-pink),var(--accent-gold));
      -webkit-background-clip:text;
      -webkit-text-fill-color:transparent;
      font-weight:800;
      font-size:clamp(2rem,4vw,2.8rem);
      margin-bottom:1.5rem;
    }

    /* Animated Hero Section */
    .hero-animated {
      position:relative;
      padding:6rem 0 8rem;
      background:linear-gradient(120deg,var(--accent-blue),var(--accent-pink),var(--accent-gold));
      background-size:300% 300%;
      animation:bgShift 14s ease-in-out infinite alternate;
      color:#fff;
      text-align:left;
      overflow:hidden;
    }
    @keyframes bgShift {
      0%{background-position:0% 50%;}
      100%{background-position:100% 50%;}
    }

    /* Floating digital particles */
    .particle {
      position:absolute;
      border-radius:50%;
      background:rgba(255,255,255,0.25);
      animation:floatParticle 10s linear infinite;
    }
    @keyframes floatParticle {
      0%{transform:translateY(0) scale(1);}
      50%{transform:translateY(-30px) scale(1.2);}
      100%{transform:translateY(0) scale(1);}
    }

    .hero-inner {
      position:relative;
      z-index:2;
      max-width:1000px;
      margin:auto;
      padding:0 2rem;
    }

    .hero-inner p {
      font-size:1.1rem;
      line-height:1.8;
      max-width:850px;
      color:#f5f5f5;
      margin-bottom:1rem;
    }

    /* Icon cards inside hero */
    .hero-icons {
      margin-top:2.5rem;
      display:flex;
      gap:2rem;
      flex-wrap:wrap;
    }
    .hero-icon {
      flex:1 1 260px;
      background:rgba(255,255,255,0.12);
      border-radius:14px;
      padding:1.5rem;
      text-align:center;
      transition:all .3s ease;
      backdrop-filter:blur(6px);
      box-shadow:0 4px 10px rgba(0,0,0,0.2);
    }
    .hero-icon:hover {
      transform:translateY(-6px);
      background:rgba(255,255,255,0.22);
    }
    .hero-icon h3 {
      color:#fff;
      font-weight:700;
      margin-bottom:.5rem;
    }
    .hero-icon p {
      color:#e8e8e8;
      font-size:.9rem;
      line-height:1.5;
    }

    /* Glowing particles position */
    .particle1 {width:14px;height:14px;top:20%;left:10%;animation-delay:1s;}
    .particle2 {width:10px;height:10px;top:50%;left:60%;animation-delay:2.5s;}
    .particle3 {width:12px;height:12px;top:70%;left:80%;animation-delay:4s;}
    .particle4 {width:8px;height:8px;top:30%;left:85%;animation-delay:5.5s;}
    .particle5 {width:6px;height:6px;top:60%;left:25%;animation-delay:3s;}

    /* What Guides Maizura */
    .principle-card {
      background:#fff;
      border-radius:12px;
      box-shadow:0 2px 6px rgba(0,0,0,0.06);
      padding:1.5rem;
      transition:transform .3s, box-shadow .3s;
    }
    .principle-card:hover {
      transform:translateY(-4px);
      box-shadow:0 8px 20px rgba(0,0,0,0.12);
    }
    .principle-card h3 {
      background: linear-gradient(120deg,var(--accent-blue),var(--accent-pink));
      -webkit-background-clip:text;
      -webkit-text-fill-color:transparent;
      font-weight:700;
      margin-bottom:.6rem;
    }
    .principle-card p { color:#222; }
    .pill.guide {
      background:linear-gradient(120deg,var(--accent-blue),var(--accent-pink));
      color:#fff;
      border:none;
      padding:.6rem 1rem;
      border-radius:8px;
      font-weight:600;
      display:inline-block;
      margin:.3rem;
      box-shadow:0 1px 4px rgba(0,0,0,0.15);
    }

    /* How We Work */
    .section-how {
      background:linear-gradient(135deg,#f9fafb,#eef4ff);
      padding:3rem 0;
      text-align:center;
    }
    .section-how h2 {
      background:linear-gradient(120deg,var(--accent-blue),var(--accent-pink));
      -webkit-background-clip:text;
      -webkit-text-fill-color:transparent;
      font-weight:700;
      margin-bottom:1rem;
    }
    .section-how p {
      max-width:800px;
      margin:auto;
      color:#333;
      font-size:1rem;
      line-height:1.6;
    }

    @media(max-width:900px){
      .hero-icons {flex-direction:column;}
    }
  </style>
</head>

<body class="page-about">

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
      <a href="about.php" class="nav-link active">About</a>
      <a href="services.php" class="nav-link">Services</a>
      <a href="blog.php" class="nav-link">Blog</a>
      <a href="contact.php" class="nav-link nav-cta">Contact</a>
    </nav>
  </div>
</header>

<!-- Hero Section -->
<section class="hero-animated">
  <!-- glowing particles -->
  <div class="particle particle1"></div>
  <div class="particle particle2"></div>
  <div class="particle particle3"></div>
  <div class="particle particle4"></div>
  <div class="particle particle5"></div>

  <div class="hero-inner">
    <h1>Our Story</h1>
    <p>
      Maizura Digital Empowerment Trust was founded in Aotearoa New Zealand to make technology meaningful, inclusive, and human-centred.
      We believe digital growth should lift people, not leave them behind. Our vision is to help every person, family, and community
      thrive through responsible, creative, and open digital transformation.
    </p>
    <p>
      Our work spans community education, open-source innovation, AI literacy, privacy awareness, digital safety, and sustainable technology practices.
      We encourage small enterprises and individuals to use technology as a bridge for empowerment and equality across New Zealand.
    </p>
    <p>
      Awareness for us is not a campaign but a daily culture — one that values learning, innovation, and compassion in every digital decision.
      Maizura continues to grow as a beacon of learning, inclusion, and ethical technology for the next generation.
    </p>

    <div class="hero-icons">
      <div class="hero-icon">
        <h3>Learn</h3>
        <p>Accessible education and awareness for every generation through practical and creative digital learning.</p>
      </div>
      <div class="hero-icon">
        <h3>Empower</h3>
        <p>Practical guidance and free resources to help small enterprises and families grow confidently in the digital world.</p>
      </div>
      <div class="hero-icon">
        <h3>Connect</h3>
        <p>Collaborating with schools, communities, and partners to create sustainable digital opportunities across Aotearoa.</p>
      </div>
    </div>
  </div>
</section>

<!-- What Guides Maizura -->
<section class="section section-dark">
  <div class="shell">
    <h2 style="text-align:center;margin-bottom:2rem;">What Guides Maizura</h2>
    <div class="card-grid three">
      <div class="principle-card">
        <h3>Mana & Inclusion</h3>
        <p>We respect every individual’s dignity, voice, and contribution. Our programmes ensure technology builds confidence and connection, not barriers.</p>
        <span class="pill guide">Respect</span>
        <span class="pill guide">Community</span>
      </div>

      <div class="principle-card">
        <h3>Kaitiakitanga</h3>
        <p>We see ourselves as guardians of digital wellbeing, protecting privacy, promoting security, and enabling safe, informed choices for everyone.</p>
        <span class="pill guide">Safety</span>
        <span class="pill guide">Responsibility</span>
      </div>

      <div class="principle-card">
        <h3>Āko & Shared Learning</h3>
        <p>Learning flows both ways. We grow together through dialogue, co-creation, and collective knowledge celebrating diversity of experience and culture.</p>
        <span class="pill guide">Learning</span>
        <span class="pill guide">Partnership</span>
      </div>
    </div>
  </div>
</section>

<!-- How We Work -->
<section class="section-how">
  <div class="shell">
    <h2>How We Work</h2>
    <p>
      Maizura operates independently as a non-profit charitable trust. We do not sell software licences, take commissions from vendors, or act as a service provider.
      Instead, we provide neutral advice, community collaboration, and volunteer-driven learning programmes. By working with schools, small businesses, and
      community groups across New Zealand, we promote digital empowerment that is free from commercial bias and guided by public good.
    </p>
  </div>
</section>

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
      <a href="blog.php">Blog</a>
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

</body>
</html>
