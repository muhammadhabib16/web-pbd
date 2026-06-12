<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="relative pt-40 pb-32 px-6 md:px-16 bg-[#1f2937] overflow-hidden flex items-center min-h-[600px]">
    <!-- Background image -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover opacity-25" alt="Hero Background">
        <div class="absolute inset-0 bg-black/60"></div>
    </div>
    
    <div class="max-w-[1400px] mx-auto w-full relative z-10 text-white">
        <div class="max-w-4xl">
            <span class="text-[#A68A64] font-bold text-[13px] tracking-wide mb-4 block">Platform</span>
            <h1 class="text-4xl md:text-5xl lg:text-[54px] font-bold mb-6 leading-[1.2]" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">
                <?= esc($pengaturan->hero_title ?? 'Digital Marketplace Jasa Akademik Profesional No.1 di Indonesia') ?>
            </h1>
            <p class="text-[13px] md:text-[14px] text-gray-300 mb-10 leading-relaxed text-justify max-w-5xl">
                <?= esc($pengaturan->hero_description ?? 'Akademikpro.id adalah marketplace digital jasa akademik profesional di Indonesia...') ?>
            </p>
            <a href="#" class="inline-flex items-center gap-2 bg-[#A68A64] text-slate-900 px-6 py-2.5 rounded text-sm font-bold hover:bg-[#8f7553] transition-colors shadow-md">
                <span class="material-symbols-outlined text-[18px]">chat</span>
                Hubungi Kami
            </a>
        </div>
    </div>
</section>

<!-- Feature Icons Section -->
<section class="relative z-20 px-6 md:px-16 -mt-16 md:-mt-24 mb-16">
    <div class="max-w-[1200px] mx-auto bg-white shadow-xl grid grid-cols-1 md:grid-cols-3 gap-y-12 gap-x-8 p-10 md:p-16 text-center">
        <?php 
        $icons = ['military_tech', 'workspace_premium', 'admin_panel_settings', 'thumb_up', 'payments', 'verified_user'];
        foreach ($kelebihan as $i => $item): ?>
        <div class="flex flex-col items-center">
            <span class="material-symbols-outlined text-5xl text-[#A68A64] mb-4"><?= $icons[$i] ?? 'star' ?></span>
            <h3 class="font-bold text-lg mb-3 text-slate-900" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;"><?= esc($item->judul_kelebihan) ?></h3>
            <p class="text-[13px] text-gray-500 leading-relaxed max-w-[280px]"><?= esc($item->deskripsi_kelebihan) ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Kategori Produk Section -->
<section id="kategori" class="py-20 px-6 md:px-16 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-10">
            <h2 class="text-[28px] font-bold text-slate-900" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">Kategori Produk</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php 
            $imgFiles = [
                'Jasa Joki Tugas Kuliah.png',
                'Jasa Review Skripsi.png',
                'Jasa Olah Data Statistik.png',
                'Jasa Akademik Lainnya.png'
            ];
            
            foreach ($kategori as $i => $cat): 
                $imgFile = $imgFiles[$i % count($imgFiles)];
                $imgSrc = base_url('images/kategori/' . rawurlencode($imgFile));
            ?>
            <div class="w-full overflow-hidden cursor-pointer hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                 <img src="<?= $imgSrc ?>" alt="<?= esc($cat->nama_kategori) ?>" class="w-full h-auto object-cover block">
            </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-10">
            <button class="bg-[#C6A27A] text-white px-8 py-3 rounded-lg font-bold shadow-md hover:bg-[#b08d66] transition-colors">
                Lihat Semua
            </button>
        </div>
    </div>
</section>

