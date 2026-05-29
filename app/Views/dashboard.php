<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<section class="pt-32 pb-20 px-margin-mobile md:px-margin-desktop bg-surface-white relative overflow-hidden">
    <div class="max-w-container-max mx-auto flex flex-col md:flex-row items-center gap-12">
        <div class="w-full md:w-3/5 z-10">
            <span class="text-primary font-bold tracking-widest uppercase text-label-sm mb-4 block">PLATFORM</span>
            <h1 class="text-display-lg-mobile md:text-display-lg font-display-lg text-on-background mb-6 leading-tight">
                Digital Marketplace Jasa Akademik Profesional No.1 di Indonesia
            </h1>
            <p class="text-body-lg text-secondary mb-8 max-w-2xl leading-relaxed">
                Akademikpro.id adalah marketplace digital jasa akademik profesional di Indonesia. Kami menyediakan layanan berkualitas seperti jasa joki tugas kuliah, pembuatan makalah, skripsi, tesis, serta jasa olah data profesional.
            </p>
            <div class="flex flex-wrap gap-4">
                <a class="bg-primary-container text-on-primary-container px-8 py-4 rounded-full font-label-md flex items-center gap-2 shadow-lg hover:shadow-xl transition-all" href="#">
                    <span class="material-symbols-outlined">call</span> Hubungi Kami
                </a>
                <div class="flex items-center gap-2">
                    <div class="flex -space-x-2">
                        <div class="w-10 h-10 rounded-full border-2 border-white bg-secondary-container"></div>
                        <div class="w-10 h-10 rounded-full border-2 border-white bg-tertiary-container"></div>
                        <div class="w-10 h-10 rounded-full border-2 border-white bg-primary-container"></div>
                    </div>
                    <div class="ml-2">
                        <div class="flex text-primary">
                            <span class="material-symbols-outlined text-sm star-filled">star</span>
                            <span class="material-symbols-outlined text-sm star-filled">star</span>
                            <span class="material-symbols-outlined text-sm star-filled">star</span>
                            <span class="material-symbols-outlined text-sm star-filled">star</span>
                            <span class="material-symbols-outlined text-sm star-filled">star</span>
                        </div>
                        <p class="text-label-sm text-secondary">8.000+ Klien Puas</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full md:w-2/5 relative">
            <div class="absolute -top-10 -right-10 w-64 h-64 bg-primary-fixed rounded-full filter blur-3xl opacity-20"></div>
            <div class="relative rounded-2xl overflow-hidden shadow-2xl border-8 border-white">
                <img alt="Academic Professionals" class="w-full h-auto object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAE-EJO6J938IQSEBUzKmb69HCQwB6WGlIvBAdrTjl9L3fwpDfxqPTcQRO_gevsfPx7lX3-CXHOCsUgm5y8zMyrpW_bKeX01ZOwvFyMDofBdP1OwY758y3xk9oyScQLedzDbQ2XlfykDqDsD6oFXFsuDFvMwMADIwgnXlas2G6qTlaTKxfg34mKfriEvdBl7PZowCeE3IcJVCE-6yEPKpc1qG2Z9emoDXvmLNYqrP_lEL3mLTYnfD-nc3B9h7oTRfuUkLFHY__mhe4"/>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-surface-muted px-margin-mobile md:px-margin-desktop">
    <div class="max-w-container-max mx-auto grid grid-cols-1 md:grid-cols-3 gap-y-12 gap-x-8">
        <div class="flex gap-4 items-start group">
            <div class="bg-primary-fixed p-3 rounded-xl text-primary group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-3xl">school</span>
            </div>
            <div>
                <h3 class="font-headline-sm text-headline-sm mb-2">Tim Profesional</h3>
                <p class="text-body-md text-secondary">Lulusan terbaik dari berbagai jurusan perguruan tinggi negeri maupun swasta.</p>
            </div>
        </div>
        <div class="flex gap-4 items-start group">
            <div class="bg-primary-fixed p-3 rounded-xl text-primary group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-3xl">verified</span>
            </div>
            <div>
                <h3 class="font-headline-sm text-headline-sm mb-2">Kualitas Terbaik</h3>
                <p class="text-body-md text-secondary">Tim diseleksi dengan ketat agar menghasilkan pengerjaan berkualitas tinggi.</p>
            </div>
        </div>
        <div class="flex gap-4 items-start group">
            <div class="bg-primary-fixed p-3 rounded-xl text-primary group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-3xl">lock</span>
            </div>
            <div>
                <h3 class="font-headline-sm text-headline-sm mb-2">Pelayanan & Privasi</h3>
                <p class="text-body-md text-secondary">Memberikan pelayanan terbaik dan menjaga privasi klien dengan sangat aman.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
    <div class="flex justify-between items-end mb-12">
        <div>
            <h2 class="text-headline-md font-headline-md mb-2">Kategori Produk</h2>
            <div class="w-20 h-1 bg-primary"></div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="md:col-span-2 relative h-64 rounded-2xl overflow-hidden group cursor-pointer shadow-sm hover:shadow-xl transition-all">
            <img class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBcS_Jw6KKuokpEb-3w3eejQLa_I82_2xqu0eK38w80UYEmT0UA2ffU4HUGxkH1MSvzNmaKc_p4fjVFJIxsPXrZ_O_VNhXdpypC8vGU7ViUYqEK3f1hNBxhuaCQYKg1RXQQWxb4RN3rSCQopBZ1xkEayORKdarHRpTxxDoaSyOjEJZlSWVTy66N3IOrTqJ_kaoJO3pBBeJ5S_PXBuTZSw6C5wUuiprZFm6-JMfLAGqsZlZaEzjqHJaLGNTS_79gwMHDhE13jPM6rHg"/>
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-8 text-white">
                <span class="text-primary-fixed font-bold text-headline-sm">20</span>
                <h3 class="text-headline-sm font-headline-sm">Joki Tugas Kuliah</h3>
            </div>
        </div>
        <div class="relative h-64 rounded-2xl overflow-hidden group cursor-pointer shadow-sm hover:shadow-xl transition-all">
            <img class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD1xF-anZVZD8gn6jUZTzSrqaUZt_umX1He0vh3xzuTlRvBEn-2qZyyWrKN0_3a0sHkRi-yKnjeca0dDRWVfqcngx_s-WG0na15jkWnJjpZpCF8095rJM-Ehn_oBHrfRJhvux7JVj7qnJ58fjrdc5g4uZk0B5yUfiEMz1W4T5AMVC6jlwrTgKwmxFHWdx2H06iia73LaIUVgq8HWIrozOw54OgU6IIW1tUbMebWKvqlIDIoNv2308smp36ukMfw4iKMyEMa5aJW0xs"/>
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-6 text-white">
                <span class="text-primary-fixed font-bold text-headline-sm">25</span>
                <h3 class="text-headline-sm font-headline-sm">Karya Ilmiah</h3>
            </div>
        </div>
        <div class="relative h-64 rounded-2xl overflow-hidden group cursor-pointer shadow-sm hover:shadow-xl transition-all">
            <img class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBm-77jVb1xYMq3a5zpnVigLncgNgRAmhf4EMN9inSnHBYhjm8tmbITVeTJUEP4uNA8XytXFeCX1_VWiTAJOIzFMyko1ev16WDGOCn4UiM-TyEDI4JmpjZdgcm3Qaa6b-O5KphRTFPr4ROEDcDDx-7WKIZMIeGi4gVA0FNZ_J9r2R3Gje1R4-HL7RfTaUXAEmjRMS_XY3Etn4NmRcAzX7MdF_fgbTy55rc7eA7kCCQHTbBa7rg2nOj62hm0KBNRhHdKZSe_b8nZjkQ"/>
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-6 text-white">
                <span class="text-primary-fixed font-bold text-headline-sm">15</span>
                <h3 class="text-headline-sm font-headline-sm">Olah Data</h3>
            </div>
        </div>
    </div>
