<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<main class="pt-24 pb-20 bg-[#fbfbfb]">
    <div class="max-w-[1100px] mx-auto px-6 md:px-16">
        <!-- Header -->
        <div class="text-center mb-12">
            <span class="text-[9px] font-bold text-gray-400 uppercase tracking-widest block mb-2">HOME / BLOG</span>
            <h1 class="text-4xl md:text-[44px] font-bold text-slate-900" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">Blog</h1>
        </div>

        <!-- Grid Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php 
            $images = [
                'https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=600&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?q=80&w=600&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=600&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1434626881859-194d67b2b86f?q=80&w=600&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=600&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=600&auto=format&fit=crop',
            ];
            foreach ($blogs as $i => $blog): 
                $img = $images[$i % count($images)];
            ?>
            <div class="bg-white p-5 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all cursor-pointer">
                <div class="aspect-[4/3] bg-gray-100 mb-5 overflow-hidden">
                    <img src="<?= $img ?>" alt="<?= esc($blog->judul_blog) ?>" class="w-full h-full object-cover grayscale-[20%]">
                </div>
                <div class="text-[8.5px] text-gray-500 uppercase font-bold tracking-wider mb-2.5"><?= esc($blog->kategori_produk) ?></div>
                <h2 class="text-[16px] font-bold text-slate-900 leading-snug" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">
                    <?= esc($blog->judul_blog) ?>
                </h2>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <div class="mt-16 flex justify-center items-center gap-3">
            <button class="w-8 h-8 flex items-center justify-center bg-[#A68A64] text-white text-[11px] font-bold transition-colors">1</button>
            <button class="w-8 h-8 flex items-center justify-center bg-transparent text-gray-500 hover:text-gray-900 text-[11px] font-bold transition-colors">2</button>
            <button class="w-8 h-8 flex items-center justify-center bg-transparent text-gray-500 hover:text-gray-900 text-[11px] font-bold transition-colors">3</button>
            <button class="px-4 py-1.5 flex items-center justify-center bg-transparent text-gray-500 hover:text-gray-900 text-[9px] font-bold tracking-widest border border-gray-200 hover:border-gray-300 ml-4 transition-colors">
                NEXT <span class="material-symbols-outlined text-[13px] ml-1.5">chevron_right</span>
            </button>
        </div>

    </div>
</main>

<?= $this->endSection() ?>

<!-- Menginjeksi file JavaScript External khusus efek Parallax Blog -->
<?= $this->section('script') ?>
<script src="<?= base_url('js/blog.js') ?>"></script>
<?= $this->endSection() ?>