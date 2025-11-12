<?php
require __DIR__ . '/includes/init.php';

$pageTitle = 'Contact · Maizura Digital Empowerment Trust';
$pageDescription = 'Contact Maizura Digital Empowerment Trust to book a free kōrero about digital tools, open-source platforms and AI workflow ideas for your home, community group or small business.';
$pageSlug = 'contact';

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    session_regenerate_id(true);
}

$values = [
    'name' => '',
    'email' => '',
    'phone' => '',
    'message' => ''
];
$sent = false;
$error = '';

$clean = static function (string $value): string {
    return trim($value);
};

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['csrf_token'] ?? '';
    if (!hash_equals($_SESSION['csrf_token'], (string) $token)) {
        $error = 'Security check failed. Please refresh the page and try again.';
    } elseif (!empty($_POST['website'] ?? '')) {
        $error = 'There was a problem sending your message. Please email us directly.';
    } else {
        $values['name'] = $clean((string) ($_POST['name'] ?? ''));
        $values['email'] = filter_var((string) ($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
        $values['phone'] = $clean((string) ($_POST['phone'] ?? ''));
        $values['message'] = $clean((string) ($_POST['message'] ?? ''));

        if ($values['name'] === '' || $values['email'] === '' || $values['message'] === '') {
            $error = 'Please fill in all required fields.';
        } elseif (!filter_var($values['email'], FILTER_VALIDATE_EMAIL)) {
            $error = 'Please enter a valid email address.';
        } else {
            $to = 'info@maizura.org.nz';
            $subject = 'New enquiry from Maizura website';
            $bodyLines = [
                'Name: ' . $values['name'],
                'Email: ' . $values['email'],
                'Phone: ' . $values['phone'],
                '',
                'Message:',
                $values['message'],
            ];
            $body = implode("\n", $bodyLines);
            $headers = [
                'From: Maizura Website <no-reply@maizura.org.nz>',
                'Reply-To: ' . $values['email'],
                'X-Mailer: PHP/' . phpversion(),
            ];

            if (@mail($to, $subject, $body, implode("\r\n", $headers))) {
                $sent = true;
                $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
                session_regenerate_id(true);
                $values = ['name' => '', 'email' => '', 'phone' => '', 'message' => ''];
            } else {
                $error = 'There was a problem sending your message. Please email us directly.';
            }
        }
    }
}

require __DIR__ . '/includes/head.php';
?>

<section class="hero hero--subpage">
    <div class="shell hero-grid">
        <div class="hero-copy">
            <p class="eyebrow">We'd love to hear from you</p>
            <h1>Start a kōrero with Maizura</h1>
            <p class="hero-lead">Whether you're ready to dive in or just curious, fill out the form below and we'll get back to you within a few days. Every conversation is free, judgment-free, and focused on what actually matters to you.</p>
            <div class="hero-metas">
                <span class="meta-pill">Completely free</span>
                <span class="meta-pill">No obligation</span>
                <span class="meta-pill">Whānau-friendly</span>
            </div>
        </div>
        <div class="hero-supplement">
            <p class="supplement-title">Prefer to reach out directly?</p>
            <ul class="supplement-list">
                <li><strong>Email us:</strong> <a href="mailto:info@maizura.org.nz">info@maizura.org.nz</a></li>
                <li><strong>Find us:</strong> <a href="https://www.linkedin.com/company/mdetrust" target="_blank" rel="noopener">LinkedIn @mdetrust</a></li>
                <li><strong>Our style:</strong> Online sessions across Aotearoa, usually evenings and weekends.</li>
            </ul>
        </div>
    </div>
</section>
<section class="section section-light">
    <div class="shell">

        <h2>Send us a message</h2>
        <p class="section-intro">Tell us a bit about yourself and what you're curious about or struggling with. No question is too simple or complicated.</p>

        <?php if ($sent): ?>
            <div class="form-alert form-alert--success" role="status">
                Kia ora — your message has been sent! We'll get back to you as soon as we can. In the meantime, you might enjoy checking out our stories page to see what other whānau and businesses have done.
            </div>
        <?php elseif ($error): ?>
            <div class="form-alert form-alert--error" role="alert">
                <?php echo e($error); ?>
            </div>
        <?php endif; ?>

        <form method="post" class="contact-form" novalidate>
            <input type="hidden" name="csrf_token" value="<?php echo e($_SESSION['csrf_token']); ?>">
            <label class="sr-only" for="website">Leave this field empty</label>
            <input type="text" name="website" id="website" tabindex="-1" autocomplete="off" class="honeypot">

            <label for="name">Your name or rōpū*</label>
            <input type="text" id="name" name="name" value="<?php echo e($values['name']); ?>" placeholder="E.g., Aroha or Rangatikei Community Group" required>

            <label for="email">Your email address*</label>
            <input type="email" id="email" name="email" value="<?php echo e($values['email']); ?>" placeholder="We'll use this to get back to you" required>

            <label for="phone">A phone number (optional)</label>
            <input type="tel" id="phone" name="phone" value="<?php echo e($values['phone']); ?>" placeholder="If you'd prefer a quick call instead">

            <label for="message">Tell us what's on your mind*</label>
            <textarea id="message" name="message" rows="6" placeholder="What are you hoping to achieve? What's frustrating you? What would help?" required><?php echo e($values['message']); ?></textarea>

            <p class="form-hint">Your information is safe with us. We use your details only to respond to this message, and we comply fully with the New Zealand Privacy Act 2020. We'll never share your data without permission.</p>

            <button type="submit" class="btn primary">Send message</button>
        </form>
    </div>
</section>

<section class="section section-dark">
    <div class="shell split">
        <div>
            <h2>Not ready for a form? No problem</h2>
            <p>If you prefer to shoot us a quick email, jump on LinkedIn, or chat over the phone — that's totally fine. We're real people, not a corporate call centre. We respond as soon as we can, usually within a few days (sometimes faster depending on what's on our plates).</p>
            <p><strong>Email:</strong> <a href="mailto:info@maizura.org.nz">info@maizura.org.nz</a><br>
                <strong>LinkedIn:</strong> <a href="https://www.linkedin.com/company/mdetrust" target="_blank" rel="noopener">@mdetrust</a>
            </p>
        </div>
        <div class="pill-board">
            <div class="pill-row">
                <span class="pill soft">Evenings &amp; weekends available</span>
                <span class="pill soft">Online across Aotearoa</span>
            </div>
            <div class="pill-row">
                <span class="pill hot">Zero sales agenda</span>
            </div>
        </div>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