</section>

<section class="py-section-gap bg-surface-container-low px-margin-mobile md:px-margin-desktop">
    <div class="max-w-container-max mx-auto">
        <div class="flex justify-between items-end mb-12">
            <div>
                <h2 class="text-headline-md font-headline-md mb-2">Produk Jasa</h2>
                <p class="text-secondary">Layanan unggulan paling banyak dicari</p>
            </div>
            <a class="text-primary font-bold flex items-center gap-1 group" href="<?= base_url('products') ?>">
                Semua Produk <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-surface-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all border border-outline-variant flex flex-col">
                <img alt="Jasa Atlas.ti" class="w-full aspect-[1.2] object-cover" src="https://lh3.googleusercontent.com/aida/ADBb0uglvCtlgX5910yt-RnZmsOqAxe-vy0yABYh5mASLEapYr4oohOh9zO1-yBbvOzlRjHU-mEUjwZq34M4LUUqnc4dWbevkI63SMRxbLAcZm6_xlAahv8vK2LLWsO6L9GhbxnwjdKFTcpsuW2TtBy3QmqpTM_RDbLduLKVoKbGU5xsINott_cfmzOaSXC-AeyjHLqYnoMabJM-0hJ1eO3VRhATMxXAOvhsU_yS93U1ODQ5H_jEqdR-J06YOUo"/>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="font-headline-sm text-lg mb-4 text-on-background line-clamp-2">Jasa Atlas.ti untuk Analisis dan Olah Data Kualitatif No.1 Indonesia</h3>
                    <div class="mt-auto">
                        <p class="text-primary font-bold text-lg mb-4">Rp500.000</p>
                        <button class="trigger-login w-full bg-secondary text-white py-3 rounded font-label-md hover:bg-primary transition-colors flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined text-sm">shopping_cart</span> Add to cart
                        </button>
                    </div>
                </div>
            </div>
            <div class="bg-surface-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all border border-outline-variant flex flex-col">
                <img alt="Jasa Cari Jurnal" class="w-full aspect-[1.2] object-cover" src="https://lh3.googleusercontent.com/aida/ADBb0uhogkxpddBbc_-hmdrGAZlP7Ge41ghxvQh2k81HlEpctWclvUGiAGXIn5_EMZsjmEVZrTam6K5UnCWff1_tdUj-Is2if7tM7jm0AV0oje5eY1-uPevaRPJZkSS1R-JxWFmXVPc6_Eu4JHNNJj5QcHuOfEMWoEcH97HhpPvijrdWx5QG0S2_enSLz8xT7CMB0JUcQIOcmIaMQG-jE84Rny78Vbbsz3uON_P7ICs8f6f3D3q1ot7cDTp2kw0"/>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="font-headline-sm text-lg mb-4 text-on-background line-clamp-2">Jasa Cari Jurnal Scopus & Sinta untuk Referensi #1 Indonesia</h3>
                    <div class="mt-auto">
                        <p class="text-primary font-bold text-lg mb-4">Rp100.000</p>
                        <button class="trigger-login w-full bg-secondary text-white py-3 rounded font-label-md hover:bg-primary transition-colors flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined text-sm">shopping_cart</span> Add to cart
                        </button>
                    </div>
                </div>
            </div>
            <div class="bg-surface-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all border border-outline-variant flex flex-col relative">
                <div class="absolute top-4 right-4 bg-error text-white text-label-sm px-3 py-1 rounded-full font-bold z-10">40% OFF</div>
                <img alt="Jasa Turnitin" class="w-full aspect-[1.2] object-cover" src="https://lh3.googleusercontent.com/aida/ADBb0uhWbMY4m2sxRaFyZCaXMN4G6Z8V0y-KuO411yd9n6Pd_4mlVMlIStxq_5e07hbPDGB_OIr-78tOMOOKrgCWJR2-kf7m_CSfKaviaaa1ZQCfq0AHmu6Whqn_huOUWXd9BrTyBoX8Z5mBqL-76V1AHtX_CvVO9KOFbS1gw3i0V2Yzd035KwIAk7mAYJzfilz0vxrfQ3ESSJJfljECCKIEHlNgS1xUiC3lI6BvJqFyxQtMvy8L-ExEa_m8BGg"/>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="font-headline-sm text-lg mb-4 text-on-background line-clamp-2">Jasa Cek Turnitin Murah Cepat Terpercaya No.1 Indonesia</h3>
                    <div class="mt-auto">
                        <div class="flex items-center gap-2 mb-4">
                            <p class="text-primary font-bold text-lg">Rp30.000</p>
                            <p class="text-secondary line-through text-sm">Rp50.000</p>
                        </div>
                        <button class="trigger-login w-full bg-secondary text-white py-3 rounded font-label-md hover:bg-primary transition-colors flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined text-sm">shopping_cart</span> Add to cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-inverse-surface text-white">
    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-2 md:grid-cols-4 gap-12 text-center">
        <div>
            <span class="material-symbols-outlined text-4xl text-primary-fixed mb-4">assignment_turned_in</span>
            <p class="text-headline-md font-headline-md">10.000+</p>
            <p class="text-label-md text-surface-variant">Project Terselesaikan</p>
        </div>
        <div>
            <span class="material-symbols-outlined text-4xl text-primary-fixed mb-4">sentiment_satisfied</span>
            <p class="text-headline-md font-headline-md">8.000+</p>
            <p class="text-label-md text-surface-variant">Klien Puas</p>
        </div>
        <div>
            <span class="material-symbols-outlined text-4xl text-primary-fixed mb-4">account_balance</span>
            <p class="text-headline-md font-headline-md">100+</p>
            <p class="text-label-md text-surface-variant">Universitas & Instansi</p>
        </div>
        <div>
            <span class="material-symbols-outlined text-4xl text-primary-fixed mb-4">groups</span>
            <p class="text-headline-md font-headline-md">50+</p>
            <p class="text-label-md text-surface-variant">Tim Profesional</p>
        </div>
    </div>
