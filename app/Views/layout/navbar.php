<header class="bg-surface-white dark:bg-inverse-surface border-b border-outline-variant dark:border-outline fixed top-0 left-0 right-0 z-50">
<nav class="flex justify-between items-center w-full px-margin-mobile md:px-margin-desktop py-4 max-w-container-max mx-auto">
<div class="text-headline-sm font-headline-sm font-bold text-primary dark:text-primary-fixed">
    AkademikPro.id
</div>
<div class="hidden md:flex items-center space-x-8">
    <a class="<?= url_is('/') ? 'text-primary dark:text-primary-fixed border-b-2 border-primary dark:border-primary-fixed pb-1' : 'text-secondary dark:text-secondary-fixed-dim hover:text-primary dark:hover:text-primary-fixed transition-colors duration-200' ?> text-label-md font-label-md" href="<?= base_url('/') ?>">Home</a>
    <a class="<?= url_is('products') ? 'text-primary dark:text-primary-fixed border-b-2 border-primary dark:border-primary-fixed pb-1' : 'text-secondary dark:text-secondary-fixed-dim hover:text-primary dark:hover:text-primary-fixed transition-colors duration-200' ?> text-label-md font-label-md" href="<?= base_url('products') ?>">Products</a>
    <a class="<?= url_is('about') ? 'text-primary dark:text-primary-fixed border-b-2 border-primary dark:border-primary-fixed pb-1' : 'text-secondary dark:text-secondary-fixed-dim hover:text-primary dark:hover:text-primary-fixed transition-colors duration-200' ?> text-label-md font-label-md" href="<?= base_url('about') ?>">About</a>
    <a class="<?= url_is('blog') ? 'text-primary dark:text-primary-fixed border-b-2 border-primary dark:border-primary-fixed pb-1' : 'text-secondary dark:text-secondary-fixed-dim hover:text-primary dark:hover:text-primary-fixed transition-colors duration-200' ?> text-label-md font-label-md" href="<?= base_url('blog') ?>">Blog</a>
    <a class="<?= url_is('contact') ? 'text-primary dark:text-primary-fixed border-b-2 border-primary dark:border-primary-fixed pb-1' : 'text-secondary dark:text-secondary-fixed-dim hover:text-primary dark:hover:text-primary-fixed transition-colors duration-200' ?> text-label-md font-label-md" href="<?= base_url('contact') ?>">Contact</a>
</div>
<div class="flex items-center gap-4">
    <div class="hidden lg:flex items-center gap-2 mr-4">
        <span class="trigger-search material-symbols-outlined text-primary cursor-pointer hover:opacity-70 transition-opacity">search</span>
        <span id="btnCart" class="material-symbols-outlined text-primary cursor-pointer hover:opacity-70 transition-opacity">shopping_cart</span>
        <span id="btnProfile" class="material-symbols-outlined text-primary cursor-pointer hover:opacity-70 transition-opacity">person</span>
    </div>
    <button class="bg-primary hover:bg-primary-container text-on-primary px-6 py-2.5 rounded-lg text-label-md font-label-md transition-all active:scale-95">Daftar Freelance</button>
</div>

</nav>
</header>