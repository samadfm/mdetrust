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
  <title>Services · Maizura Digital Empowerment Trust</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
        content="Explore how Maizura Digital Empowerment Trust supports individuals, community groups, and small businesses across New Zealand with open digital solutions, assessments, and automation guidance.">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" type="image/png" href="assets/images/logo.png">
</head>

<body class="page-services">

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
      <a href="services.php" class="nav-link active">Services</a>
      <a href="blog.php" class="nav-link">Blog</a>
      <a href="contact.php" class="nav-link nav-cta">Contact</a>
    </nav>
  </div>
</header>

<main>

  <section class="section section-light">
    <div class="shell">
      <h1>How we can help</h1>
      <p class="section-intro">
        Maizura Digital Empowerment Trust exists to make technology simple, safe, and useful for everyone.
        Whether you are just starting a small business, managing a community project, or improving an existing setup,
        we provide clear, independent, and practical advice without cost or bias.
      </p>
    </div>
  </section>

  <section class="section section-light">
    <div class="shell card-grid three">
      <article class="card">
        <h3>Digital Assessments</h3>
        <p>
          We offer short and focused sessions to understand how you currently use technology at home, in your community group, or in your business.
          Together we identify what is working well, what can be improved, and which steps can help you move forward confidently.
        </p>
      </article>

      <article class="card">
        <h3>Technology Roadmaps</h3>
        <p>
          We create simple and easy-to-read maps showing which open-source or affordable platforms can improve your daily operations.
          This may include website and email setup, data storage, cloud versus local hosting options, or automation possibilities using tools such as n8n, Odoo, and Nextcloud.
        </p>
      </article>

      <article class="card">
        <h3>Workshops and Awareness</h3>
        <p>
          Our sessions are friendly, interactive, and aligned with the needs of New Zealand communities.
          Topics include scam awareness, password security, safe online sharing, and how to use AI and digital tools responsibly and effectively.
        </p>
      </article>
    </div>
  </section>

  <section class="section section-dark">
    <div class="shell">
      <h2>Helping small businesses grow</h2>
      <div class="steps-grid">
        <div class="step">
          <span class="step-number">A</span>
          <h3>Practical foundations</h3>
          <p>
            We can help you establish essential digital tools such as business email, internet connection, phone line, website, hosting, and payment solutions.
            If you are already operating, we can review your setup and suggest improvements to make your systems faster, safer, and easier to manage.
          </p>
        </div>
        <div class="step">
          <span class="step-number">B</span>
          <h3>Automation and optimisation</h3>
          <p>
            We share ideas on where automation or AI can safely save time without replacing people.
            From basic email templates to integrated workflows, our aim is to help you build smarter systems that respect both people and privacy.
          </p>
        </div>
        <div class="step">
          <span class="step-number">C</span>
          <h3>Independent guidance</h3>
          <p>
            Everything we do is 100 percent non-profit and vendor neutral.
            When you are ready for implementation, we can point you to reliable suppliers, distributors, and community experts, but the final choice remains yours.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-light">
    <div class="shell split">
      <div>
        <h2>Business in a Box</h2>
        <p>
          Starting a new company or transforming an existing one? Maizura can guide you through every digital step, free of charge.
          From setting up domains, email, and websites to connecting cloud tools, office software, and automation flows,
          we design complete starter kits using open-source or low-cost technologies suited for New Zealand businesses.
        </p>
        <p>
          Need help with IT infrastructure or networking? We can assess your environment, review your Wi-Fi coverage, suggest upgrades,
          and recommend affordable vendors and hardware. Every suggestion we make is based on real experience and focused on helping you stay independent.
        </p>
      </div>

      <div class="pill-board">
        <div class="pill-row">
          <span class="pill hot">Free consultation</span>
          <span class="pill soft">Open-source tools</span>
        </div>
        <div class="pill-row">
          <span class="pill soft">NZ small business focus</span>
          <span class="pill soft">Vendor neutral</span>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-light">
    <div class="shell split">
      <div>
        <h2>What we do not do</h2>
        <p>
          To stay transparent and aligned with New Zealand community and privacy standards,
          there are a few things that Maizura does not provide.
        </p>
        <ul>
          <li>We do not sell or resell any software licences.</li>
          <li>We do not provide legal, financial, or tax advisory services.</li>
          <li>We do not access your systems without written consent.</li>
          <li>We do not promote or lock anyone into a single vendor or platform.</li>
        </ul>
        <p>
          Our focus is education, empowerment, and trust. We want every person and organisation to make informed technology decisions with complete freedom.
        </p>
      </div>

      <div class="pill-board">
        <div class="pill-row">
          <span class="pill hot">Independent</span>
          <span class="pill soft">Community-first</span>
        </div>
        <div class="pill-row">
          <span class="pill soft">Respect for privacy</span>
          <span class="pill soft">Guidance for all</span>
        </div>
      </div>
    </div>
  </section>

</main>

<footer class="site-footer">
  <div class="shell footer-grid">
    <div class="footer-col">
      <strong>Maizura Digital Empowerment Trust</strong>
      <p>Independent, practical, and community-driven guidance for people and small businesses across Aotearoa.</p>
    </div>
    <div class="footer-col">
      <span class="footer-label">Quick links</span>
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
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
      <a href="https://facebook.com/mdetrust" target="_blank">Facebook</a>
      <a href="https://youtube.com/@mdetrust" target="_blank">YouTube</a>
    </div>
  </div>
  <div class="shell footer-bottom">
    <span>© <?php echo date('Y'); ?> Maizura Digital Empowerment Trust</span>
    <span>Independent • Secure • Transparent Awareness Platform</span>
  </div>
</footer>

</body>
</html>
