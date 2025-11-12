<?php
$pageTitle = 'Maizura Digital Empowerment Trust | Free Digital Guidance for Aotearoa';
$pageDescription = 'Maizura helps whānau, community groups & small businesses across Aotearoa gain digital confidence with free, vendor-neutral guidance on open-source tools, privacy & ethical AI.';
$pageSlug = 'home';
require __DIR__ . '/includes/head.php';
?>

<!-- Hero Section -->
<header class="hero-section">
    <div class="container mx-auto px-4 py-20 md:py-32">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="fade-in">
                <div class="inline-block mb-4 px-4 py-2 bg-blue-50 rounded-full">
                    <span class="text-sm font-semibold text-blue-700">Digital Empowerment for Everyone</span>
                </div>
                <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                    Technology shouldn't feel like a mystery
                </h1>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                    Too many whānau and small businesses feel locked out. We provide free, honest guidance on digital tools, privacy, and ethical AI — so you can thrive on your own terms.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="contact.php" class="btn btn-primary text-lg px-8 py-4">
                        Start a free kōrero →
                    </a>
                    <a href="about.php" class="btn btn-secondary text-lg px-8 py-4">
                        Learn our story
                    </a>
                </div>
                <div class="mt-8 flex flex-col sm:flex-row gap-4 text-sm font-semibold text-gray-700">
                    <div class="flex items-center gap-2">
                        <span class="text-2xl">✓</span>
                        <span>100% free & non-profit</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-2xl">✓</span>
                        <span>Open-source focused</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-2xl">✓</span>
                        <span>Whānau first</span>
                    </div>
                </div>
            </div>
            <div class="hidden md:block relative">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-teal-500 rounded-2xl opacity-20 blur-3xl"></div>
                <div class="relative bg-white p-8 rounded-2xl shadow-2xl border border-gray-100">
                    <div class="space-y-4">
                        <div class="h-4 bg-blue-200 rounded w-3/4"></div>
                        <div class="h-4 bg-blue-100 rounded"></div>
                        <div class="h-4 bg-blue-100 rounded w-5/6"></div>
                        <div class="mt-8 space-y-3">
                            <div class="flex gap-3">
                                <div class="w-12 h-12 bg-teal-100 rounded-lg flex items-center justify-center text-lg">🔒</div>
                                <div>
                                    <div class="h-3 bg-gray-200 rounded w-20"></div>
                                    <div class="h-2 bg-gray-100 rounded w-32 mt-2"></div>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center text-lg">🌿</div>
                                <div>
                                    <div class="h-3 bg-gray-200 rounded w-20"></div>
                                    <div class="h-2 bg-gray-100 rounded w-32 mt-2"></div>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center text-lg">🤝</div>
                                <div>
                                    <div class="h-3 bg-gray-200 rounded w-20"></div>
                                    <div class="h-2 bg-gray-100 rounded w-32 mt-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Who We Support Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-900 mb-4">We work with real people doing real mahi</h2>
        <p class="text-center text-gray-600 text-xl mb-12 max-w-2xl mx-auto">
            Whether you're a grandparent learning to video call, a marae managing volunteers, or starting your first business — we meet you where you are.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-blue-300">
                <div class="text-5xl mb-4">👨‍👩‍👧‍👦</div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Whānau & Individuals</h3>
                <p class="text-gray-600 leading-relaxed">
                    From spotting scam emails to understanding AI tools — we help you stay safe online, protect your tamariki, and use technology with confidence.
                </p>
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <span class="inline-block px-3 py-1 bg-blue-50 text-blue-700 text-sm font-semibold rounded-full">Digital Safety</span>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-teal-300">
                <div class="text-5xl mb-4">🏘️</div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Community & Marae</h3>
                <p class="text-gray-600 leading-relaxed">
                    Free tools to organize volunteers, manage donations, keep everyone connected — without expensive subscriptions or corporate complications.
                </p>
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <span class="inline-block px-3 py-1 bg-teal-50 text-teal-700 text-sm font-semibold rounded-full">Community Tools</span>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-purple-300">
                <div class="text-5xl mb-4">💼</div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Small Businesses</h3>
                <p class="text-gray-600 leading-relaxed">
                    Build digital foundations you control — from websites and email to automation and payments — all without vendor lock-in.
                </p>
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <span class="inline-block px-3 py-1 bg-purple-50 text-purple-700 text-sm font-semibold rounded-full">Business Growth</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Approach Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-900 mb-4">Our way of working</h2>
        <p class="text-center text-gray-600 text-xl mb-16 max-w-2xl mx-auto">
            Simple, human-centered, and at your pace.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Step 1 -->
            <div class="relative">
                <div class="bg-blue-600 w-16 h-16 rounded-full flex items-center justify-center text-white text-3xl font-bold mb-6 shadow-lg">1</div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Kai & Kōrero</h3>
                <p class="text-gray-600 leading-relaxed">
                    We sit down over a cuppa and listen. What's keeping you up? What feels broken? What would help? No jargon, no pressure.
                </p>
            </div>

            <!-- Step 2 -->
            <div class="relative">
                <div class="bg-teal-600 w-16 h-16 rounded-full flex items-center justify-center text-white text-3xl font-bold mb-6 shadow-lg">2</div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Co-Design Your Path</h3>
                <p class="text-gray-600 leading-relaxed">
                    We sketch out a simple roadmap showing tools you can afford and control. No corporate nonsense, just what works for you.
                </p>
            </div>

            <!-- Step 3 -->
            <div class="relative">
                <div class="bg-purple-600 w-16 h-16 rounded-full flex items-center justify-center text-white text-3xl font-bold mb-6 shadow-lg">3</div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Walk Alongside</h3>
                <p class="text-gray-600 leading-relaxed">
                    We don't disappear. Ongoing check-ins, troubleshooting help, resources to keep learning. Your pace, not ours.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Why Open Source Section -->
