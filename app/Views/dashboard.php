<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="relative pt-40 pb-32 px-6 md:px-16 bg-[#1f2937] overflow-hidden flex items-center min-h-[600px]">
    <!-- Background image -->
    <div class="absolute inset-0 z-0">
        <!-- Ganti src di bawah dengan URL/path gambar ilustrasi asli Anda -->
        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover opacity-25" alt="Hero Background">
        <div class="absolute inset-0 bg-black/60"></div>
    </div>
    
    <div class="max-w-[1400px] mx-auto w-full relative z-10 text-white">
        <div class="max-w-4xl">
            <span class="text-[#A68A64] font-bold text-[13px] tracking-wide mb-4 block">Platform</span>
            <h1 class="text-4xl md:text-5xl lg:text-[54px] font-bold mb-6 leading-[1.2]" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">
                Digital Marketplace Jasa Akademik Profesional No.1 di Indonesia
            </h1>
            <p class="text-[13px] md:text-[14px] text-gray-300 mb-10 leading-relaxed text-justify max-w-5xl">
                Akademikpro.id adalah marketplace digital jasa akademik profesional di Indonesia. Kami menyediakan layanan berkualitas seperti jasa joki tugas kuliah, pembuatan makalah, proposal, jurnal, essay, skripsi, tesis, disertasi, serta jasa olah data menggunakan SPSS, SEM-AMOS, SmartPLS, Lisrel, Stata, NVIVO, R-Studio, Eviews dan Minitab. Selain itu, tersedia jasa review dan cari jurnal, penerjemah profesional, cek dan lolos Turnitin dan masih banyak lagi. Dengan tim ahli berpengalaman, kami memastikan hasil berkualitas tinggi. Pesan layanan dengan mudah, cepat, dan aman hanya di Akademikpro.id - Solusi terbaik akademik Anda!
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
        <!-- Item 1 -->
        <div class="flex flex-col items-center">
            <span class="material-symbols-outlined text-5xl text-[#A68A64] mb-4">military_tech</span>
            <h3 class="font-bold text-lg mb-3 text-slate-900" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">Tim Profesional</h3>
            <p class="text-[13px] text-gray-500 leading-relaxed max-w-[280px]">Tim AkademikPro.id merupakan lulusan terbaik dari berbagai jurusan perguruan tinggi negeri maupun swasta.</p>
        </div>
        <!-- Item 2 -->
        <div class="flex flex-col items-center">
            <span class="material-symbols-outlined text-5xl text-[#A68A64] mb-4">workspace_premium</span>
            <h3 class="font-bold text-lg mb-3 text-slate-900" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">Kualitas Terbaik</h3>
            <p class="text-[13px] text-gray-500 leading-relaxed max-w-[280px]">Tim AkademikPro.id diseleksi dengan ketat agar menghasilkan hasil pengerjaan berkualitas tinggi</p>
        </div>
        <!-- Item 3 -->
        <div class="flex flex-col items-center">
            <span class="material-symbols-outlined text-5xl text-[#A68A64] mb-4">admin_panel_settings</span>
            <h3 class="font-bold text-lg mb-3 text-slate-900" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">Pelayanan & Privasi</h3>
            <p class="text-[13px] text-gray-500 leading-relaxed max-w-[280px]">Kami selalu berusaha untuk memberikan pelayanan terbaik dan menjaga privasi klien dengan sangat aman.</p>
        </div>
        <!-- Item 4 -->
        <div class="flex flex-col items-center">
            <span class="material-symbols-outlined text-5xl text-[#A68A64] mb-4">thumb_up</span>
            <h3 class="font-bold text-lg mb-3 text-slate-900" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">Amanah & Terpercaya</h3>
            <p class="text-[13px] text-gray-500 leading-relaxed max-w-[280px]">AkademikPro.id telah beroperasi sejak 2019 dan selalu menyediakan layanan akademik yang transparan.</p>
        </div>
        <!-- Item 5 -->
        <div class="flex flex-col items-center">
            <span class="material-symbols-outlined text-5xl text-[#A68A64] mb-4">payments</span>
            <h3 class="font-bold text-lg mb-3 text-slate-900" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">Harga Terjangkau</h3>
            <p class="text-[13px] text-gray-500 leading-relaxed max-w-[280px]">Kami selalu berusaha memberikan harga termurah tanpa mengurangi kualitas hasil pengerjaan project.</p>
        </div>
        <!-- Item 6 -->
        <div class="flex flex-col items-center">
            <span class="material-symbols-outlined text-5xl text-[#A68A64] mb-4">verified_user</span>
            <h3 class="font-bold text-lg mb-3 text-slate-900" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">Bergaransi</h3>
            <p class="text-[13px] text-gray-500 leading-relaxed max-w-[280px]">Untuk menjaga kualitas, kami menyediakan layanan revisi guna memperbaiki hasil yang ingin diubah klien.</p>
        </div>
    </div>
