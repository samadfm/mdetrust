<?php
declare(strict_types=1);
?>
<header class="bg-white border-b border-gray-200 sticky top-0 z-50 shadow-sm">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <a href="index.php" class="flex items-center gap-3 text-xl font-bold text-gray-900 hover:text-blue-600 transition">
                <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-teal-600 rounded-lg flex items-center justify-center text-white font-bold">
                    M
                </div>
                <div class="hidden md:block">
                    <div class="text-sm font-bold">Maizura</div>
                    <div class="text-xs text-gray-600">Digital Empowerment</div>
                </div>
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden md:flex items-center gap-8">
                <a href="index.php" class="text-gray-700 hover:text-blue-600 font-medium transition">Home</a>
                <a href="about.php" class="text-gray-700 hover:text-blue-600 font-medium transition">About</a>
                <a href="services.php" class="text-gray-700 hover:text-blue-600 font-medium transition">Services</a>
                <a href="stories.php" class="text-gray-700 hover:text-blue-600 font-medium transition">Stories</a>
                <a href="blog.php" class="text-gray-700 hover:text-blue-600 font-medium transition">Insights</a>
                <a href="contact.php" class="px-6 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">
                    Contact
                </a>
            </nav>

            <!-- Mobile Menu Button -->
            <button class="md:hidden p-2 text-gray-700 hover:text-blue-600" id="mobile-menu-btn" aria-label="Toggle menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Nav -->
        <nav class="hidden md:hidden pb-4 space-y-2" id="mobile-nav">
            <a href="index.php" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 rounded transition">Home</a>
            <a href="about.php" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 rounded transition">About</a>
            <a href="services.php" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 rounded transition">Services</a>
            <a href="stories.php" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 rounded transition">Stories</a>
            <a href="blog.php" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 rounded transition">Insights</a>
            <a href="contact.php" class="block px-4 py-2 bg-blue-600 text-white font-medium rounded hover:bg-blue-700 transition">Contact</a>
        </nav>
    </div>
</header>

<script>
    document.getElementById('mobile-menu-btn').addEventListener('click', () => {
        const nav = document.getElementById('mobile-nav');
        nav.classList.toggle('hidden');
    });
</script>
