<?php
$pageTitle = 'Maizura - Empower Your Digital Future | Free Guidance for Aotearoa';
$pageDescription = 'Stop feeling lost with technology. Maizura provides free, expert guidance on digital tools, privacy, and open-source solutions for whānau and businesses across Aotearoa New Zealand.';
$pageSlug = 'home';
require __DIR__ . '/includes/head.php';
?>

<!-- Enhanced Hero Section with Animation -->
<section class="relative overflow-hidden bg-gradient-to-br from-teal-600 via-emerald-500 to-green-600 text-white py-32 md:py-48">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-10 w-72 h-72 bg-white rounded-full mix-blend-multiply filter blur-3xl"></div>
        <div class="absolute top-40 right-10 w-72 h-72 bg-white rounded-full mix-blend-multiply filter blur-3xl animation-pulse"></div>
        <div class="absolute -bottom-8 left-1/2 w-72 h-72 bg-white rounded-full mix-blend-multiply filter blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl">
            <div class="inline-block mb-6 px-4 py-2 bg-white/20 backdrop-blur-md rounded-full border border-white/30">
                <span class="text-sm font-semibold">🌿 Digital Empowerment for Aotearoa</span>
            </div>
            <h1 class="text-6xl md:text-7xl font-black mb-8 leading-tight">
                Technology that works <span class="bg-gradient-to-r from-yellow-200 to-orange-300 bg-clip-text text-transparent">for you</span>
            </h1>
            <p class="text-xl md:text-2xl mb-10 text-white/95 leading-relaxed max-w-2xl">
                Free expert guidance on digital tools, privacy, and open-source solutions. No jargon. No sales pitch. Just honest kōrero about technology that serves your whānau and business.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 mb-12">
                <a href="contact.php" class="group relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-teal-600 bg-white rounded-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                    Start a Free Conversation
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="about.php" class="inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white border-2 border-white rounded-xl hover:bg-white hover:text-teal-600 transition-all duration-300">
                    Learn Our Story
                </a>
            </div>

            <!-- Trust Indicators -->
            <div class="grid grid-cols-3 gap-6 pt-8">
                <div class="text-center">
                    <div class="text-3xl font-bold">100%</div>
                    <p class="text-sm text-white/80">Free & Non-profit</p>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold">Open</div>
                    <p class="text-sm text-white/80">Source First</p>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold">Real</div>
                    <p class="text-sm text-white/80">Community Impact</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Results Section -->
<section class="py-20 bg-gray-900 text-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-16">Real results for real people</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="group bg-gray-800 p-8 rounded-2xl border border-gray-700 hover:border-teal-500 transition hover:shadow-2xl hover:shadow-teal-500/20">
                <div class="text-5xl mb-4">📊</div>
                <h3 class="text-2xl font-bold mb-3">Small Business Growth</h3>
                <p class="text-gray-300">Save 10+ hours weekly with automation. Zero vendor lock-in. Full control of your data.</p>
                <div class="mt-6 pt-6 border-t border-gray-700 text-sm text-teal-400 font-semibold">
                    → See success stories
                </div>
            </div>

            <div class="group bg-gray-800 p-8 rounded-2xl border border-gray-700 hover:border-emerald-500 transition hover:shadow-2xl hover:shadow-emerald-500/20">
                <div class="text-5xl mb-4">🛡️</div>
                <h3 class="text-2xl font-bold mb-3">Community Safety</h3>
                <p class="text-gray-300">Protect your whānau from scams. Understand AI risks. Stay private online with confidence.</p>
                <div class="mt-6 pt-6 border-t border-gray-700 text-sm text-emerald-400 font-semibold">
                    → Learn digital safety
                </div>
            </div>

            <div class="group bg-gray-800 p-8 rounded-2xl border border-gray-700 hover:border-orange-500 transition hover:shadow-2xl hover:shadow-orange-500/20">
                <div class="text-5xl mb-4">🌱</div>
                <h3 class="text-2xl font-bold mb-3">Digital Independence</h3>
                <p class="text-gray-300">Own your tools. Choose your path. Build technology on your terms, not corporate terms.</p>
                <div class="mt-6 pt-6 border-t border-gray-700 text-sm text-orange-400 font-semibold">
                    → Explore open-source
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How We Work Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-900 mb-6">Our simple, human approach</h2>
        <p class="text-center text-gray-600 text-lg mb-16 max-w-2xl mx-auto">
            We don't believe in complex solutions. We listen, we understand, we guide.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <!-- Step 1 -->
            <div class="relative">
                <div class="absolute -top-10 left-1/2 transform -translate-x-1/2 w-20 h-20 bg-gradient-to-br from-teal-500 to-emerald-500 rounded-full flex items-center justify-center text-white text-3xl font-bold shadow-lg">
                    1
                </div>
                <div class="bg-gradient-to-br from-teal-50 to-emerald-50 p-8 rounded-2xl pt-20 border border-teal-200">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 text-center">Listen & Understand</h3>
                    <p class="text-gray-700 text-center">
                        We sit down over kai and listen deeply. What's your vision? What keeps you up at night? What would transform your work? No jargon, just real conversation.
                    </p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="relative">
                <div class="absolute -top-10 left-1/2 transform -translate-x-1/2 w-20 h-20 bg-gradient-to-br from-emerald-500 to-green-500 rounded-full flex items-center justify-center text-white text-3xl font-bold shadow-lg">
                    2
                </div>
                <div class="bg-gradient-to-br from-emerald-50 to-green-50 p-8 rounded-2xl pt-20 border border-emerald-200">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 text-center">Design Your Path</h3>
                    <p class="text-gray-700 text-center">
                        We co-create a simple, achievable roadmap using tools you can afford and control. Real examples from Aotearoa. Clear next steps. No corporate noise.
                    </p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="relative">
                <div class="absolute -top-10 left-1/2 transform -translate-x-1/2 w-20 h-20 bg-gradient-to-br from-green-500 to-teal-500 rounded-full flex items-center justify-center text-white text-3xl font-bold shadow-lg">
                    3
                </div>
                <div class="bg-gradient-to-br from-green-50 to-teal-50 p-8 rounded-2xl pt-20 border border-green-200">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 text-center">Walk With You</h3>
                    <p class="text-gray-700 text-center">
                        We don't disappear. Ongoing support, troubleshooting, resources, and community access. You move at your pace. We're here alongside you.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Maizura Section -->