<!-- Produk Jasa Section -->
<section class="py-20 px-6 md:px-16 bg-white">
    <div class="max-w-[1100px] mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-slate-900" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">Produk Jasa</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-12">
            <?php 
            $prodBgColors = ['#A5E3E7', '#F49C82', '#F7A6D8', '#E89E30', '#C9B9A3', '#D8D8D8'];
            $prodIconColors = ['text-teal-600/20', 'text-orange-800/20', 'text-pink-800/20', 'text-yellow-900/20', 'text-yellow-900/20', 'text-gray-600/20'];
            foreach ($produk_jasa as $i => $prod):
                $pbg = $prodBgColors[$i % count($prodBgColors)];
                $pic = $prodIconColors[$i % count($prodIconColors)];
            ?>
            <div class="flex flex-col items-center group">
                <div class="w-full aspect-square mb-5 relative flex items-center justify-center overflow-hidden" style="background-color: <?= $pbg ?>;">
                    <?php if ($prod->discount): ?>
                        <span class="absolute top-4 left-4 bg-black text-white text-[10px] px-2 py-1 font-bold z-10"><?= esc($prod->discount) ?></span>
                    <?php endif; ?>
                    <img src="<?= base_url('images/' . esc($prod->gambar_produk)) ?>" alt="<?= esc($prod->nama_produk) ?>" class="w-full h-full object-cover">
                </div>
                <h3 class="text-center font-bold text-base text-slate-900 leading-snug mb-2 px-2" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">
                    <?= esc($prod->nama_produk) ?>
                </h3>
                <div class="text-[13px] text-gray-500 mb-4">
                    <?= esc($prod->harga_jual) ?> 
                    <?php if ($prod->harga_normal): ?>
                        <span class="line-through text-gray-400 ml-1"><?= esc($prod->harga_normal) ?></span>
                    <?php endif; ?>
                </div>
                
                <!-- Logika Tombol Add to Cart -->
                <?php if(session()->get('isLoggedIn')): ?>
                    <form action="<?= base_url('cart/add') ?>" method="POST" class="w-full text-center">
                        <input type="hidden" name="id" value="<?= md5($prod->nama_produk) ?>">
                        <input type="hidden" name="name" value="<?= esc($prod->nama_produk) ?>">
                        <input type="hidden" name="price" value="<?= preg_replace('/[^0-9]/', '', $prod->harga_jual) ?>"> 
                        <input type="hidden" name="image" value="<?= esc($prod->gambar_produk) ?>">
                        <button type="submit" class="bg-[#A68A64] hover:bg-[#8f7553] text-white px-6 py-2 text-sm font-bold transition-colors w-1/2 rounded-sm">
                            Add to cart
                        </button>
                    </form>
                <?php else: ?>
                    <button class="trigger-login bg-[#A68A64] hover:bg-[#8f7553] text-white px-6 py-2 text-sm font-bold transition-colors w-1/2 rounded-sm">
                        Add to cart
                    </button>
                <?php endif; ?>

            </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-12">
            <a href="<?= base_url('products') ?>" class="inline-flex items-center gap-2 bg-[#F3F4F6] text-slate-700 px-6 py-2.5 rounded text-[13px] font-bold hover:bg-gray-200 transition-colors">
                Semua Produk <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
            </a>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 px-6 md:px-16 bg-white">
    <div class="max-w-4xl mx-auto bg-[#B4A286] shadow-lg p-10 md:p-16 grid grid-cols-2 gap-y-12 md:gap-y-16 gap-x-8 md:gap-x-12 text-center text-[#151515]">
        <!-- Item 1 -->
        <div class="flex flex-col items-center">
            <div class="h-28 flex items-center justify-center mb-2">
                <svg width="85" height="85" viewBox="0 0 100 100">
                    <path d="M25 15 C22 15 20 17 20 20 L20 85 C20 88 22 90 25 90 L60 90 C63 90 65 88 65 85 L65 20 C65 17 63 15 60 15 Z" fill="#151515"/>
                    <path d="M35 10 L50 10 L50 20 L35 20 Z" fill="#151515" stroke="#B4A286" stroke-width="2"/>
                    <rect x="26" y="30" width="12" height="12" fill="none" stroke="#B4A286" stroke-width="2"/>
                    <path d="M28 36 L31 39 L36 32" fill="none" stroke="#B4A286" stroke-width="2"/>
                    <rect x="44" y="34" width="14" height="3" fill="#B4A286"/>
                    <rect x="44" y="39" width="14" height="3" fill="#B4A286"/>
                    <rect x="26" y="50" width="12" height="12" fill="none" stroke="#B4A286" stroke-width="2"/>
                    <path d="M28 56 L31 59 L36 52" fill="none" stroke="#B4A286" stroke-width="2"/>
                    <rect x="44" y="54" width="14" height="3" fill="#B4A286"/>
                    <rect x="44" y="59" width="14" height="3" fill="#B4A286"/>
                    <rect x="26" y="70" width="12" height="12" fill="none" stroke="#B4A286" stroke-width="2"/>
                    <path d="M28 76 L31 79 L36 72" fill="none" stroke="#B4A286" stroke-width="2"/>
                    <rect x="44" y="74" width="14" height="3" fill="#B4A286"/>
                    <rect x="44" y="79" width="14" height="3" fill="#B4A286"/>
                    <path d="M72 15 L80 15 L80 70 L76 85 L72 70 Z" fill="#151515"/>
                    <path d="M72 25 L80 25 M72 65 L80 65 M76 70 L76 85" fill="none" stroke="#B4A286" stroke-width="2"/>
                </svg>
            </div>
            <p class="text-[44px] md:text-[54px] font-black mb-1 leading-none tracking-tight">10.000+</p>
            <p class="text-[17px] md:text-[19px] font-medium">Project terselesaikan</p>
        </div>

        <!-- Item 2 -->
        <div class="flex flex-col items-center">
            <div class="h-28 flex items-center justify-center mb-2">
                <svg width="120" height="85" viewBox="0 0 110 80">
                    <circle cx="30" cy="25" r="12" fill="#151515"/>
                    <path d="M10 75 C10 50, 50 50, 50 75 Z" fill="#151515"/>
                    <circle cx="80" cy="25" r="12" fill="#151515"/>
                    <path d="M60 75 C60 50, 100 50, 100 75 Z" fill="#151515"/>
                    <circle cx="55" cy="38" r="16" fill="#B4A286"/>
                    <path d="M27 80 C27 47, 83 47, 83 80 Z" fill="#B4A286"/>
                    <circle cx="55" cy="38" r="14" fill="#151515"/>
                    <path d="M30 80 C30 50, 80 50, 80 80 Z" fill="#151515"/>
                </svg>
            </div>
            <p class="text-[44px] md:text-[54px] font-black mb-1 leading-none tracking-tight">8.000+</p>
            <p class="text-[17px] md:text-[19px] font-medium">Klien Puas</p>
        </div>

        <!-- Item 3 -->
        <div class="flex flex-col items-center">
            <div class="h-28 flex items-center justify-center mb-2">
                <svg width="100" height="85" viewBox="0 0 100 80">
                    <path d="M50 5 L10 30 L90 30 Z" fill="#151515"/>
                    <rect x="10" y="32" width="80" height="4" fill="#151515"/>
                    <rect x="18" y="38" width="10" height="24" fill="#151515"/>
                    <rect x="36" y="38" width="10" height="24" fill="#151515"/>
                    <rect x="54" y="38" width="10" height="24" fill="#151515"/>
                    <rect x="72" y="38" width="10" height="24" fill="#151515"/>
                    <rect x="10" y="64" width="80" height="4" fill="#151515"/>
                    <rect x="5" y="70" width="90" height="4" fill="#151515"/>
                    <rect x="0" y="76" width="100" height="4" fill="#151515"/>
                </svg>
            </div>
            <p class="text-[44px] md:text-[54px] font-black mb-1 leading-none tracking-tight">100+</p>
            <p class="text-[17px] md:text-[19px] font-medium">Universitas & Instansi</p>
        </div>

        <!-- Item 4 -->
        <div class="flex flex-col items-center">
            <div class="h-28 flex items-center justify-center mb-2">
                <svg width="100" height="95" viewBox="0 0 100 100">
                    <circle cx="50" cy="40" r="12" fill="#151515"/>
                    <path d="M50 10 L15 22 L50 34 L85 22 Z" fill="#151515"/>
                    <path d="M35 28 L35 40 Q50 45 65 40 L65 28 Z" fill="#151515"/>
                    <path d="M50 22 L80 25 L80 40" fill="none" stroke="#151515" stroke-width="2"/>
                    <circle cx="80" cy="42" r="2" fill="#151515"/>
                    <path d="M20 80 C20 55, 80 55, 80 80 Z" fill="#151515"/>
                    <path d="M15 75 L85 75 C90 75, 90 85, 85 85 L15 85 C10 85, 10 75, 15 75 Z" fill="#151515"/>
                    <ellipse cx="85" cy="80" rx="3" ry="5" fill="#B4A286"/> 
                    <path d="M45 75 L55 75 L55 85 L45 85 Z" fill="#B4A286"/> 
                    <path d="M45 85 L40 95 L45 92 L50 95 L55 92 L60 95 L55 85 Z" fill="#B4A286"/> 
                </svg>
            </div>
            <p class="text-[44px] md:text-[54px] font-black mb-1 leading-none tracking-tight">50+</p>
            <p class="text-[17px] md:text-[19px] font-medium">Tim Profesional</p>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section class="py-20 px-6 md:px-16 bg-white">
    <div class="max-w-[1100px] mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-slate-900 mb-4" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">Blog AkademikPro.id</h2>
            <p class="text-[14px] text-gray-500 max-w-3xl mx-auto">Artikel blog yang kami sajikan terdiri dari beberapa artikel yang berhubungan dengan ruang lingkup akademik. Silahkan explore lebih lanjut!</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <?php 
            $blogBgColors = ['#E8E8E8', '#F2F8FF', '#F9F6FF'];
            $blogIconColors = ['text-gray-400', 'text-blue-200', 'text-purple-200'];
            foreach ($blogs as $i => $blog):
                $bbg = $blogBgColors[$i % count($blogBgColors)];
                $bic = $blogIconColors[$i % count($blogIconColors)];
            ?>
            <div class="flex flex-col group cursor-pointer">
                <div class="w-full aspect-[4/3] mb-5 overflow-hidden flex items-center justify-center relative" style="background-color: <?= $bbg ?>;">
                    <img src="<?= base_url('images/blog/' . esc($blog->gambar_blog) . '.webp') ?>" alt="<?= esc($blog->judul_blog) ?>" class="w-full h-full object-cover">
                </div>
                <span class="text-[11px] font-bold text-gray-400 uppercase tracking-wider mb-3 block"><?= esc($blog->kategori_produk) ?></span>
                <h3 class="font-bold text-[19px] text-slate-900 leading-snug group-hover:text-[#A68A64] transition-colors" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">
                    <?= esc($blog->judul_blog) ?>
                </h3>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Produk Jasa Terbaru Section -->