</section>

<!-- Kategori Produk Section -->
<section id="kategori" class="py-20 px-6 md:px-16 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col items-center mb-12">
            <h2 class="text-3xl font-black text-[#0B214D]">Kategori Produk</h2>
            <div class="w-20 h-1 bg-[#F28C28] mt-3"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="relative bg-[#E5F1FA] rounded-xl overflow-hidden h-64 group cursor-pointer shadow-sm hover:shadow-md transition-shadow">
                <div class="absolute inset-0 flex items-center justify-end p-8">
                     <!-- Illustration Placeholder -->
                     <span class="material-symbols-outlined text-9xl text-blue-200">developer_mode</span>
                </div>
                <div class="absolute bottom-4 left-4">
                    <div class="bg-[#0B214D] text-white px-6 py-2.5 rounded font-bold text-sm tracking-wide">
                        JASA PEMBUATAN APLIKASI
                    </div>
                </div>
            </div>

            <div class="relative bg-[#FDF0E6] rounded-xl overflow-hidden h-64 group cursor-pointer shadow-sm hover:shadow-md transition-shadow">
                <div class="absolute inset-0 flex items-center justify-end p-8">
                     <span class="material-symbols-outlined text-9xl text-orange-200">monitoring</span>
                </div>
                <div class="absolute bottom-4 left-4">
                    <div class="bg-[#0B214D] text-white px-6 py-2.5 rounded font-bold text-sm tracking-wide">
                        JASA OLAH DATA STATISTIK
                    </div>
                </div>
            </div>

            <div class="relative bg-[#FCE7F3] rounded-xl overflow-hidden h-64 group cursor-pointer shadow-sm hover:shadow-md transition-shadow">
                <div class="absolute inset-0 flex items-center justify-end p-8">
                     <span class="material-symbols-outlined text-9xl text-pink-200">local_library</span>
                </div>
                <div class="absolute bottom-4 left-4">
                    <div class="bg-[#0B214D] text-white px-6 py-2.5 rounded font-bold text-sm tracking-wide">
                        JASA BIMBINGAN SKRIPSI
                    </div>
                </div>
            </div>

            <div class="relative bg-[#F8F3E6] rounded-xl overflow-hidden h-64 group cursor-pointer shadow-sm hover:shadow-md transition-shadow">
                <div class="absolute inset-0 flex items-center justify-end p-8">
                     <span class="material-symbols-outlined text-9xl text-yellow-200">design_services</span>
                </div>
                <div class="absolute bottom-4 left-4">
                    <div class="bg-[#0B214D] text-white px-6 py-2.5 rounded font-bold text-sm tracking-wide">
                        JASA UI/UX DESIGN
                    </div>
                </div>
            </div>
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
            <!-- Product 1 -->
            <div class="flex flex-col items-center group">
                <div class="w-full aspect-square bg-[#A5E3E7] mb-5 relative flex items-center justify-center overflow-hidden">
                    <span class="material-symbols-outlined text-[100px] text-teal-600/20">analytics</span>
                </div>
                <h3 class="text-center font-bold text-base text-slate-900 leading-snug mb-2 px-2" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">
                    Jasa Atlas.ti untuk Analisis dan Olah Data Kualitatif No.1 Indonesia
                </h3>
                <div class="text-[13px] text-gray-500 mb-4">
                    Rp500.000
                </div>
                <button class="bg-[#A68A64] hover:bg-[#8f7553] text-white px-6 py-2 text-sm font-bold transition-colors">
                    Add to cart
                </button>
            </div>

            <!-- Product 2 -->
            <div class="flex flex-col items-center group">
                <div class="w-full aspect-square bg-[#F49C82] mb-5 relative flex items-center justify-center overflow-hidden">
                    <span class="material-symbols-outlined text-[100px] text-orange-800/20">menu_book</span>
                </div>
                <h3 class="text-center font-bold text-base text-slate-900 leading-snug mb-2 px-2" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">
                    Jasa Cari Jurnal Scopus & Sinta untuk Referensi #1 Indonesia
                </h3>
                <div class="text-[13px] text-gray-500 mb-4">
                    Rp100.000
                </div>
                <button class="bg-[#A68A64] hover:bg-[#8f7553] text-white px-6 py-2 text-sm font-bold transition-colors">
                    Add to cart
                </button>
            </div>

            <!-- Product 3 -->
            <div class="flex flex-col items-center group">
                <div class="w-full aspect-square bg-[#F7A6D8] mb-5 relative flex items-center justify-center overflow-hidden">
                    <span class="absolute top-4 left-4 bg-black text-white text-[10px] px-2 py-1 font-bold z-10">40% OFF</span>
                    <span class="material-symbols-outlined text-[100px] text-pink-800/20">find_in_page</span>
                </div>
                <h3 class="text-center font-bold text-base text-slate-900 leading-snug mb-2 px-2" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">
                    Jasa Cek Turnitin Murah Cepat Terpercaya No.1 Indonesia
                </h3>
                <div class="text-[13px] text-gray-500 mb-4">
                    Rp30.000 <span class="line-through text-gray-400 ml-1">Rp50.000</span>
                </div>
                <button class="bg-[#A68A64] hover:bg-[#8f7553] text-white px-6 py-2 text-sm font-bold transition-colors">
                    Add to cart
                </button>
            </div>

            <!-- Product 4 -->
            <div class="flex flex-col items-center group">
                <div class="w-full aspect-square bg-[#E89E30] mb-5 relative flex items-center justify-center overflow-hidden">
                    <span class="material-symbols-outlined text-[100px] text-yellow-900/20">memory</span>
                </div>
                <h3 class="text-center font-bold text-base text-slate-900 leading-snug mb-2 px-2" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">
                    Jasa Coding Arduino & IoT Murah dan Terpercaya!
                </h3>
                <div class="text-[13px] text-gray-500 mb-4">
                    Rp500.000
                </div>
                <button class="bg-[#A68A64] hover:bg-[#8f7553] text-white px-6 py-2 text-sm font-bold transition-colors">
                    Add to cart
                </button>
            </div>

            <!-- Product 5 -->
            <div class="flex flex-col items-center group">
                <div class="w-full aspect-square bg-[#C9B9A3] mb-5 relative flex items-center justify-center overflow-hidden">
                    <span class="material-symbols-outlined text-[100px] text-yellow-900/20">terminal</span>
                </div>
                <h3 class="text-center font-bold text-base text-slate-900 leading-snug mb-2 px-2" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">
                    Jasa Coding Python Murah & Berkualitas No.1 Indonesia
                </h3>
                <div class="text-[13px] text-gray-500 mb-4">
                    Rp500.000
                </div>
                <button class="bg-[#A68A64] hover:bg-[#8f7553] text-white px-6 py-2 text-sm font-bold transition-colors">
                    Add to cart
                </button>
            </div>

            <!-- Product 6 -->
            <div class="flex flex-col items-center group">
                <div class="w-full aspect-square bg-[#D8D8D8] mb-5 relative flex items-center justify-center overflow-hidden">
                    <span class="material-symbols-outlined text-[100px] text-gray-600/20">school</span>
                </div>
                <h3 class="text-center font-bold text-base text-slate-900 leading-snug mb-2 px-2" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">
                    Jasa Joki Tugas Kuliah Jogja Murah No.1 Yogyakarta
                </h3>
                <div class="text-[13px] text-gray-500 mb-4">
                    Rp50.000
                </div>
                <button class="bg-[#A68A64] hover:bg-[#8f7553] text-white px-6 py-2 text-sm font-bold transition-colors">
                    Add to cart
                </button>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="#" class="inline-flex items-center gap-2 bg-[#F3F4F6] text-slate-700 px-6 py-2.5 rounded text-[13px] font-bold hover:bg-gray-200 transition-colors">
                Semua Produk <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
            </a>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-[#9A7B56] text-white">
    <div class="max-w-6xl mx-auto px-6 md:px-16 grid grid-cols-2 md:grid-cols-4 gap-12 text-center">
        <div class="flex flex-col items-center">
            <span class="material-symbols-outlined text-6xl mb-4">account_balance</span>
            <p class="text-4xl md:text-5xl font-black mb-2 tracking-tight">10.000+</p>
            <p class="text-sm md:text-base font-bold">Project Selesai</p>
        </div>
        <div class="flex flex-col items-center">
            <span class="material-symbols-outlined text-6xl mb-4">groups</span>
            <p class="text-4xl md:text-5xl font-black mb-2 tracking-tight">8.000+</p>
            <p class="text-sm md:text-base font-bold">Klien Puas</p>
        </div>
        <div class="flex flex-col items-center">
            <span class="material-symbols-outlined text-6xl mb-4">corporate_fare</span>
            <p class="text-4xl md:text-5xl font-black mb-2 tracking-tight">100+</p>
            <p class="text-sm md:text-base font-bold">Mitra & Instansi</p>
        </div>
        <div class="flex flex-col items-center">
            <span class="material-symbols-outlined text-6xl mb-4">school</span>
            <p class="text-4xl md:text-5xl font-black mb-2 tracking-tight">50+</p>
            <p class="text-sm md:text-base font-bold">Tim Profesional</p>
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
            <!-- Blog 1 -->
            <div class="flex flex-col group cursor-pointer">
                <div class="w-full aspect-[4/3] bg-[#E8E8E8] mb-5 overflow-hidden flex items-center justify-center relative">
                    <!-- Ganti span ikon di bawah dengan img src sesuai ilustrasi blog Anda -->
                    <span class="material-symbols-outlined text-[80px] text-gray-400">computer</span>
                </div>
                <span class="text-[11px] font-bold text-gray-400 uppercase tracking-wider mb-3 block">JASA TUGAS KULIAH</span>
                <h3 class="font-bold text-[19px] text-slate-900 leading-snug group-hover:text-[#A68A64] transition-colors" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">
                    Mengatasi Deadline Kuliah: Pakai Joki Tugas Kuliah AkademikPro.id Saja!
                </h3>
            </div>

            <!-- Blog 2 -->
            <div class="flex flex-col group cursor-pointer">
                <div class="w-full aspect-[4/3] bg-[#F2F8FF] mb-5 overflow-hidden flex items-center justify-center relative">
                    <span class="material-symbols-outlined text-[80px] text-blue-200">local_mall</span>
                </div>
                <span class="text-[11px] font-bold text-gray-400 uppercase tracking-wider mb-3 block">JASA PEMBUATAN KARYA ILMIAH</span>
                <h3 class="font-bold text-[19px] text-slate-900 leading-snug group-hover:text-[#A68A64] transition-colors" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">
                    Joki Karil UT Berapa? Di AkademikPro.id mulai Rp.150rb Saja!
                </h3>
            </div>

            <!-- Blog 3 -->
            <div class="flex flex-col group cursor-pointer">
                <div class="w-full aspect-[4/3] bg-[#F9F6FF] mb-5 overflow-hidden flex items-center justify-center relative">
                    <span class="material-symbols-outlined text-[80px] text-purple-200">analytics</span>
                </div>
                <span class="text-[11px] font-bold text-gray-400 uppercase tracking-wider mb-3 block">ARTIKEL, JASA OLAH DATA STATISTIK, SMARTPLS</span>
                <h3 class="font-bold text-[19px] text-slate-900 leading-snug group-hover:text-[#A68A64] transition-colors" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">
                    Penelitian Menggunakan Smart PLS
                </h3>
            </div>
        </div>
    </div>
</section>

<!-- Produk Jasa Terbaru Section -->
<section class="py-20 px-6 md:px-16 bg-white border-t border-gray-100">
    <div class="max-w-[1200px] mx-auto">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-10">
            <h2 class="text-[28px] font-bold text-slate-900 mb-4 sm:mb-0" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">Produk Jasa Terbaru</h2>
            <a href="#" class="inline-flex items-center gap-2 bg-[#F3F4F6] text-slate-700 px-5 py-2.5 rounded text-[13px] font-bold hover:bg-gray-200 transition-colors">
                Semua Produk <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-10">
            <!-- Product 1 -->
            <div class="flex flex-col items-center group">
                <div class="w-full aspect-square bg-[#90C8A2] mb-4 relative flex items-center justify-center overflow-hidden">
                    <span class="material-symbols-outlined text-[80px] text-green-900/20">medical_services</span>
                </div>
                <h3 class="text-center font-bold text-[15px] text-slate-900 leading-snug mb-2 px-2" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">
                    Joki Tugas Farmasi Murah dan Terpercaya No.1 Indonesia
                </h3>
                <div class="text-[13px] text-gray-500 mb-4">
                    Rp100.000
                </div>
                <button class="bg-[#A68A64] hover:bg-[#8f7553] text-white px-6 py-2.5 text-[13px] font-bold transition-colors w-3/4 mx-auto rounded-sm">
                    Add to cart
                </button>
            </div>

            <!-- Product 2 -->
            <div class="flex flex-col items-center group">
                <div class="w-full aspect-square bg-[#E69B35] mb-4 relative flex items-center justify-center overflow-hidden">
                    <span class="material-symbols-outlined text-[80px] text-orange-900/20">terminal</span>
                </div>
                <h3 class="text-center font-bold text-[15px] text-slate-900 leading-snug mb-2 px-2" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">
                    Jasa Coding Arduino & IoT Murah dan Terpercaya!
                </h3>
                <div class="text-[13px] text-gray-500 mb-4">
                    Rp500.000
                </div>
                <button class="bg-[#A68A64] hover:bg-[#8f7553] text-white px-6 py-2.5 text-[13px] font-bold transition-colors w-3/4 mx-auto rounded-sm">
                    Add to cart
                </button>
            </div>

            <!-- Product 3 -->
            <div class="flex flex-col items-center group">
                <div class="w-full aspect-square bg-[#DD7CB2] mb-4 relative flex items-center justify-center overflow-hidden">
                    <span class="material-symbols-outlined text-[80px] text-pink-900/20">query_stats</span>
                </div>
                <h3 class="text-center font-bold text-[15px] text-slate-900 leading-snug mb-2 px-2" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">
                    Jasa Olah Data Statistik Murah & Terpercaya #1 Indonesia
                </h3>
                <div class="text-[13px] text-gray-500 mb-4">
                    Rp200.000
                </div>
                <button class="bg-[#A68A64] hover:bg-[#8f7553] text-white px-6 py-2.5 text-[13px] font-bold transition-colors w-3/4 mx-auto rounded-sm">
                    Add to cart
                </button>
            </div>

            <!-- Product 4 -->
            <div class="flex flex-col items-center group">
                <div class="w-full aspect-square bg-[#8BA2C8] mb-4 relative flex items-center justify-center overflow-hidden">
                    <span class="material-symbols-outlined text-[80px] text-blue-900/20">article</span>
                </div>
                <h3 class="text-center font-bold text-[15px] text-slate-900 leading-snug mb-2 px-2" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">
                    Jasa Konversi Tesis ke Jurnal Ilmiah untuk S2 Terpercaya No.1
                </h3>
                <div class="text-[13px] text-gray-500 mb-4">
                    Rp300.000
                </div>
                <button class="bg-[#A68A64] hover:bg-[#8f7553] text-white px-6 py-2.5 text-[13px] font-bold transition-colors w-3/4 mx-auto rounded-sm">
                    Add to cart
                </button>
            </div>
        </div>
    </div>
</section>



<!-- Testimoni Customer Section -->
<section class="py-20 px-6 md:px-16 bg-white">
    <div class="max-w-[1100px] mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-[28px] font-bold text-slate-900" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">Testimoni Customer</h2>
        </div>

        <!-- Chat Screenshots -->
        <div class="bg-[#F6F6F6] p-8 mb-4 flex flex-wrap justify-center gap-4 md:gap-8 overflow-hidden rounded-t-xl">
            <!-- Placeholder for phone screenshots. Ganti div ini dengan tag <img> -->
            <div class="w-full sm:w-[22%] aspect-[9/19] bg-[#1a1a1a] rounded-[30px] border-[8px] border-[#222] shadow-lg relative flex items-center justify-center">
                <span class="text-gray-400 text-[10px] text-center px-4">Chat<br>Screenshot 1</span>
            </div>
            <div class="w-full sm:w-[22%] aspect-[9/19] bg-[#1a1a1a] rounded-[30px] border-[8px] border-[#222] shadow-lg relative flex items-center justify-center">
                <span class="text-gray-400 text-[10px] text-center px-4">Chat<br>Screenshot 2</span>
            </div>
            <div class="w-full sm:w-[22%] aspect-[9/19] bg-[#1a1a1a] rounded-[30px] border-[8px] border-[#222] shadow-lg relative flex items-center justify-center">
                <span class="text-gray-400 text-[10px] text-center px-4">Chat<br>Screenshot 3</span>
            </div>
            <div class="w-full sm:w-[22%] aspect-[9/19] bg-[#1a1a1a] rounded-[30px] border-[8px] border-[#222] shadow-lg relative flex items-center justify-center">
                <span class="text-gray-400 text-[10px] text-center px-4">Chat<br>Screenshot 4</span>
            </div>
        </div>

        <!-- Video Testimonial Placeholder -->
        <div class="w-full bg-[#E5E5E5] rounded-b-xl overflow-hidden relative shadow-md group cursor-pointer aspect-[16/9] md:aspect-[21/9]">
            <!-- Ganti area ini dengan iframe YouTube atau gambar thumbnail asli -->
            <div class="absolute inset-0 flex items-center justify-center bg-gray-50">
                <div class="text-center text-gray-500 w-full h-full flex flex-col justify-center items-center bg-white relative">
                    <!-- Placeholder pattern background (optional) -->
                    <div class="absolute top-0 right-0 w-1/2 h-full opacity-10 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCI+PGNpcmNsZSBjeD0iMiIgY3k9IjIiIHI9IjIiIGZpbGw9IiMwMDAiLz48L3N2Zz4=')]"></div>
                    
                    <div class="relative z-10 flex flex-col items-center">
                        <span class="text-sm font-bold tracking-widest text-[#A68A64] mb-2 uppercase">AkademikPro.id</span>
                        <h3 class="text-4xl md:text-[60px] font-black text-[#333] tracking-tighter leading-none mb-1">TESTIMONI</h3>
                        <h3 class="text-4xl md:text-[60px] font-black text-[#333] tracking-tighter leading-none mb-6">CUSTOMER</h3>
                        
                        <div class="bg-red-600 text-white rounded-xl py-2 px-8 shadow-lg flex items-center justify-center group-hover:bg-red-700 transition-colors">
                            <span class="material-symbols-outlined text-[40px]">play_arrow</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- YouTube Top Bar Overlay Placeholder -->
            <div class="absolute top-0 left-0 right-0 p-4 bg-gradient-to-b from-black/70 to-transparent flex items-center justify-between z-20">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center overflow-hidden font-bold text-gray-800 text-lg shadow">
                        A
                    </div>
                    <div class="text-white text-[15px] font-semibold text-shadow-sm leading-tight">
                        Testimoni Customer AkademikPro.id<br>
                        <span class="text-xs font-normal">AkademikPro id</span>
                    </div>
                </div>
            </div>
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
            <!-- Column 1 -->
            <div class="w-full md:w-1/2 flex flex-col gap-0 border-x border-t border-gray-200 bg-[#F4F4F4]">
                <!-- FAQ 1 (Opened) -->
                <details class="group border-b border-gray-200" open>
                    <summary class="flex items-center gap-3 p-4 bg-[#B49E78] text-slate-900 font-medium cursor-pointer list-none [&::-webkit-details-marker]:hidden text-[13px]">
                        <span class="material-symbols-outlined text-[18px] group-open:hidden text-slate-800">add_circle</span>
                        <span class="material-symbols-outlined text-[18px] hidden group-open:block text-slate-800">do_not_disturb_on</span>
                        Apa itu AkademikPro.id?
                    </summary>
                    <div class="p-5 text-slate-700 text-[12.5px] leading-relaxed bg-[#F4F4F4] text-justify">
                        AkademikPro.id adalah marketplace digital jasa akademik profesional yang menyediakan berbagai layanan akademik berkualitas di Indonesia. Kami membantu mahasiswa, peneliti, dan profesional dalam menyelesaikan tugas akademik dengan cepat, terpercaya, dan sesuai standar ilmiah. Layanan kami mencakup joki tugas kuliah, makalah, skripsi, tesis, disertasi, olah data statistik, penerjemahan, pembuatan peta, revisi akademik, dan masih banyak lagi. Dengan tim ahli yang berpengalaman dari berbagai konsentrasi ilmu pengetahuan, kami berkomitmen untuk memberikan hasil terbaik sesuai kebutuhan klien. AkademikPro.id hadir sebagai solusi bagi siapa saja yang membutuhkan bantuan akademik secara profesional dan terpercaya dengan harga relatif terjangkau.
                    </div>
                </details>
                
                <!-- FAQ 2 -->
                <details class="group border-b border-gray-200">
                    <summary class="flex items-center gap-3 p-4 bg-[#EDEDED] hover:bg-gray-200 text-slate-700 font-medium cursor-pointer list-none [&::-webkit-details-marker]:hidden text-[13px] group-open:bg-[#B49E78] group-open:text-slate-900">
                        <span class="material-symbols-outlined text-[18px] group-open:hidden text-slate-800">add_circle</span>
                        <span class="material-symbols-outlined text-[18px] hidden group-open:block text-slate-800">do_not_disturb_on</span>
                        Apakah Layanan AkademikPro.id Terpercaya?
                    </summary>
                    <div class="p-5 text-slate-700 text-[12.5px] leading-relaxed bg-[#F4F4F4] text-justify">
                        Ya, layanan kami sangat terpercaya dengan tim profesional di bidangnya.
                    </div>
                </details>

                <!-- FAQ 3 -->
                <details class="group border-b border-gray-200">
                    <summary class="flex items-center gap-3 p-4 bg-[#EDEDED] hover:bg-gray-200 text-slate-700 font-medium cursor-pointer list-none [&::-webkit-details-marker]:hidden text-[13px] group-open:bg-[#B49E78] group-open:text-slate-900">
                        <span class="material-symbols-outlined text-[18px] group-open:hidden text-slate-800">add_circle</span>
                        <span class="material-symbols-outlined text-[18px] hidden group-open:block text-slate-800">do_not_disturb_on</span>
                        Layanan Jasa Apa Saja yang Ditawarkan AkademikPro.id?
                    </summary>
                    <div class="p-5 text-slate-700 text-[12.5px] leading-relaxed bg-[#F4F4F4] text-justify">
                        Kami menawarkan berbagai jasa penulisan karya ilmiah, tugas, skripsi, analisis data, dll.
                    </div>
                </details>
            </div>

            <!-- Column 2 -->
            <div class="w-full md:w-1/2 flex flex-col gap-0 border-x border-t border-gray-200 bg-[#F4F4F4]">
                <!-- FAQ 4 (Opened) -->
                <details class="group border-b border-gray-200" open>
                    <summary class="flex items-center gap-3 p-4 bg-[#B49E78] text-slate-900 font-medium cursor-pointer list-none [&::-webkit-details-marker]:hidden text-[13px]">
                        <span class="material-symbols-outlined text-[18px] group-open:hidden text-slate-800">add_circle</span>
                        <span class="material-symbols-outlined text-[18px] hidden group-open:block text-slate-800">do_not_disturb_on</span>
                        Bagaimana Cara Memesan Layanan di AkademikPro.id?
                    </summary>
                    <div class="p-5 text-slate-700 text-[12.5px] leading-relaxed bg-[#F4F4F4]">
                        Pemesanan layanan jasa akademik di AkademikPro.id sangat mudah dan cepat. Ikuti langkah berikut:<br><br>
                        1. <strong>Hubungi Kami</strong> melalui WhatsApp 082398122966 atau email admin@akademikpro.id untuk konsultasi.<br>
                        2. <strong>Diskusikan kebutuhan Anda</strong> dan dapatkan penawaran harga terbaik.<br>
                        3. <strong>Konfirmasi pesanan</strong> dan lakukan pembayaran melalui metode yang tersedia. Kami berlakukan sistem pembayaran DP (Down Payment).<br>
                        4. <strong>Tim kami akan mulai mengerjakan pesanan</strong> sesuai tenggat waktu atau deadline yang disepakati.<br>
                        5. <strong>Hasil pekerjaan dikirimkan</strong> dan Anda bisa melakukan revisi jika diperlukan.<br>
                        6. <strong>Kami siap membantu kapan saja</strong> untuk memastikan layanan terbaik bagi Anda!
                    </div>
                </details>
                
                <!-- FAQ 5 -->
                <details class="group border-b border-gray-200">
                    <summary class="flex items-center gap-3 p-4 bg-[#EDEDED] hover:bg-gray-200 text-slate-700 font-medium cursor-pointer list-none [&::-webkit-details-marker]:hidden text-[13px] group-open:bg-[#B49E78] group-open:text-slate-900">
                        <span class="material-symbols-outlined text-[18px] group-open:hidden text-slate-800">add_circle</span>
                        <span class="material-symbols-outlined text-[18px] hidden group-open:block text-slate-800">do_not_disturb_on</span>
                        Apa Saja Keunggulan AkademikPro.id?
                    </summary>
                    <div class="p-5 text-slate-700 text-[12.5px] leading-relaxed bg-[#F4F4F4] text-justify">
                        Keunggulan kami adalah kualitas terjamin, harga terjangkau, dan pelayanan responsif 24/7.
                    </div>
                </details>

                <!-- FAQ 6 -->
                <details class="group border-b border-gray-200">
                    <summary class="flex items-center gap-3 p-4 bg-[#EDEDED] hover:bg-gray-200 text-slate-700 font-medium cursor-pointer list-none [&::-webkit-details-marker]:hidden text-[13px] group-open:bg-[#B49E78] group-open:text-slate-900">
                        <span class="material-symbols-outlined text-[18px] group-open:hidden text-slate-800">add_circle</span>
                        <span class="material-symbols-outlined text-[18px] hidden group-open:block text-slate-800">do_not_disturb_on</span>
                        Apakah Ada Diskon?
                    </summary>
                    <div class="p-5 text-slate-700 text-[12.5px] leading-relaxed bg-[#F4F4F4] text-justify">
                        Tentu saja, kami sering memberikan promo diskon menarik dan paket bundling. Hubungi admin untuk detail selengkapnya.
                    </div>
                </details>
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
                <!-- Gunakan SVG/Icon Whatsapp sederhana -->
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
            <!-- Placeholders for payment logos -->
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
<!-- Footer -->
<footer class="bg-[#050505] py-5 px-6 md:px-16">
    <div class="max-w-[1200px] mx-auto flex flex-col md:flex-row justify-between items-center gap-4 relative z-10">
        <!-- Social Icons -->
        <div class="flex items-center gap-4">
            <a href="#" class="w-5 h-5 rounded-full bg-[#222] flex items-center justify-center text-gray-400 hover:text-white transition-colors">
                <span class="text-[10px] font-bold">f</span>
            </a>
            <a href="#" class="w-5 h-5 rounded-full bg-[#222] flex items-center justify-center text-gray-400 hover:text-white transition-colors">
                <span class="text-[9px] font-bold">𝕏</span>
            </a>
            <a href="#" class="w-5 h-5 rounded-full bg-[#222] flex items-center justify-center text-gray-400 hover:text-white transition-colors">
                <span class="material-symbols-outlined text-[12px]">photo_camera</span>
            </a>
            <a href="#" class="w-5 h-5 rounded-full bg-[#222] flex items-center justify-center text-gray-400 hover:text-white transition-colors">
                <span class="material-symbols-outlined text-[12px]">play_arrow</span>
            </a>
        </div>
        
        <!-- Copyright text -->
        <div class="text-[11.5px] text-[#555] font-medium mr-16">
            Copyright &copy; 2026 - AkademikPro.id | All Rights Reversed
        </div>
    </div>
</footer>

<!-- Floating WhatsApp Button -->
<a href="#" class="fixed bottom-6 right-6 z-[100] w-[56px] h-[56px] bg-[#25D366] text-white rounded-full shadow-xl flex items-center justify-center hover:bg-[#1EBE53] transition-colors hover:scale-110">
    <svg class="w-8 h-8" viewBox="0 0 24 24" fill="currentColor">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/>
    </svg>
    <span class="absolute top-0 right-0 w-4 h-4 bg-red-600 border-[1.5px] border-white rounded-full flex items-center justify-center text-[9px] font-bold shadow-sm">1</span>
</a>


<?= $this->endSection() ?>