<section class="py-20 bg-gradient-to-br from-blue-50 via-teal-50 to-purple-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Real tools for real people</h2>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    We don't teach theory — we test real tools in the real world. We break them, learn from mistakes, and explain what we find in language that makes sense.
                </p>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Whether you're running a small business from home, managing a community group, or protecting your whānau online, we find solutions that fit your budget, skills, and values.
                </p>
                <ul class="space-y-4">
                    <li class="flex gap-3 items-start">
                        <span class="text-2xl">🔓</span>
                        <div>
                            <strong class="text-gray-900">Open-source always</strong>
                            <p class="text-gray-600">Tools you can see, understand, and control</p>
                        </div>
                    </li>
                    <li class="flex gap-3 items-start">
                        <span class="text-2xl">🔒</span>
                        <div>
                            <strong class="text-gray-900">Privacy is non-negotiable</strong>
                            <p class="text-gray-600">Your data belongs to you, always</p>
                        </div>
                    </li>
                    <li class="flex gap-3 items-start">
                        <span class="text-2xl">🌱</span>
                        <div>
                            <strong class="text-gray-900">No vendor lock-in</strong>
                            <p class="text-gray-600">Freedom to switch or adapt anytime</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-xl border border-gray-200">
                <div class="space-y-6">
                    <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                        <h4 class="font-bold text-gray-900">Nextcloud</h4>
                        <p class="text-sm text-gray-600">Self-hosted file sharing & collaboration</p>
                    </div>
                    <div class="p-4 bg-teal-50 rounded-lg border-l-4 border-teal-500">
                        <h4 class="font-bold text-gray-900">n8n</h4>
                        <p class="text-sm text-gray-600">Workflow automation without code</p>
                    </div>
                    <div class="p-4 bg-purple-50 rounded-lg border-l-4 border-purple-500">
                        <h4 class="font-bold text-gray-900">Odoo</h4>
                        <p class="text-sm text-gray-600">Open-source business management</p>
                    </div>
                    <div class="p-4 bg-pink-50 rounded-lg border-l-4 border-pink-500">
                        <h4 class="font-bold text-gray-900">Mastodon</h4>
                        <p class="text-sm text-gray-600">Privacy-first social community</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trust Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-900 mb-4">Why Maizura is different</h2>
        <p class="text-center text-gray-600 text-xl mb-16 max-w-2xl mx-auto">
            We're built on trust, not sales.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="flex gap-6">
                <div class="text-4xl flex-shrink-0">💚</div>
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Community First</h3>
                    <p class="text-gray-600">
                        We're a non-profit. Your success matters more than our profit.
                    </p>
                </div>
            </div>
            <div class="flex gap-6">
                <div class="text-4xl flex-shrink-0">🌍</div>
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Aotearoa Context</h3>
                    <p class="text-gray-600">
                        Built for New Zealand whānau and communities, not imported solutions.
                    </p>
                </div>
            </div>
            <div class="flex gap-6">
                <div class="text-4xl flex-shrink-0">🎓</div>
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Education Not Selling</h3>
                    <p class="text-gray-600">
                        We teach you to be independent, not dependent on us or any vendor.
                    </p>
                </div>
            </div>
            <div class="flex gap-6">
                <div class="text-4xl flex-shrink-0">🔍</div>
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Completely Transparent</h3>
                    <p class="text-gray-600">
                        No hidden agendas, no commissions, no vendor lock-in. Just honest advice.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-teal-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to build digital confidence?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto opacity-95">
            Whether you're just starting out or drowning in confusing tools, we're here to help. No sales pitch. No jargon. Just real kōrero about technology that works for you.
        </p>
        <a href="contact.php" class="inline-block bg-white text-blue-600 px-10 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition-all duration-300 shadow-lg">
            Start a free kōrero →
        </a>
    </div>
