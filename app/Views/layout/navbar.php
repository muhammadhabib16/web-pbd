<header class="bg-white border-b border-gray-200 fixed top-0 left-0 right-0 z-50">
<nav class="flex justify-between items-center w-full px-6 md:px-12 py-4 max-w-[1400px] mx-auto">
    <div class="flex items-center gap-2 text-xl font-bold text-[#333333]">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-[#A68A64]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="3 17 12 8 21 17"></polyline>
            <polyline points="3 22 12 13 21 22"></polyline>
        </svg>
        AkademikPro.id
    </div>
    <div class="hidden md:flex items-center space-x-10 text-[15px]">
        <a class="text-[#A68A64] font-medium" href="<?= base_url('/') ?>">Home</a>
        <a class="text-gray-600 font-medium hover:text-[#A68A64] transition-colors" href="<?= base_url('products') ?>">Products</a>
        <a class="text-gray-600 font-medium hover:text-[#A68A64] transition-colors" href="<?= base_url('about') ?>">About</a>
        <a class="text-gray-600 font-medium hover:text-[#A68A64] transition-colors" href="<?= base_url('blog') ?>">Blog</a>
        <a class="text-gray-600 font-medium hover:text-[#A68A64] transition-colors" href="<?= base_url('contact') ?>">Contact</a>
        <a class="text-gray-600 font-medium hover:text-[#A68A64] transition-colors" href="<?= base_url('freelance') ?>">Daftar Freelance</a>
    </div>
    <div class="flex items-center gap-6 text-gray-700">
        <button class="hover:text-[#A68A64] transition-colors flex items-center">
            <span class="material-symbols-outlined text-[24px]">search</span>
        </button>
        <button class="hover:text-[#A68A64] transition-colors flex items-center">
            <span class="material-symbols-outlined text-[24px]">person</span>
        </button>
        <a href="<?= base_url('cart') ?>" class="hover:text-[#A68A64] transition-colors flex items-center">
            <span class="material-symbols-outlined text-[24px]">shopping_bag</span>
        </a>
    </div>
</nav>
</header>