<section class="py-20 px-6 md:px-16 bg-white border-t border-gray-100">
    <div class="max-w-[1200px] mx-auto">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-10">
            <h2 class="text-[28px] font-bold text-slate-900 mb-4 sm:mb-0" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">Produk Jasa Terbaru</h2>
            <a href="<?= base_url('products') ?>" class="inline-flex items-center gap-2 bg-[#F3F4F6] text-slate-700 px-5 py-2.5 rounded text-[13px] font-bold hover:bg-gray-200 transition-colors">
                Semua Produk <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-10">
            <?php 
            $terbaruBgColors = ['#90C8A2', '#E69B35', '#DD7CB2', '#8BA2C8'];
            $terbaruIconColors = ['text-green-900/20', 'text-orange-900/20', 'text-pink-900/20', 'text-blue-900/20'];
            foreach ($produk_terbaru as $i => $prod):
                $tbg = $terbaruBgColors[$i % count($terbaruBgColors)];
                $tic = $terbaruIconColors[$i % count($terbaruIconColors)];
            ?>
            <div class="flex flex-col items-center group">
                <div class="w-full aspect-square mb-4 relative flex items-center justify-center overflow-hidden" style="background-color: <?= $tbg ?>;">
                    <img src="<?= base_url('images/' . esc($prod->gambar_produk)) ?>" alt="<?= esc($prod->nama_produk) ?>" class="w-full h-full object-cover">
                </div>
                <h3 class="text-center font-bold text-[15px] text-slate-900 leading-snug mb-2 px-2" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">
                    <?= esc($prod->nama_produk) ?>
                </h3>
                <div class="text-[13px] text-gray-500 mb-4">
                    <?= esc($prod->harga_jual) ?>
                    <?php if ($prod->harga_normal): ?>
                        <span class="line-through text-gray-400 ml-1"><?= esc($prod->harga_normal) ?></span>
                    <?php endif; ?>
                </div>

                <!-- Logika Tombol Add to Cart -->
                <?php if(session()->get('isLoggedIn')): ?>
                    <form action="<?= base_url('cart/add') ?>" method="POST" class="w-full text-center">
                        <input type="hidden" name="id" value="<?= md5($prod->nama_produk) ?>">
                        <input type="hidden" name="name" value="<?= esc($prod->nama_produk) ?>">
                        <input type="hidden" name="price" value="<?= preg_replace('/[^0-9]/', '', $prod->harga_jual) ?>"> 
                        <input type="hidden" name="image" value="<?= esc($prod->gambar_produk) ?>">
                        <button type="submit" class="bg-[#A68A64] hover:bg-[#8f7553] text-white px-6 py-2.5 text-[13px] font-bold transition-colors w-3/4 mx-auto rounded-sm">
                            Add to cart
                        </button>
                    </form>
                <?php else: ?>
                    <button class="trigger-login bg-[#A68A64] hover:bg-[#8f7553] text-white px-6 py-2.5 text-[13px] font-bold transition-colors w-3/4 mx-auto rounded-sm">
                        Add to cart
                    </button>
                <?php endif; ?>

            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 🌟 Testimoni Customer Section (Ubah Jadi 1 Gambar Dari Folder images/testimoni/) 🌟 -->
