<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<main class="pt-24 pb-section-gap max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop min-h-screen">
    <nav class="flex items-center gap-2 mb-4 text-[11px] font-label-sm text-secondary uppercase tracking-widest justify-center">
        <a class="hover:text-primary transition-colors" href="<?= base_url('/') ?>">Home</a>
        <span>/</span>
        <span class="text-on-background">Shop</span>
    </nav>
    
    <h1 class="text-display-lg font-display-lg text-center mb-16 text-[64px]">Shop</h1>
    
    <div class="flex flex-col md:flex-row justify-between items-center mb-12 gap-4">
        <p class="text-[12px] font-label-md text-secondary uppercase tracking-widest">Showing 1–20 of 68 results</p>
        <div class="relative min-w-[220px]">
            <select class="w-full appearance-none bg-transparent border border-outline-variant px-4 py-3 pr-10 font-label-md text-secondary focus:outline-none focus:border-primary rounded-sm text-sm cursor-pointer">
                <option>Default sorting</option>
                <option>Sort by popularity</option>
                <option>Sort by average rating</option>
                <option>Sort by latest</option>
                <option>Sort by price: low to high</option>
                <option>Sort by price: high to low</option>
            </select>
            <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-secondary text-lg">expand_more</span>
        </div>
    </div>
    
    <div class="grid grid-cols-1 gap-x-gutter gap-y-16 md:grid-cols-4">
        
        <?php 
        // Array dummy untuk memudahkan duplikasi 20 produk agar rapi
        $products = [
            ['img' => 'produk1.png', 'title' => 'Jasa Atlas.ti untuk Analisis dan Olah Data Kualitatif', 'price' => 'Rp500.000', 'badge' => ''],
            ['img' => 'produk1.png', 'title' => 'Jasa Cari Jurnal Scopus & Sinta untuk Referensi', 'price' => 'Rp100.000', 'badge' => ''],
            ['img' => 'produk1.png', 'title' => 'Jasa Cek Turnitin Murah Cepat Terpercaya', 'price' => 'Rp30.000', 'badge' => '40% OFF', 'old_price' => 'Rp50.000'],
            ['img' => 'produk1.png', 'title' => 'Jasa Coding Arduino & IoT Murah dan Terpercaya!', 'price' => 'Rp500.000', 'badge' => ''],
            ['img' => 'produk1.png', 'title' => 'Jasa Merapikan Skripsi Tesis & Disertasi Terpercaya', 'price' => 'Rp200.000', 'badge' => ''],
            ['img' => 'produk1.png', 'title' => 'Joki Tugas Kuliah Jogja Murah No.1 Yogyakarta', 'price' => 'Rp50.000', 'badge' => '']
        ];
        
        // Looping untuk menghasilkan 20 produk (5 baris)
        for ($i = 0; $i < 20; $i++): 
            $p = $products[$i % count($products)];
        ?>
        <div class="flex flex-col items-center text-center group">
            <div class="relative w-full mb-6 overflow-hidden bg-surface-container-low aspect-[1.15]">
                <?php if($p['badge'] !== ''): ?>
                <div class="absolute top-4 left-4 z-10 bg-black text-white text-[10px] font-bold px-2 py-1 uppercase"><?= $p['badge'] ?></div>
                <?php endif; ?>
                
                <img alt="<?= $p['title'] ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="<?= base_url('images/' . $p['img']) ?>"/>
            
            </div>
            <h3 class="text-headline-sm font-headline-sm mb-3 leading-tight text-[22px] px-2 hover:text-primary transition-colors cursor-pointer line-clamp-2" title="<?= $p['title'] ?>">
                <?= $p['title'] ?>
            </h3>
            
            <?php if(isset($p['old_price'])): ?>
            <div class="flex items-center gap-2 mb-4">
                <span class="text-secondary-fixed-dim line-through text-body-md"><?= $p['old_price'] ?></span>
                <span class="text-body-lg font-bold text-secondary"><?= $p['price'] ?></span>
            </div>
            <?php else: ?>
            <p class="text-body-lg font-bold text-secondary mb-4"><?= $p['price'] ?></p>
            <?php endif; ?>
            
            <button class="trigger-login bg-[#a8977b] text-white px-10 py-3 font-label-md hover:opacity-90 transition-opacity rounded-sm text-[12px] uppercase tracking-widest w-full max-w-[200px]">
                Add to cart
            </button>
        </div>
        <?php endfor; ?>
        
    </div>
    
    <div class="mt-24 flex justify-center items-center gap-3">
        <span class="w-10 h-10 flex items-center justify-center bg-[#7d7465] text-white rounded-sm font-label-md text-sm cursor-default">1</span>
        <a class="w-10 h-10 flex items-center justify-center border border-outline-variant text-secondary hover:border-primary hover:text-primary transition-colors rounded-sm font-label-md text-sm" href="#">2</a>
        <a class="w-10 h-10 flex items-center justify-center border border-outline-variant text-secondary hover:border-primary hover:text-primary transition-colors rounded-sm font-label-md text-sm" href="#">3</a>
        <a class="w-10 h-10 flex items-center justify-center border border-outline-variant text-secondary hover:border-primary hover:text-primary transition-colors rounded-sm font-label-md text-sm" href="#">4</a>
        <a class="w-10 h-10 flex items-center justify-center border border-outline-variant text-secondary hover:border-primary hover:text-primary transition-colors rounded-sm font-label-md text-sm" href="#">5</a>
        <a class="px-5 h-10 flex items-center justify-center border border-outline-variant text-secondary hover:border-primary hover:text-primary transition-colors rounded-sm font-label-md text-[11px] uppercase tracking-widest gap-1" href="#">
            Next <span class="material-symbols-outlined text-[14px]">chevron_right</span>
        </a>
    </div>
</main>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="<?= base_url('js/products.js') ?>"></script>
<?= $this->endSection() ?>