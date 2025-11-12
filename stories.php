<?php
$pageTitle = 'Real Stories | Maizura Community Transformations';
$pageDescription = 'Real stories from whānau, marae, and small businesses across Aotearoa who have built digital confidence with Maizura\'s support.';
$pageSlug = 'stories';
require __DIR__ . '/includes/head.php';
?>

<!-- Hero -->
<section class="py-24 bg-gradient-to-br from-emerald-600 via-teal-500 to-cyan-600 text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">Stories from Aotearoa</h1>
            <p class="text-xl opacity-95">
                Real whānau, rōpū, and small business owners building digital confidence. These stories show what's possible when you have guidance, community, and tools you actually control.
            </p>
        </div>
    </div>
</section>

<!-- Stories Grid -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <!-- Story 1: Ngāti Whakaari Marae -->
            <article class="bg-white border-2 border-gray-200 rounded-2xl overflow-hidden hover:border-blue-400 hover:shadow-lg transition">
                <div class="bg-blue-100 h-48 flex items-center justify-center text-6xl">🏛️</div>
                <div class="p-8">
                    <span class="inline-block px-3 py-1 bg-blue-100 text-blue-700 font-semibold text-sm rounded-full mb-3">Community • Marae</span>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Ngāti Whakaari Marae — Bringing the whānau online</h3>
                    <p class="text-gray-600 mb-4">
                        <strong>The challenge:</strong> A rural marae struggled to coordinate events, manage volunteer rosters, and keep elders informed. Everything lived in scattered emails and people's heads.
                    </p>
                    <p class="text-gray-600 mb-4">
                        <strong>The result:</strong> We set them up with Nextcloud for shared files and a private forum. Now volunteers coordinate easily, events are visible to everyone, and the marae owns all its data.
                    </p>
                    <blockquote class="italic text-gray-700 border-l-4 border-blue-500 pl-4">
                        "We can finally involve the whole whānau. Our kuia don't have to ask someone to check email."
                    </blockquote>
                </div>
            </article>

            <!-- Story 2: Aroha's Business -->
            <article class="bg-white border-2 border-gray-200 rounded-2xl overflow-hidden hover:border-teal-400 hover:shadow-lg transition">
                <div class="bg-teal-100 h-48 flex items-center justify-center text-6xl">👔</div>
                <div class="p-8">
                    <span class="inline-block px-3 py-1 bg-teal-100 text-teal-700 font-semibold text-sm rounded-full mb-3">Business • Fashion</span>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Aroha's Sustainable Fashion — From solo to small team</h3>
                    <p class="text-gray-600 mb-4">
                        <strong>The challenge:</strong> Managing orders, payments, and emails from her phone. 15 hours on admin, 5 hours designing. A business consultant quoted $200/month.
                    </p>
                    <p class="text-gray-600 mb-4">
                        <strong>The result:</strong> Free WooCommerce, Stripe, automated emails. Admin time dropped to 3 hours. She hired her first assistant. Total annual cost: $60.
                    </p>
                    <blockquote class="italic text-gray-700 border-l-4 border-teal-500 pl-4">
                        "I thought I needed to spend thousands. Instead I built something real for almost nothing."
                    </blockquote>
                </div>
            </article>

            <!-- Story 3: Oakville Community Centre -->
            <article class="bg-white border-2 border-gray-200 rounded-2xl overflow-hidden hover:border-purple-400 hover:shadow-lg transition">
                <div class="bg-purple-100 h-48 flex items-center justify-center text-6xl">🎓</div>
                <div class="p-8">
                    <span class="inline-block px-3 py-1 bg-purple-100 text-purple-700 font-semibold text-sm rounded-full mb-3">Community • Learning</span>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Oakville Community Centre — Building digital confidence</h3>
                    <p class="text-gray-600 mb-4">
                        <strong>The challenge:</strong> Wanted to run digital literacy workshops but staff felt unprepared. Community was aging, afraid of scams. Budget was tight.
                    </p>
                    <p class="text-gray-600 mb-4">
                        <strong>The result:</strong> Trained staff, created reusable materials, ran workshops. 40+ whānau now confident online. Parents teaching kids about digital safety.
                    </p>
                    <blockquote class="italic text-gray-700 border-l-4 border-purple-500 pl-4">
                        "Our kuia learned to video call her mokopuna. That's the real power."
                    </blockquote>
                </div>
            </article>

            <!-- Story 4: Tāne's Landscaping -->
            <article class="bg-white border-2 border-gray-200 rounded-2xl overflow-hidden hover:border-green-400 hover:shadow-lg transition">
                <div class="bg-green-100 h-48 flex items-center justify-center text-6xl">🌱</div>
                <div class="p-8">
                    <span class="inline-block px-3 py-1 bg-green-100 text-green-700 font-semibold text-sm rounded-full mb-3">Business • Trades</span>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Tāne's Landscaping — From cash job to real business</h3>
                    <p class="text-gray-600 mb-4">
                        <strong>The challenge:</strong> Successful business but running like a hobby. Cash in hand, no invoices, no records. Intimidated by computers. Accountant wanted him to "get systems".
                    </p>
                    <p class="text-gray-600 mb-4">
                        <strong>The result:</strong> Simple email, website with photos, free invoicing tool. Registered for tax. Records are clean. Got three new clients from the website.
                    </p>
                    <blockquote class="italic text-gray-700 border-l-4 border-green-500 pl-4">
                        "Turns out computers are just tools. Now I feel like I've got a real business."
                    </blockquote>
                </div>
            </article>
        </div>

        <div class="text-center">
            <p class="text-lg text-gray-600 mb-6">
                More stories coming soon. What's yours?
            </p>
            <a href="contact.php" class="inline-block px-8 py-4 bg-gradient-to-r from-emerald-600 via-teal-500 to-cyan-600 text-white font-bold rounded-lg hover:shadow-lg transition">
                Start your story
            </a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