</section>

<section class="py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
    <div class="text-center mb-16">
        <h2 class="text-headline-md font-headline-md mb-4">Frequently Asked Questions</h2>
        <p class="text-secondary max-w-2xl mx-auto">Silahkan lihat bagian FAQ kami untuk mendapatkan pemahaman lebih jelas tentang layanan yang kami sediakan.</p>
    </div>
    <div class="max-w-3xl mx-auto space-y-4">
        <details class="group border border-outline-variant rounded-xl overflow-hidden transition-all duration-300" open>
            <summary class="flex justify-between items-center p-6 cursor-pointer bg-surface-white hover:bg-surface-muted transition-colors list-none">
                <span class="font-bold text-on-background">Apa Itu AkademikPro.id?</span>
                <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
            </summary>
            <div class="p-6 bg-surface-white text-secondary leading-relaxed border-t border-outline-variant">
                AkademikPro.id adalah marketplace digital jasa akademik profesional yang menyediakan berbagai layanan akademik berkualitas di Indonesia. Kami membantu mahasiswa, peneliti, dan profesional dalam menyelesaikan tugas akademik dengan cepat, terpercaya, dan sesuai standar ilmiah.
            </div>
        </details>
        <details class="group border border-outline-variant rounded-xl overflow-hidden transition-all duration-300">
            <summary class="flex justify-between items-center p-6 cursor-pointer bg-surface-white hover:bg-surface-muted transition-colors list-none">
                <span class="font-bold text-on-background">Apakah Layanan AkademikPro.id Terpercaya?</span>
                <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
            </summary>
            <div class="p-6 bg-surface-white text-secondary leading-relaxed border-t border-outline-variant">
                Ya, AkademikPro.id adalah layanan profesional dan terpercaya yang telah beroperasi sejak 2019. Selama bertahun-tahun, kami telah membantu ribuan pelanggan menyelesaikan tugas akademik mereka dengan hasil yang memuaskan.
            </div>
        </details>
        <details class="group border border-outline-variant rounded-xl overflow-hidden transition-all duration-300">
            <summary class="flex justify-between items-center p-6 cursor-pointer bg-surface-white hover:bg-surface-muted transition-colors list-none">
                <span class="font-bold text-on-background">Bagaimana Cara Memesan Layanan?</span>
                <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
            </summary>
            <div class="p-6 bg-surface-white text-secondary leading-relaxed border-t border-outline-variant">
                Pemesanan sangat mudah: 1. Hubungi via WhatsApp, 2. Konsultasi kebutuhan, 3. Confirm & Bayar DP, 4. Pengerjaan dimulai, 5. Hasil dikirimkan.
            </div>
        </details>
    </div>
