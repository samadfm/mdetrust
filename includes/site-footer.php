<?php
declare(strict_types=1);
?>
<footer class="bg-gray-900 text-gray-100 py-16 border-t border-gray-800">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            <!-- Brand -->
            <div>
                <h3 class="text-lg font-bold text-white mb-4">Maizura</h3>
                <p class="text-gray-400 leading-relaxed text-sm">
                    Empowering Aotearoa communities with practical, independent guidance on digital tools and safety.
                </p>
            </div>

            <!-- Explore -->
            <div>
                <h4 class="font-bold text-white mb-4 text-sm uppercase tracking-wide">Explore</h4>
                <ul class="space-y-2">
                    <li><a href="index.php" class="text-gray-400 hover:text-white transition">Home</a></li>
                    <li><a href="about.php" class="text-gray-400 hover:text-white transition">About us</a></li>
                    <li><a href="services.php" class="text-gray-400 hover:text-white transition">What we do</a></li>
                    <li><a href="stories.php" class="text-gray-400 hover:text-white transition">Real stories</a></li>
                    <li><a href="blog.php" class="text-gray-400 hover:text-white transition">Insights</a></li>
                </ul>
            </div>

            <!-- Connect -->
            <div>
                <h4 class="font-bold text-white mb-4 text-sm uppercase tracking-wide">Connect</h4>
                <ul class="space-y-2">
                    <li><a href="contact.php" class="text-gray-400 hover:text-white transition">Contact us</a></li>
                    <li><a href="https://www.linkedin.com/company/mdetrust" target="_blank" rel="noopener" class="text-gray-400 hover:text-white transition">LinkedIn</a></li>
                    <li><a href="https://tiktok.com/@mdetrust" target="_blank" rel="noopener" class="text-gray-400 hover:text-white transition">TikTok</a></li>
                    <li><a href="https://instagram.com/mdetrust" target="_blank" rel="noopener" class="text-gray-400 hover:text-white transition">Instagram</a></li>
                    <li><a href="https://youtube.com/@mdetrust" target="_blank" rel="noopener" class="text-gray-400 hover:text-white transition">YouTube</a></li>
                </ul>
            </div>

            <!-- Legal -->
            <div>
                <h4 class="font-bold text-white mb-4 text-sm uppercase tracking-wide">Legal</h4>
                <ul class="space-y-2">
                    <li><a href="privacy.php" class="text-gray-400 hover:text-white transition">Privacy policy</a></li>
                    <li><a href="terms.php" class="text-gray-400 hover:text-white transition">Terms of use</a></li>
                    <li><a href="mailto:info@maizura.org.nz" class="text-gray-400 hover:text-white transition">Email us</a></li>
                </ul>
            </div>
        </div>

        <!-- Bottom -->
        <div class="border-t border-gray-800 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-400">
                <p>&copy; <?php echo date('Y'); ?> Maizura Digital Empowerment Trust. All content is openly shared under creative commons.</p>
                <p class="mt-4 md:mt-0">Built with 💚 in Aotearoa · Open-source & privacy-first</p>
            </div>
        </div>
    </div>
</footer>
