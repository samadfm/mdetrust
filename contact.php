<?php
require __DIR__ . '/includes/init.php';

$pageTitle = 'Get in Touch | Start a Free Kōrero with Maizura';
$pageDescription = 'Contact Maizura Digital Empowerment Trust to book a free conversation about digital tools, open-source solutions, and building digital confidence.';
$pageSlug = 'contact';

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    session_regenerate_id(true);
}

$values = ['name' => '', 'email' => '', 'phone' => '', 'message' => ''];
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

<!-- Hero -->
<section class="py-24 bg-gradient-to-br from-green-600 to-teal-600 text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">Start a kōrero with Maizura</h1>
            <p class="text-xl opacity-95">
                Whether you're ready to dive in or just curious, we'd love to hear from you. Fill out the form below and we'll get back to you within a few days. Every conversation is free, judgment-free, and focused on what matters to you.
            </p>
        </div>
    </div>
</section>

<!-- Form Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <!-- Form -->
            <div class="md:col-span-2">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Send us a message</h2>

                <?php if ($sent): ?>
                    <div class="p-6 bg-green-50 border-2 border-green-500 rounded-2xl mb-8">
                        <h3 class="text-xl font-bold text-green-900 mb-2">✓ Kia ora!</h3>
                        <p class="text-green-800">
                            Your message has been sent. We'll get back to you as soon as we can. In the meantime, check out our <a href="stories.php" class="underline font-semibold">real stories</a> to see what others have done.
                        </p>
                    </div>
                <?php elseif ($error): ?>
                    <div class="p-6 bg-red-50 border-2 border-red-500 rounded-2xl mb-8">
                        <h3 class="text-xl font-bold text-red-900 mb-2">⚠ There was an issue</h3>
                        <p class="text-red-800"><?php echo e($error); ?></p>
                    </div>
                <?php endif; ?>

                <form method="post" class="space-y-6" novalidate>
                    <input type="hidden" name="csrf_token" value="<?php echo e($_SESSION['csrf_token']); ?>">
                    <label class="sr-only" for="website">Leave this field empty</label>
                    <input type="text" name="website" id="website" tabindex="-1" autocomplete="off" class="honeypot">

                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-900 mb-2">Your name or rōpū *</label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="<?php echo e($values['name']); ?>"
                            placeholder="E.g., Aroha or Rangatikei Community Group"
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-green-500 focus:outline-none transition"
                            required>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-900 mb-2">Your email address *</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="<?php echo e($values['email']); ?>"
                            placeholder="We'll use this to get back to you"
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-green-500 focus:outline-none transition"
                            required>
                    </div>

                    <!-- Phone -->
                    <div>
                        <label for="phone" class="block text-sm font-semibold text-gray-900 mb-2">A phone number (optional)</label>
                        <input
                            type="tel"
                            id="phone"
                            name="phone"
                            value="<?php echo e($values['phone']); ?>"
                            placeholder="If you'd prefer a quick call instead"
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-green-500 focus:outline-none transition">
                    </div>

                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-sm font-semibold text-gray-900 mb-2">Tell us what's on your mind *</label>
                        <textarea
                            id="message"
                            name="message"
                            rows="6"
                            placeholder="What are you hoping to achieve? What's frustrating you? What would help?"
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-green-500 focus:outline-none transition resize-none"
                            required><?php echo e($values['message']); ?></textarea>
                    </div>

                    <!-- Privacy Notice -->
                    <p class="text-sm text-gray-600">
                        Your information is safe with us. We use your details only to respond to this message, and we comply fully with the New Zealand Privacy Act 2020. We'll never share your data without permission.
                    </p>

                    <!-- Submit -->
                    <button
                        type="submit"
                        class="w-full px-8 py-4 bg-gradient-to-r from-green-600 to-teal-600 text-white font-bold text-lg rounded-lg hover:shadow-lg transition">
                        Send message →
                    </button>
                </form>
            </div>

            <!-- Sidebar Info -->
            <div>
                <div class="bg-gray-50 p-8 rounded-2xl mb-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">Other ways to connect</h3>
                    <div class="space-y-4">
                        <div>
                            <p class="text-sm font-semibold text-gray-700 mb-1">📧 Email</p>
                            <a href="mailto:info@maizura.org.nz" class="text-green-600 hover:underline font-semibold">info@maizura.org.nz</a>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-700 mb-1">💼 LinkedIn</p>
                            <a href="https://www.linkedin.com/company/mdetrust" target="_blank" class="text-green-600 hover:underline font-semibold">@mdetrust</a>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-700 mb-1">🌍 Where we are</p>
                            <p class="text-gray-600">Based across Aotearoa. Online sessions usually evenings and weekends.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-green-50 border-2 border-green-200 p-8 rounded-2xl">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">💚 What to expect</h3>
                    <ul class="space-y-2 text-sm text-gray-700">
                        <li class="flex gap-2">
                            <span>✓</span>
                            <span>Response within a few days</span>
                        </li>
                        <li class="flex gap-2">
                            <span>✓</span>
                            <span>No sales pitch</span>
                        </li>
                        <li class="flex gap-2">
                            <span>✓</span>
                            <span>Honest, real conversation</span>
                        </li>
                        <li class="flex gap-2">
                            <span>✓</span>
                            <span>Completely free</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