<section class="py-24 bg-gradient-to-b from-gray-900 to-gray-800 text-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-16">Why Maizura is different</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="group flex gap-6 p-8 bg-gray-800/50 rounded-2xl border border-gray-700 hover:border-teal-500 transition">
                <div class="text-5xl flex-shrink-0">💚</div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Community First</h3>
                    <p class="text-gray-300">
                        We're a non-profit. Your success matters infinitely more than our profit. We celebrate when you become independent.
                    </p>
                </div>
            </div>

            <div class="group flex gap-6 p-8 bg-gray-800/50 rounded-2xl border border-gray-700 hover:border-emerald-500 transition">
                <div class="text-5xl flex-shrink-0">🔓</div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Open & Honest</h3>
                    <p class="text-gray-300">
                        No hidden commissions. No vendor lock-in. We recommend what actually works, not what profits us.
                    </p>
                </div>
            </div>

            <div class="group flex gap-6 p-8 bg-gray-800/50 rounded-2xl border border-gray-700 hover:border-orange-500 transition">
                <div class="text-5xl flex-shrink-0">🌍</div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Aotearoa First</h3>
                    <p class="text-gray-300">
                        Built for New Zealand communities. We understand our context, culture, and values. No imported solutions.
                    </p>
                </div>
            </div>

            <div class="group flex gap-6 p-8 bg-gray-800/50 rounded-2xl border border-gray-700 hover:border-yellow-500 transition">
                <div class="text-5xl flex-shrink-0">🎓</div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Education Over Sales</h3>
                    <p class="text-gray-300">
                        We teach you to be independent, not dependent on us. You learn, you grow, you own your future.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Social Proof / Testimonials -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-900 mb-4">Trusted by whānau and businesses across Aotearoa</h2>
        <p class="text-center text-gray-600 text-lg mb-16">Real feedback from real people building digital confidence.</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-2xl shadow-lg border-l-4 border-teal-500 hover:shadow-xl transition">
                <div class="flex gap-1 mb-4 text-yellow-400">⭐⭐⭐⭐⭐</div>
                <p class="text-gray-700 mb-6 italic">
                    "They didn't try to sell us anything. They just helped us understand what we actually needed. That's rare."
                </p>
                <div class="font-bold text-gray-900">– Sarah, Small Business Owner</div>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-lg border-l-4 border-emerald-500 hover:shadow-xl transition">
                <div class="flex gap-1 mb-4 text-yellow-400">⭐⭐⭐⭐⭐</div>
                <p class="text-gray-700 mb-6 italic">
                    "Finally, someone who speaks our language. No tech jargon, just real guidance we can actually use."
                </p>
                <div class="font-bold text-gray-900">– Hemi, Marae Administrator</div>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-lg border-l-4 border-orange-500 hover:shadow-xl transition">
                <div class="flex gap-1 mb-4 text-yellow-400">⭐⭐⭐⭐⭐</div>
                <p class="text-gray-700 mb-6 italic">
                    "They made me feel confident about technology again. I'm not scared anymore."
                </p>
                <div class="font-bold text-gray-900">– Aroha, Community Organizer</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-32 bg-gradient-to-r from-teal-600 via-emerald-500 to-green-600 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-white rounded-full mix-blend-multiply filter blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 text-center relative z-10">
        <h2 class="text-5xl md:text-6xl font-black mb-6">Ready to take control?</h2>
        <p class="text-xl md:text-2xl mb-10 max-w-2xl mx-auto text-white/95">
            Whether you're just waking up to the digital world or drowning in confusing tools, we're here to help. One free conversation can change everything.
        </p>
        <a href="contact.php" class="inline-block group px-10 py-5 text-lg font-bold text-teal-600 bg-white rounded-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
            Start Your Free Kōrero Today
            <svg class="w-5 h-5 inline-block ml-2 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
            </svg>
        </a>
    </div>
</section>

<style>
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(20px); }
}

.animation-pulse {
    animation: float 6s ease-in-out infinite;
}

@keyframes slideInUp {
    from {
        opacity: 0;
        transform: translateY(40px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.fade-in {
    animation: slideInUp 0.8s ease-out;
}

/* Smooth transitions */
button, a {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Hover effects */
.group:hover {
    transform: translateY(-2px);
}
</style>

<?php require __DIR__ . '/includes/footer.php'; ?>