</section>

<section class="py-16 border-t border-outline-variant bg-white">
    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop text-center">
        <h3 class="text-label-md font-label-md text-secondary uppercase tracking-widest mb-8">Partnership & Payment</h3>
        <div class="flex flex-wrap justify-center items-center gap-12 grayscale opacity-60">
            <img alt="BCA" class="h-8" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCSvJCT-FXQOPbL3d1Y0pkrUzRBEsBXLbT-WHpP3Tp3HejHDsD8Ye8QjIc-Mn33e4vA8f_zd-AYo6Qo8s8IQj_rsaQIAPTqjhkHsXlgwqPQjZOR_kRgFihSHw1tDpcftRsAlw9wyG3LV1xyDQ114_l3vcTTP1sFXAbG9DqHCTeciJY7F0qRutev9mdaSnPRfXlxOVlwDVArVDF7Ye4rYUxCGJRcdt_CIqktEx3R3cYTu7OBNitqy3AtMJWosdQZchMB3vN1HsI-3cE"/>
            <img alt="BRI" class="h-8" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAP5-9rHly9AIho0MvWVI6_EE9mE1NlKYmabLd9bnqy3lOpPIKiQOnDJj2uMCtMlpERg6CLnPnQRSNCzHB8cyK--TLboGA_A06gXH3N_oGkbu41-lMuMM-J7Wp_LAAjuSVMMEXY8h4ho3D2ATSr3Biy57XNWA564FjLsV7VpQl8Iofw5HRpREPwYyopHg_xAbVtTFrleloPRw-hyVCZJa3gNTPtBtGAi3rE9yuekQ6jS5FSoafy0pZ_qgky9UAeubVU5sExlSCrWaQ"/>
            <img alt="Mandiri" class="h-8" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAd_ZMH2Jm_6aWQv7mtYqPbzCEiar8oJpJgHuGcOqja0_gHzE0EqMAD0rtbl2XNytKZoMNemwIwi7U9-l76VqFxzNF-PiKT7rPkeiaQZQymVQMQJ0lDkoihgA28njQElTV42IVDVJHu7kGqr2UyX1QOTqD2GfSuZBqiyctCl46-7OIg5DG0BEAEujKY8RjSFDXrgQE3ZKXw5jwhlMa58eJCl9aByyEyKJ15cb7ly3pJjOacWAjmiDU2ayjIJZ9ypt1_mqI-fQ3-NKM"/>
            <img alt="Indomaret" class="h-8" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA1-XEZl2hXqtAV0UidvCZV0JqK-P04FQdkfvxG0ABunMsDGFyHk5dJsinyMjQjRLEm-mcdt9pRxT8r6NYgQjzx_FI9vFj1oJhAhUvb-5FptktChHX0s9Y8-m8Mbfxs3Cbu-iElKFt7-CiH8fsAfVt6ZeHvDqDr_aWneGvT0DNhWzHhn4df_7HsxQvpRZvL44na0DAapmUGfgMGN1EP9RoIpOLApfUEEZAbHrK1eHTW3smwWufmCfKr4ygS2GbN_vBvpoRLIaCMO-M"/>
        </div>
    </div>
</section>

<?= $this->endSection() ?>