<section class="py-20 px-6 md:px-16 bg-white">
    <div class="max-w-[1100px] mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-[28px] font-bold text-slate-900" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">Testimoni Customer</h2>
        </div>

        <div class="w-full rounded-xl overflow-hidden bg-[#F6F6F6] shadow-sm flex items-center justify-center relative min-h-[250px]">
            <?php if(!empty($pengaturan->gambar_testimoni)): ?>
                <!-- Menampilkan gambar gabungan testimoni utuh dinamis dari subfolder testimoni -->
                <img src="<?= base_url('images/testimoni/' . esc($pengaturan->gambar_testimoni)) ?>" alt="Testimoni Customer" class="w-full h-auto object-cover">
            <?php else: ?>
                <div class="w-full py-24 flex flex-col items-center justify-center text-gray-400">
                    <span class="material-symbols-outlined text-6xl mb-3 opacity-50">broken_image</span>
                    <span class="text-sm font-medium tracking-wider">Gambar Testimoni Belum Tersedia</span>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 px-6 md:px-16 bg-white border-t border-gray-100">
    <div class="max-w-[1200px] mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-slate-900 mb-4" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">Frequently Asked Questions</h2>
            <p class="text-[13px] text-gray-500 max-w-3xl mx-auto">Silahkan lihat bagian FAQ kami untuk mendapatkan pemahaman lebih jelas tentang layanan yang kami sediakan sebagai partner Anda.</p>
        </div>

        <div class="flex flex-col md:flex-row gap-6 items-start">
            <?php 
                $half = ceil(count($faqs) / 2);
                $col1 = array_slice($faqs, 0, $half);
                $col2 = array_slice($faqs, $half);
            ?>
            <!-- Column 1 -->
            <div class="w-full md:w-1/2 flex flex-col gap-0 border-x border-t border-gray-200 bg-[#F4F4F4]">
                <?php foreach($col1 as $index => $faq): ?>
                <details class="group border-b border-gray-200" <?= $index === 0 ? 'open' : '' ?>>
                    <summary class="flex items-center gap-3 p-4 bg-[#EDEDED] group-open:bg-[#B49E78] text-slate-700 group-open:text-slate-900 hover:bg-gray-200 font-medium cursor-pointer list-none [&::-webkit-details-marker]:hidden text-[13px]">
                        <span class="material-symbols-outlined text-[18px] group-open:hidden text-slate-800">add_circle</span>
                        <span class="material-symbols-outlined text-[18px] hidden group-open:block text-slate-800">do_not_disturb_on</span>
                        <?= esc($faq->pertanyaan) ?>
                    </summary>
                    <div class="p-5 text-slate-700 text-[12.5px] leading-relaxed bg-[#F4F4F4] text-justify">
                        <?= $faq->jawaban ?>
                    </div>
                </details>
                <?php endforeach; ?>
            </div>

            <!-- Column 2 -->
            <div class="w-full md:w-1/2 flex flex-col gap-0 border-x border-t border-gray-200 bg-[#F4F4F4]">
                <?php foreach($col2 as $index => $faq): ?>
                <details class="group border-b border-gray-200" <?= $index === 0 ? 'open' : '' ?>>
                    <summary class="flex items-center gap-3 p-4 bg-[#EDEDED] group-open:bg-[#B49E78] text-slate-700 group-open:text-slate-900 hover:bg-gray-200 font-medium cursor-pointer list-none [&::-webkit-details-marker]:hidden text-[13px]">
                        <span class="material-symbols-outlined text-[18px] group-open:hidden text-slate-800">add_circle</span>
                        <span class="material-symbols-outlined text-[18px] hidden group-open:block text-slate-800">do_not_disturb_on</span>
                        <?= esc($faq->pertanyaan) ?>
                    </summary>
                    <div class="p-5 text-slate-700 text-[12.5px] leading-relaxed bg-[#F4F4F4] text-justify">
                        <?= $faq->jawaban ?>
                    </div>
                </details>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Partnership Section -->