</section>

<!-- Footer CTA -->
<section class="py-16 bg-gray-50 border-t border-gray-200">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-lg font-bold text-gray-900 mb-4">Explore</h3>
                <ul class="space-y-2">
                    <li><a href="about.php" class="text-gray-600 hover:text-blue-600 transition">Our story & kaupapa</a></li>
                    <li><a href="services.php" class="text-gray-600 hover:text-blue-600 transition">What we do</a></li>
                    <li><a href="stories.php" class="text-gray-600 hover:text-blue-600 transition">Real stories</a></li>
                    <li><a href="blog.php" class="text-gray-600 hover:text-blue-600 transition">Insights & learning</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-bold text-gray-900 mb-4">Connect</h3>
                <ul class="space-y-2">
                    <li><a href="https://www.linkedin.com/company/mdetrust" target="_blank" class="text-gray-600 hover:text-blue-600 transition">LinkedIn</a></li>
                    <li><a href="https://tiktok.com/@mdetrust" target="_blank" class="text-gray-600 hover:text-blue-600 transition">TikTok</a></li>
                    <li><a href="https://instagram.com/mdetrust" target="_blank" class="text-gray-600 hover:text-blue-600 transition">Instagram</a></li>
                    <li><a href="mailto:info@maizura.org.nz" class="text-gray-600 hover:text-blue-600 transition">Email us</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-bold text-gray-900 mb-4">Legal</h3>
                <ul class="space-y-2">
                    <li><a href="privacy.php" class="text-gray-600 hover:text-blue-600 transition">Privacy policy</a></li>
                    <li><a href="terms.php" class="text-gray-600 hover:text-blue-600 transition">Terms of use</a></li>
                    <li><a href="contact.php" class="text-gray-600 hover:text-blue-600 transition">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="mt-12 pt-8 border-t border-gray-200 text-center text-gray-600">
            <p>&copy; 2024 Maizura Digital Empowerment Trust. All content is freely shareable under open licenses.</p>
        </div>
    </div>
</section>

<style>
.fade-in {
    animation: fadeInUp 0.8s ease-out;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.btn {
    display: inline-block;
    font-weight: 600;
    border-radius: 0.5rem;
    transition: all 0.3s ease;
    text-decoration: none;
    cursor: pointer;
    border: none;
}

.btn-primary {
    background: linear-gradient(135deg, #2563eb 0%, #0891b2 100%);
    color: white;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(37, 99, 235, 0.3);
}

.btn-secondary {
    background: white;
    color: #1f2937;
    border: 2px solid #e5e7eb;
}

.btn-secondary:hover {
    border-color: #2563eb;
    color: #2563eb;
}
</style>

<?php require __DIR__ . '/includes/footer.php'; ?>
