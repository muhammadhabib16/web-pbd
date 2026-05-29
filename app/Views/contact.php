<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<main class="min-h-screen">
<!-- Hero Section -->
<section class="relative bg-surface-container-low py-section-gap overflow-hidden pt-32">
<div class="absolute inset-0 opacity-10 pointer-events-none bg-dot-pattern-contact"></div>
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop relative z-10">
<div class="max-w-2xl">
<span class="inline-block text-primary font-label-md bg-primary-fixed px-4 py-1 rounded-full mb-6">Hubungi Kami</span>
<h1 class="font-display-lg text-display-lg-mobile md:text-display-lg text-on-background mb-6">
                            Mari Berdiskusi Mengenai <span class="text-primary">Masa Depan Akademik</span> Anda
                        </h1>
<p class="text-body-lg text-secondary max-w-xl">
                            Tim kami siap membantu menyelesaikan segala kendala tugas dan riset akademik Anda dengan profesionalisme tinggi.
                        </p>
</div>
</div>
</section>

<!-- Bento Contact Layout -->
<section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop -mt-16 relative z-20 pb-section-gap">
<div class="bento-grid grid-cols-1 md:grid-cols-12">
<!-- Contact Form Card -->
<div class="md:col-span-8 bg-surface-white p-8 md:p-12 rounded-xl shadow-[0px_4px_20px_rgba(0,0,0,0.05)] border border-outline-variant">
<h2 class="font-headline-md text-headline-md mb-8">Kirim Pesan</h2>
<form class="space-y-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="space-y-2">
<label class="text-label-md font-label-md text-on-surface-variant">Nama Lengkap</label>
<input class="w-full px-4 py-3 border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all bg-surface-bright" placeholder="Masukkan nama Anda" type="text"/>
</div>
<div class="space-y-2">
<label class="text-label-md font-label-md text-on-surface-variant">Alamat Email</label>
<input class="w-full px-4 py-3 border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all bg-surface-bright" placeholder="email@contoh.com" type="email"/>
</div>
</div>
<div class="space-y-2">
<label class="text-label-md font-label-md text-on-surface-variant">Subjek Layanan</label>
<select class="w-full px-4 py-3 border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all bg-surface-bright">
<option>Pilih Kategori Layanan</option>
<option>Joki Tugas Kuliah</option>
<option>Jasa Olah Data</option>
<option>Cek Turnitin</option>
<option>Lainnya</option>
</select>
</div>
<div class="space-y-2">
<label class="text-label-md font-label-md text-on-surface-variant">Pesan</label>
<textarea class="w-full px-4 py-3 border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all bg-surface-bright" placeholder="Ceritakan detail kebutuhan akademik Anda..." rows="5"></textarea>
</div>
<button class="w-full md:w-auto px-10 py-4 bg-primary text-on-primary font-label-md rounded-lg hover:bg-opacity-90 transition-all flex items-center justify-center gap-2" type="submit">
                                Kirim Sekarang
                                <span class="material-symbols-outlined">send</span>
</button>
</form>
</div>
<!-- Info Column -->
<div class="md:col-span-4 space-y-6">
<!-- WhatsApp Card -->
<div class="bg-primary text-on-primary p-8 rounded-xl shadow-lg relative overflow-hidden group">
<div class="absolute -right-8 -top-8 bg-white/10 w-32 h-32 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>
<div class="relative z-10">
<div class="flex items-center gap-3 mb-6">
<div class="bg-white/20 p-2 rounded-lg">
<span class="material-symbols-outlined icon-filled">chat</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-primary">Chat Admin</h3>
</div>
<p class="text-body-md text-white/80 mb-6">Dapatkan respon lebih cepat melalui konsultasi langsung via WhatsApp.</p>
<a class="inline-flex items-center gap-3 font-bold text-headline-sm hover:underline" href="https://api.whatsapp.com/send?phone=6282398122966">
                                    0823 9812 2966
                                    <span class="material-symbols-outlined">arrow_forward</span>
</a>
</div>
</div>
<!-- Hours Card -->
<div class="bg-surface-white p-8 rounded-xl border border-outline-variant shadow-sm">
<div class="flex items-center gap-3 mb-4">
<span class="material-symbols-outlined text-primary">schedule</span>
<h3 class="text-label-md font-label-md uppercase tracking-wider text-primary">Jam Kerja</h3>
</div>
<p class="font-headline-sm text-headline-sm mb-1">Setiap Hari</p>
<p class="text-secondary font-body-md">08.00 - 23.00 WIB</p>
</div>
<!-- Email Card -->
<div class="bg-surface-muted p-8 rounded-xl border border-outline-variant shadow-sm border-dashed">
<div class="flex items-center gap-3 mb-4">
<span class="material-symbols-outlined text-primary">mail</span>
<h3 class="text-label-md font-label-md uppercase tracking-wider text-primary">Email Resmi</h3>
</div>
<p class="font-headline-sm text-headline-sm mb-1">admin@akademikpro.id</p>
<p class="text-secondary font-body-md">Tanggapan dalam 1x24 jam</p>
</div>
</div>
</div>
</section>

<!-- Map Section (Asymmetric Image Placeholder) -->
<section class="bg-surface-white py-section-gap">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="flex flex-col md:flex-row gap-12 items-center">
<div class="w-full md:w-1/2 relative">
<div class="absolute inset-0 border-2 border-primary rounded-xl -translate-x-4 -translate-y-4 -z-10"></div>
<img alt="Office Location" class="rounded-xl shadow-xl w-full h-[400px] object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDdY1Tv5jfFhrnP_oL8iM-wbH2ziW7kWV4YLACx_koY94agfO0AL56t_LXpPLJpcsHgXs7yltSbDmG1VdNGRTpO-3oeftP2h8yoy83hOoM2gyE11WcHhGvPHwvGEtEv7ApLu0JxFwCCN0P2Cf9n_M6ITukqRlvnyI_3uMsWKro4eYPUqq-i6PB_qOQQMNAVu7uVuBq4BjDfhYsaDyH5XGzszLGTosLOX-PuAp4PDM53-0BqcjH0aqi8M2fEWaCY9m8YcilZasFropo"/>
</div>
<div class="w-full md:w-1/2 space-y-6">
<h2 class="font-display-lg text-headline-md text-on-background">Berlokasi di Jantung Pendidikan Indonesia</h2>
<p class="text-body-lg text-secondary">
                                Meskipun kami melayani seluruh Indonesia secara digital, sistem kami dikelola oleh tenaga ahli yang berbasis di pusat-pusat pendidikan ternama. Kami menjamin koordinasi yang mulus untuk setiap proyek Anda.
                            </p>
<div class="grid grid-cols-2 gap-8 pt-6">
<div>
<h4 class="font-bold text-primary mb-1">10.000+</h4>
<p class="text-label-sm text-secondary">Proyek Selesai</p>
</div>
<div>
<h4 class="font-bold text-primary mb-1">50+</h4>
<p class="text-label-sm text-secondary">Tim Profesional</p>
</div>
</div>
</div>
</div>
</div>
</section>
</main>

<?= $this->endSection() ?>

<!-- Menginjeksi file JavaScript External khusus halaman Contact -->
<?= $this->section('script') ?>
<script src="<?= base_url('js/contact.js') ?>"></script>
<?= $this->endSection() ?>