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
<section class="section section-light">
    <div class="shell">
        <h1>Let’s have a kōrero</h1>
        <p class="section-intro">Use this form to request a free initial conversation. We usually respond within a few days,
            depending on capacity. We meet online and occasionally in person within New Zealand.</p>

        <?php if ($sent): ?>
            <div class="form-alert form-alert--success" role="status">
                Thank you – your message has been sent. We will reply as soon as we can.
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

            <label for="name">Your name*</label>
            <input type="text" id="name" name="name" value="<?php echo e($values['name']); ?>" required>

            <label for="email">Email address*</label>
            <input type="email" id="email" name="email" value="<?php echo e($values['email']); ?>" required>

            <label for="phone">Contact number (optional)</label>
            <input type="tel" id="phone" name="phone" value="<?php echo e($values['phone']); ?>">

            <label for="message">How can we help?*</label>
            <textarea id="message" name="message" rows="6" required><?php echo e($values['message']); ?></textarea>

            <p class="form-hint">We will only use your details to respond to this enquiry. We comply with the New Zealand
                Privacy Act 2020 and will not share your data without consent unless required by law.</p>

            <button type="submit" class="btn primary">Send message</button>
        </form>
    </div>
</section>

<section class="section section-dark">
    <div class="shell split">
        <div>
            <h2>Other ways to connect</h2>
            <p>If the form does not work for you, email us directly or reach out via LinkedIn. We respond as quickly as we can
                while balancing family and community commitments.</p>
            <p><strong>Email:</strong> <a href="mailto:info@maizura.org.nz">info@maizura.org.nz</a><br>
                <strong>LinkedIn:</strong> <a href="https://www.linkedin.com/company/mdetrust" target="_blank" rel="noopener">mdetrust</a>
            </p>
        </div>
        <div class="pill-board">
            <div class="pill-row">
                <span class="pill soft">Evening &amp; weekend sessions</span>
                <span class="pill soft">Online first</span>
            </div>
            <div class="pill-row">
                <span class="pill hot">No sales pressure</span>
            </div>
        </div>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
