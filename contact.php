<?php
// Tight security headers
header("X-Frame-Options: DENY");
header("X-Content-Type-Options: nosniff");
header("Referrer-Policy: strict-origin-when-cross-origin");
header("Permissions-Policy: microphone=(), camera=(), geolocation=()");

// CSRF token setup
session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$sent = false;
$error = '';

function clean_input($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token   = $_POST['csrf_token'] ?? '';
    if (!hash_equals($_SESSION['csrf_token'], $token)) {
        $error = 'Security check failed. Please refresh the page and try again.';
    } else {
        $name    = clean_input($_POST['name'] ?? '');
        $email   = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
        $phone   = clean_input($_POST['phone'] ?? '');
        $message = clean_input($_POST['message'] ?? '');

        if ($name === '' || $email === '' || $message === '') {
            $error = 'Please fill in all required fields.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = 'Please enter a valid email address.';
        } else {
            $to      = 'info@maizura.org.nz';
            $subject = 'New enquiry from Maizura website';
            $body    = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\n\nMessage:\n{$message}\n";
            $headers = "From: Maizura Website <no-reply@maizura.org.nz>\r\n" .
                       "Reply-To: {$email}\r\n" .
                       "X-Mailer: PHP/" . phpversion();

            if (@mail($to, $subject, $body, $headers)) {
                $sent = true;
                unset($_SESSION['csrf_token']); // Reset token
            } else {
                $error = 'There was a problem sending your message. Please email us directly.';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact · Maizura Digital Empowerment Trust</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Contact Maizura Digital Empowerment Trust to book a free kōrero about digital tools, open-source platforms and AI workflow ideas for your home, community group or small business.">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" type="image/png" href="assets/images/logo.png">
  <style>
    /* Inline patch for contact page visual refinements */
    .contact-form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      max-width: 550px;
    }
    .contact-form label {
      display: flex;
      flex-direction: column;
      font-weight: 600;
      color: var(--text-main);
    }
    .contact-form input,
    .contact-form textarea {
      margin-top: 0.4rem;
      padding: 0.7rem 0.9rem;
      border-radius: 8px;
      border: 1px solid rgba(148,163,184,0.4);
      font-size: 0.95rem;
    }
    .contact-form textarea { resize: vertical; }

    .form-hint {
      font-size: 0.8rem;
      color: var(--text-soft);
    }
    .form-alert {
      margin-bottom: 1rem;
      padding: 0.8rem 1rem;
      border-radius: 8px;
    }
    .form-alert--success { background: #dcfce7; color: #166534; }
    .form-alert--error { background: #fee2e2; color: #991b1b; }

    /* Fix for dark section pill colors */
    .section-dark .pill.soft {
      background: rgba(248,250,252,0.15);
      color: #f1f5f9;
      border-color: rgba(248,250,252,0.25);
    }
  </style>
</head>
<body class="page-contact">

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
      <a href="blog.php" class="nav-link">Blog</a>
      <a href="contact.php" class="nav-link nav-cta active">Contact</a>
    </nav>
  </div>
</header>

<main>
  <section class="section section-light">
    <div class="shell">
      <h1>Let’s have a kōrero</h1>
      <p class="section-intro">
        Use this form to request a free initial conversation. We will usually
        come back to you within a few days, depending on capacity. We currently
        meet online and occasionally in person within New Zealand.
      </p>

      <?php if ($sent): ?>
        <div class="form-alert form-alert--success">
          Thank you – your message has been sent. We will reply as soon as we can.
        </div>
      <?php elseif ($error): ?>
        <div class="form-alert form-alert--error">
          <?php echo $error; ?>
        </div>
      <?php endif; ?>

      <form method="post" class="contact-form" novalidate>
        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

        <label>
          Your name*
          <input type="text" name="name" required>
        </label>

        <label>
          Email address*
          <input type="email" name="email" required>
        </label>

        <label>
          Contact number (optional)
          <input type="tel" name="phone">
        </label>

        <label>
          How can we help?*
          <textarea name="message" rows="6" required></textarea>
        </label>

        <p class="form-hint">
          We will only use your details to respond to this enquiry. We comply
          with the New Zealand Privacy Act 2020 and will not share your data
          without consent unless required by law.
        </p>

        <button type="submit" class="btn primary">Send message</button>
      </form>
    </div>
  </section>

  <section class="section section-dark">
    <div class="shell split">
      <div>
        <h2>Other ways to connect</h2>
        <p>
          If the form does not work for you, you can email us directly or reach
          out via LinkedIn. We try to respond as quickly as we can while
          balancing family and community commitments.
        </p>
        <p>
          <strong>Email:</strong> <a href="mailto:info@maizura.org.nz">info@maizura.org.nz</a><br>
          <strong>LinkedIn:</strong> <a href="https://www.linkedin.com/company/mdetrust" target="_blank">mdetrust</a>
        </p>
      </div>
      <div class="pill-board">
        <div class="pill-row">
          <span class="pill soft">Evening & weekend sessions</span>
          <span class="pill soft">Online first</span>
        </div>
        <div class="pill-row">
          <span class="pill hot">No sales pressure</span>
        </div>
      </div>
    </div>
  </section>
</main>

<footer class="site-footer">
  <div class="shell footer-grid">
    <div class="footer-col">
      <strong>Maizura Digital Empowerment Trust</strong>
      <p>Helping Aotearoa communities build digital confidence safely and independently.</p>
    </div>
    <div class="footer-col">
      <span class="footer-label">Quick links</span>
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="services.php">Services</a>
      <a href="blog.php">Blog</a>
    </div>
    <div class="footer-col">
      <span class="footer-label">Connect</span>
      <a href="mailto:info@maizura.org.nz">info@maizura.org.nz</a>
      <a href="https://www.linkedin.com/company/mdetrust" target="_blank">LinkedIn</a>
      <a href="https://youtube.com/@mdetrust" target="_blank">YouTube</a>
      <a href="https://facebook.com/mdetrust" target="_blank">Facebook</a>
      <a href="https://instagram.com/mdetrust" target="_blank">Instagram</a>
      <a href="https://x.com/mdetrust" target="_blank">X (Twitter)</a>
      <a href="https://tiktok.com/@mdetrust" target="_blank">TikTok</a>
    </div>
  </div>
  <div class="shell footer-bottom">
    <span>© <?php echo date('Y'); ?> Maizura Digital Empowerment Trust</span>
    <span>Security-first, privacy-aware web platform.</span>
  </div>
</footer>

</body>
</html>
