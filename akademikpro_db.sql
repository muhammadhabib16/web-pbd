-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 13, 2026 at 01:07 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademikpro_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `judul_blog` varchar(255) NOT NULL,
  `kategori_produk` varchar(255) DEFAULT NULL,
  `gambar_blog` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`judul_blog`, `kategori_produk`, `gambar_blog`) VALUES
('Joki Karil UT Berapa? Di AkademikPro.id mulai Rp.150rb Saja!', 'Karya Ilmiah', 'local_mall'),
('Mengatasi Deadline Kuliah: Pakai Joki Tugas Kuliah AkademikPro.id Saja!', 'Jasa Tugas Kuliah', 'computer'),
('Penelitian Menggunakan Smart PLS', 'JASA OLAH DATA STATISTIK', 'analytics');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int UNSIGNED NOT NULL,
  `email_pengguna` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `coupon` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `subtotal_cart` int NOT NULL DEFAULT '0',
  `total_cart` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `email_pengguna`, `coupon`, `subtotal_cart`, `total_cart`) VALUES
(1, 'mhabibmhabib05@gmail.com', NULL, 30000, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `detail_cart`
--

CREATE TABLE `detail_cart` (
  `id_detail` int UNSIGNED NOT NULL,
  `id_cart` int UNSIGNED NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar_produk` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jumlah_produk_cart` int NOT NULL DEFAULT '1',
  `harga_jual_cart` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_cart`
--

INSERT INTO `detail_cart` (`id_detail`, `id_cart`, `nama_produk`, `gambar_produk`, `jumlah_produk_cart`, `harga_jual_cart`) VALUES
(2, 1, 'Jasa Cek Turnitin Murah Cepat Terpercaya No.1 Indonesia', 'cekturnitin.png', 1, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `nomor_order` varchar(50) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `jumlah` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `detail_pesanan`
--

INSERT INTO `detail_pesanan` (`nomor_order`, `nama_produk`, `jumlah`) VALUES
('5151', 'Jasa Cek Turnitin Murah Cepat Terpercaya No.1 Indonesia', 1),
('6088', 'Jasa Cari Jurnal Scopus & Sinta untuk Referensi #1 Indonesia', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `pertanyaan` varchar(255) NOT NULL,
  `web_url` varchar(255) DEFAULT NULL,
  `jawaban` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`pertanyaan`, `web_url`, `jawaban`) VALUES
('Apa itu AkademikPro.id?', 'https://akademikpro.id', 'AkademikPro.id adalah marketplace digital jasa akademik profesional yang menyediakan berbagai layanan akademik berkualitas di Indonesia. Kami membantu mahasiswa, peneliti, dan profesional dalam menyelesaikan tugas akademik dengan cepat, terpercaya, dan sesuai standar ilmiah. Layanan kami mencakup joki tugas kuliah, makalah, skripsi, tesis, disertasi, olah data statistik, penerjemahan, pembuatan peta, revisi akademik, dan masih banyak lagi. Dengan tim ahli yang berpengalaman dari berbagai konsentrasi ilmu pengetahuan, kami berkomitmen untuk memberikan hasil terbaik sesuai kebutuhan klien. AkademikPro.id hadir sebagai solusi bagi siapa saja yang membutuhkan bantuan akademik secara profesional dan terpercaya dengan harga relatif terjangkau.'),
('Apa Saja Keunggulan AkademikPro.id?', 'https://akademikpro.id', 'Keunggulan kami adalah kualitas terjamin, harga terjangkau, dan pelayanan responsif 24/7.'),
('Apakah Ada Diskon?', 'https://akademikpro.id', 'Tentu saja, kami sering memberikan promo diskon menarik dan paket bundling. Hubungi admin untuk detail selengkapnya.'),
('Apakah Layanan AkademikPro.id Terpercaya?', 'https://akademikpro.id', 'Ya, layanan kami sangat terpercaya dengan tim profesional di bidangnya.'),
('Bagaimana Cara Memesan Layanan di AkademikPro.id?', 'https://akademikpro.id', 'Pemesanan layanan jasa akademik di AkademikPro.id sangat mudah dan cepat. Ikuti langkah berikut:<br><br>1. <strong>Hubungi Kami</strong> melalui WhatsApp 082398122966 atau email admin@akademikpro.id untuk konsultasi.<br>2. <strong>Diskusikan kebutuhan Anda</strong> dan dapatkan penawaran harga terbaik.<br>3. <strong>Konfirmasi pesanan</strong> dan lakukan pembayaran melalui metode yang tersedia. Kami berlakukan sistem pembayaran DP (Down Payment).<br>4. <strong>Tim kami akan mulai mengerjakan pesanan</strong> sesuai tenggat waktu atau deadline yang disepakati.<br>5. <strong>Hasil pekerjaan dikirimkan</strong> dan Anda bisa melakukan revisi jika diperlukan.<br>6. <strong>Kami siap membantu kapan saja</strong> untuk memastikan layanan terbaik bagi Anda!'),
('Layanan Jasa Apa Saja yang Ditawarkan AkademikPro.id?', 'https://akademikpro.id', 'Kami menawarkan berbagai jasa penulisan karya ilmiah, tugas, skripsi, analisis data, dll.');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `nama_kategori` varchar(255) NOT NULL,
  `web_url` varchar(255) DEFAULT NULL,
  `gambar_kategori` varchar(255) DEFAULT NULL,
  `jumlah_produk` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`nama_kategori`, `web_url`, `gambar_kategori`, `jumlah_produk`) VALUES
('JASA BIMBINGAN SKRIPSI', 'https://akademikpro.id', 'local_library', 20),
('JASA OLAH DATA STATISTIK', 'https://akademikpro.id', 'monitoring', 15),
('JASA PEMBUATAN APLIKASI', 'https://akademikpro.id', 'developer_mode', 10),
('Jasa Tugas Kuliah', 'https://akademikpro.id', '', 0),
('JASA UI/UX DESIGN', 'https://akademikpro.id', 'design_services', 5),
('Karya Ilmiah', 'https://akademikpro.id', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kelebihan`
--

CREATE TABLE `kelebihan` (
  `id_kelebihan` int NOT NULL,
  `web_url` varchar(255) DEFAULT NULL,
  `judul_kelebihan` varchar(255) DEFAULT NULL,
  `deskripsi_kelebihan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kelebihan`
--

INSERT INTO `kelebihan` (`id_kelebihan`, `web_url`, `judul_kelebihan`, `deskripsi_kelebihan`) VALUES
(1, 'https://akademikpro.id', 'Tim Profesional', 'Tim AkademikPro.id merupakan lulusan terbaik dari berbagai jurusan perguruan tinggi negeri maupun swasta.'),
(2, 'https://akademikpro.id', 'Kualitas Terbaik', 'Tim AkademikPro.id diseleksi dengan ketat agar menghasilkan hasil pengerjaan berkualitas tinggi'),
(3, 'https://akademikpro.id', 'Pelayanan & Privasi', 'Kami selalu berusaha untuk memberikan pelayanan terbaik dan menjaga privasi klien dengan sangat aman.'),
(4, 'https://akademikpro.id', 'Amanah & Terpercaya', 'AkademikPro.id telah beroperasi sejak 2019 dan selalu menyediakan layanan akademik yang transparan.'),
(5, 'https://akademikpro.id', 'Harga Terjangkau', 'Kami selalu berusaha memberikan harga termurah tanpa mengurangi kualitas hasil pengerjaan project.'),
(6, 'https://akademikpro.id', 'Bergaransi', 'Untuk menjaga kualitas, kami menyediakan layanan revisi guna memperbaiki hasil yang ingin diubah klien.');

-- --------------------------------------------------------

--
-- Table structure for table `kontak_pesan`
--

CREATE TABLE `kontak_pesan` (
  `id_pesan` int NOT NULL,
  `email_pengirim` varchar(255) DEFAULT NULL,
  `nama_pengirim` varchar(150) DEFAULT NULL,
  `subjek` varchar(255) DEFAULT NULL,
  `isi_pesan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `nama_layanan` varchar(255) NOT NULL,
  `deskripsi_layanan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `namespace` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2026-06-08-155749', 'App\\Database\\Migrations\\CreateCartTables', 'default', 'App', 1780934339, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan_web`
--

CREATE TABLE `pengaturan_web` (
  `web_url` varchar(255) NOT NULL,
  `hero_title` varchar(255) DEFAULT NULL,
  `hero_description` varchar(255) DEFAULT NULL,
  `kontak_email` varchar(255) DEFAULT NULL,
  `kontak_phone` varchar(20) DEFAULT NULL,
  `deskripsi_pendaftaran` text,
  `keterangan_kontak` text,
  `url_youtube` varchar(255) DEFAULT NULL,
  `gambar_testimoni` varchar(255) DEFAULT NULL,
  `logo_partner` varchar(255) DEFAULT NULL,
  `logo_metode_pembayaran` varchar(255) DEFAULT NULL,
  `deskripsi_website` text,
  `visi` text,
  `misi` text,
  `keunggulan` text,
  `langkah_pemesanan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengaturan_web`
--

INSERT INTO `pengaturan_web` (`web_url`, `hero_title`, `hero_description`, `kontak_email`, `kontak_phone`, `deskripsi_pendaftaran`, `keterangan_kontak`, `url_youtube`, `gambar_testimoni`, `logo_partner`, `logo_metode_pembayaran`, `deskripsi_website`, `visi`, `misi`, `keunggulan`, `langkah_pemesanan`) VALUES
('https://akademikpro.id', 'Digital Marketplace Jasa Akademik Profesional No.1 di Indonesia', 'Akademikpro.id adalah marketplace digital jasa akademik profesional di Indonesia. Kami menyediakan layanan berkualitas seperti jasa joki tugas kuliah, pembuatan makalah, proposal, jurnal, essay, skripsi, tesis, disertasi, serta jasa olah data menggunakan ', 'admin@akademikpro.id', '082398122966', '', '', '', 'gambar_testimoni.png', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `email_pengguna` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_depan` varchar(100) DEFAULT NULL,
  `nama_belakang` varchar(100) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `jalan` varchar(255) DEFAULT NULL,
  `detail_alamat` varchar(255) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `provinsi` varchar(100) DEFAULT NULL,
  `kode_pos` varchar(20) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `shipping_nama_depan` varchar(255) DEFAULT NULL,
  `shipping_nama_belakang` varchar(255) DEFAULT NULL,
  `shipping_company` varchar(255) DEFAULT NULL,
  `shipping_country` varchar(255) DEFAULT NULL,
  `shipping_jalan` varchar(255) DEFAULT NULL,
  `shipping_detail_alamat` varchar(255) DEFAULT NULL,
  `shipping_kota` varchar(255) DEFAULT NULL,
  `shipping_provinsi` varchar(255) DEFAULT NULL,
  `shipping_kode_pos` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`email_pengguna`, `password`, `nama_depan`, `nama_belakang`, `company`, `country`, `jalan`, `detail_alamat`, `kota`, `provinsi`, `kode_pos`, `no_telp`, `shipping_nama_depan`, `shipping_nama_belakang`, `shipping_company`, `shipping_country`, `shipping_jalan`, `shipping_detail_alamat`, `shipping_kota`, `shipping_provinsi`, `shipping_kode_pos`) VALUES
('mhabibmhabib05@gmail.com', '$2y$12$9mnBF/G8K4KTrlJjKo3ZUORTgH5H4Uig7hCjWaxDkexCGgbIT3Bdm', 'Muhammad', 'Habib', 'Personal', 'Indonesia', 'kalumbuak', '', 'padang', 'Sulawesi Selatan', '25155', '081365987713', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `nomor_order` varchar(50) NOT NULL,
  `email_pengguna` varchar(255) DEFAULT NULL,
  `tanggal_pembelian` datetime DEFAULT NULL,
  `metode_pembayaran` varchar(50) DEFAULT NULL,
  `subtotal` varchar(50) DEFAULT NULL,
  `coupon` varchar(50) DEFAULT NULL,
  `total` varchar(50) DEFAULT NULL,
  `catatan` text,
  `no_rek_penerima` varchar(50) DEFAULT NULL,
  `nama_depan` varchar(255) DEFAULT NULL,
  `nama_belakang` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `jalan` varchar(255) DEFAULT NULL,
  `detail_alamat` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `kode_pos` varchar(50) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `no_telp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`nomor_order`, `email_pengguna`, `tanggal_pembelian`, `metode_pembayaran`, `subtotal`, `coupon`, `total`, `catatan`, `no_rek_penerima`, `nama_depan`, `nama_belakang`, `company`, `jalan`, `detail_alamat`, `kota`, `provinsi`, `kode_pos`, `country`, `no_telp`) VALUES
('5151', 'mhabibmhabib05@gmail.com', '2026-06-01 16:18:29', 'Direct bank transfer', '30000', '', '30000', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('6088', 'mhabibmhabib05@gmail.com', '2026-06-01 16:17:52', 'Direct bank transfer', '100000', '', '100000', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `nama_produk` varchar(255) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL,
  `gambar_produk` varchar(255) DEFAULT NULL,
  `harga_normal` varchar(50) DEFAULT NULL,
  `harga_jual` varchar(50) DEFAULT NULL,
  `discount` varchar(50) DEFAULT NULL,
  `status_produk` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`nama_produk`, `nama_kategori`, `gambar_produk`, `harga_normal`, `harga_jual`, `discount`, `status_produk`) VALUES
('Jasa Atlas.ti untuk Analisis dan Olah Data Kualitatif No.1 Indonesia', 'JASA OLAH DATA STATISTIK', 'jasaatlas.png', '', 'Rp500.000', '', 'Reguler'),
('Jasa Cari Jurnal Scopus & Sinta untuk Referensi #1 Indonesia', 'Karya Ilmiah', 'jasacarijurnal.png', '', 'Rp100.000', '', 'Reguler'),
('Jasa Cek Turnitin Murah Cepat Terpercaya No.1 Indonesia', 'Karya Ilmiah', 'cekturnitin.png', 'Rp50.000', 'Rp30.000', '40% OFF', 'Reguler'),
('Jasa Coding Arduino & IoT Murah dan Terpercaya!', 'JASA PEMBUATAN APLIKASI', 'jasaarduino.png', '', 'Rp500.000', '', 'Reguler'),
('Jasa Coding Python Murah & Berkualitas No.1 Indonesia', 'JASA PEMBUATAN APLIKASI', 'jasapython.png', '', 'Rp500.000', '', 'Reguler'),
('Jasa Joki Tugas Kuliah Jogja Murah No.1 Yogyakarta', 'Jasa Tugas Kuliah', 'jokitugasjogja.png', '', 'Rp50.000', '', 'Reguler'),
('Jasa Konversi Tesis ke Jurnal Ilmiah untuk S2 Terpercaya No.1', 'Karya Ilmiah', 'jasakonversitesis.png', '', 'Rp300.000', '', 'Terbaru'),
('Jasa Olah Data Statistik Murah & Terpercaya #1 Indonesia', 'JASA OLAH DATA STATISTIK', 'jasaolahdatastatistik.png', '', 'Rp200.000', '', 'Terbaru'),
('Joki Tugas Farmasi Murah dan Terpercaya No.1 Indonesia', 'Jasa Tugas Kuliah', 'jokitugasfarmasi.png', '', 'Rp100.000', '', 'Terbaru');

-- --------------------------------------------------------

--
-- Table structure for table `rekening_bank`
--

CREATE TABLE `rekening_bank` (
  `no_rek_penerima` varchar(50) NOT NULL,
  `jenis_bank_penerima` varchar(50) DEFAULT NULL,
  `nama_penerima` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`judul_blog`),
  ADD KEY `kategori_produk` (`kategori_produk`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `detail_cart`
--
ALTER TABLE `detail_cart`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `detail_cart_id_cart_foreign` (`id_cart`);

--
-- Indexes for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`nomor_order`,`nama_produk`),
  ADD KEY `nama_produk` (`nama_produk`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`pertanyaan`),
  ADD KEY `web_url` (`web_url`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`nama_kategori`),
  ADD KEY `web_url` (`web_url`);

--
-- Indexes for table `kelebihan`
--
ALTER TABLE `kelebihan`
  ADD PRIMARY KEY (`id_kelebihan`),
  ADD KEY `web_url` (`web_url`);

--
-- Indexes for table `kontak_pesan`
--
ALTER TABLE `kontak_pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `email_pengirim` (`email_pengirim`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`nama_layanan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaturan_web`
--
ALTER TABLE `pengaturan_web`
  ADD PRIMARY KEY (`web_url`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`email_pengguna`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`nomor_order`),
  ADD KEY `email_pengguna` (`email_pengguna`),
  ADD KEY `no_rek_penerima` (`no_rek_penerima`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`nama_produk`),
  ADD KEY `nama_kategori` (`nama_kategori`);

--
-- Indexes for table `rekening_bank`
--
ALTER TABLE `rekening_bank`
  ADD PRIMARY KEY (`no_rek_penerima`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `detail_cart`
--
ALTER TABLE `detail_cart`
  MODIFY `id_detail` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelebihan`
--
ALTER TABLE `kelebihan`
  MODIFY `id_kelebihan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kontak_pesan`
--
ALTER TABLE `kontak_pesan`
  MODIFY `id_pesan` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`kategori_produk`) REFERENCES `kategori` (`nama_kategori`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `detail_cart`
--
ALTER TABLE `detail_cart`
  ADD CONSTRAINT `detail_cart_id_cart_foreign` FOREIGN KEY (`id_cart`) REFERENCES `cart` (`id_cart`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD CONSTRAINT `detail_pesanan_ibfk_1` FOREIGN KEY (`nomor_order`) REFERENCES `pesanan` (`nomor_order`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_pesanan_ibfk_2` FOREIGN KEY (`nama_produk`) REFERENCES `produk` (`nama_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faq`
--
ALTER TABLE `faq`
  ADD CONSTRAINT `faq_ibfk_1` FOREIGN KEY (`web_url`) REFERENCES `pengaturan_web` (`web_url`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `kategori_ibfk_1` FOREIGN KEY (`web_url`) REFERENCES `pengaturan_web` (`web_url`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelebihan`
--
ALTER TABLE `kelebihan`
  ADD CONSTRAINT `kelebihan_ibfk_1` FOREIGN KEY (`web_url`) REFERENCES `pengaturan_web` (`web_url`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kontak_pesan`
--
ALTER TABLE `kontak_pesan`
  ADD CONSTRAINT `kontak_pesan_ibfk_1` FOREIGN KEY (`email_pengirim`) REFERENCES `pengguna` (`email_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `layanan`
--
ALTER TABLE `layanan`
  ADD CONSTRAINT `layanan_ibfk_1` FOREIGN KEY (`nama_layanan`) REFERENCES `kategori` (`nama_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`email_pengguna`) REFERENCES `pengguna` (`email_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`no_rek_penerima`) REFERENCES `rekening_bank` (`no_rek_penerima`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`nama_kategori`) REFERENCES `kategori` (`nama_kategori`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