<section class="py-12 bg-white text-center border-t border-gray-100">
    <div class="max-w-4xl mx-auto px-6">
        <h2 class="text-2xl font-bold text-slate-900 mb-6" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">Partnership</h2>
        <div class="flex justify-center items-center">
            <!-- Placeholder for JasaAkademik.id logo -->
            <div class="flex items-center gap-1 font-bold text-3xl italic text-[#253275]">
                <span class="text-[#D0235C] font-black text-4xl">JA</span>
                <span class="ml-2 text-[#253275]">Jasa</span><span class="text-[#D0235C]">Akademik</span><span class="text-sm">id</span>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="py-10 bg-[#F4F4F4] border-t border-gray-100">
    <div class="max-w-[1200px] mx-auto px-6 md:px-16">
        <div class="flex flex-col items-start gap-4">
            <h3 class="text-[17px] font-bold text-slate-900" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">
                Tertarik ingin menggunakan layanan jasa AkademikPro.id? Checkout sekarang atau konsultasikan dengan Admin!
            </h3>
            <a href="#" class="inline-flex items-center gap-2 bg-[#B49E78] text-slate-900 px-5 py-2 rounded text-[13px] font-medium shadow-md hover:bg-[#a38f6c] transition-colors whitespace-nowrap">
                <svg class="w-4 h-4 opacity-80" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/>
                </svg>
                Chat Admin
            </a>
        </div>
    </div>
</section>

<!-- Payment Section -->
<section class="py-16 bg-white text-center border-t border-gray-100 pb-28">
    <div class="max-w-4xl mx-auto px-6">
        <h2 class="text-[28px] font-bold text-slate-900 mb-4" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">Payment</h2>
        <p class="text-[12.5px] text-gray-500 mb-10">Kami menerima pembayaran melalui transfer bank dan dompet digital untuk kemudahan bertransaksi.</p>
        <div class="flex flex-wrap justify-center items-center gap-6 md:gap-10">
            <div class="text-[#005EAA] font-black text-[42px] italic flex items-center gap-2">
                <div class="w-10 h-10 rounded-full bg-[#005EAA] flex items-center justify-center">
                    <span class="text-white text-xs font-sans">BCA</span>
                </div>
                BCA
            </div>
            <div class="text-[#0B5B9D] font-black text-[42px] italic flex items-center gap-1">
                <span class="material-symbols-outlined text-[36px] font-bold">account_balance</span>
                BRI
            </div>
            <div class="text-[#F15A23] font-black text-[42px] italic flex items-center gap-1">
                <span class="material-symbols-outlined text-[36px] font-bold">payments</span>
                BNI
            </div>
            <div class="text-[#4C2A86] font-black text-[42px] italic tracking-tighter">
                OVO
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>