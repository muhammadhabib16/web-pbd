-- ==========================================
-- DATABASE SCHEMA FINAL: AKADEMIKPRO.ID (3NF)
-- ==========================================

-- Create Database
CREATE DATABASE IF NOT EXISTS akademikpro_db;
USE akademikpro_db;

-- ==========================================
-- 1. TABEL INDEPENDEN (Tidak memiliki Foreign Key)
-- ==========================================

CREATE TABLE Pengaturan_Web (
  web_url VARCHAR(255) PRIMARY KEY,
  hero_title VARCHAR(255),
  hero_description VARCHAR(255),
  kontak_email VARCHAR(255),
  kontak_phone VARCHAR(20),
  deskripsi_pendaftaran TEXT,
  keterangan_kontak TEXT,
  url_youtube VARCHAR(255),
  gambar_testimoni VARCHAR(255),
  logo_partner VARCHAR(255),
  logo_metode_pembayaran VARCHAR(255),
  deskripsi_website TEXT,
  visi TEXT,
  misi TEXT,
  keunggulan TEXT,
  langkah_pemesanan TEXT
);

CREATE TABLE Pengguna (
  email_pengguna VARCHAR(255) PRIMARY KEY,
  password VARCHAR(255),
  nama_depan VARCHAR(100),
  nama_belakang VARCHAR(100),
  company VARCHAR(255),
  country VARCHAR(100),
  jalan VARCHAR(255),
  detail_alamat VARCHAR(255),
  kota VARCHAR(100),
  provinsi VARCHAR(100),
  kode_pos VARCHAR(20),
  no_telp VARCHAR(20)
);

CREATE TABLE Rekening_Bank (
  no_rek_penerima VARCHAR(50) PRIMARY KEY,
  jenis_bank_penerima VARCHAR(50),
  nama_penerima VARCHAR(150)
);


-- ==========================================
-- 2. TABEL DEPENDEN (Memiliki Foreign Key)
-- ==========================================

CREATE TABLE Kelebihan (
  id_kelebihan INT AUTO_INCREMENT PRIMARY KEY,
  web_url VARCHAR(255),
  judul_kelebihan VARCHAR(255),
  deskripsi_kelebihan TEXT,
  FOREIGN KEY (web_url) REFERENCES Pengaturan_Web(web_url) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Kategori (
  nama_kategori VARCHAR(255) PRIMARY KEY,
  web_url VARCHAR(255),
  gambar_kategori VARCHAR(255),
  jumlah_produk INT,
  FOREIGN KEY (web_url) REFERENCES Pengaturan_Web(web_url) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Layanan (
  nama_layanan VARCHAR(255) PRIMARY KEY,
  deskripsi_layanan TEXT,
  FOREIGN KEY (nama_layanan) REFERENCES Kategori(nama_kategori) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE FAQ (
  pertanyaan VARCHAR(255) PRIMARY KEY,
  web_url VARCHAR(255),
  jawaban TEXT,
  FOREIGN KEY (web_url) REFERENCES Pengaturan_Web(web_url) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Produk (
  nama_produk VARCHAR(255) PRIMARY KEY,
  nama_kategori VARCHAR(255),
  gambar_produk VARCHAR(255),
  harga_normal VARCHAR(50),
  harga_jual VARCHAR(50),
  discount VARCHAR(50),
  status_produk VARCHAR(50),
  FOREIGN KEY (nama_kategori) REFERENCES Kategori(nama_kategori) ON DELETE SET NULL ON UPDATE CASCADE
);

CREATE TABLE Blog (
  judul_blog VARCHAR(255) PRIMARY KEY,
  kategori_produk VARCHAR(255),
  gambar_blog VARCHAR(255),
  FOREIGN KEY (kategori_produk) REFERENCES Kategori(nama_kategori) ON DELETE SET NULL ON UPDATE CASCADE
);

CREATE TABLE Kontak_Pesan (
  id_pesan INT AUTO_INCREMENT PRIMARY KEY,
  email_pengirim VARCHAR(255),
  nama_pengirim VARCHAR(150),
  subjek VARCHAR(255),
  isi_pesan TEXT,
  FOREIGN KEY (email_pengirim) REFERENCES Pengguna(email_pengguna) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Pesanan (
  nomor_order VARCHAR(50) PRIMARY KEY,
  email_pengguna VARCHAR(255),
  tanggal_pembelian DATETIME,
  metode_pembayaran VARCHAR(50),
  subtotal VARCHAR(50),
  coupon VARCHAR(50),
  total VARCHAR(50),
  catatan TEXT,
  no_rek_penerima VARCHAR(50),
  FOREIGN KEY (email_pengguna) REFERENCES Pengguna(email_pengguna) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (no_rek_penerima) REFERENCES Rekening_Bank(no_rek_penerima) ON DELETE SET NULL ON UPDATE CASCADE
);

CREATE TABLE Detail_Pesanan (
  nomor_order VARCHAR(50),
  nama_produk VARCHAR(255),
  jumlah INT,
  PRIMARY KEY (nomor_order, nama_produk),
  FOREIGN KEY (nomor_order) REFERENCES Pesanan(nomor_order) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (nama_produk) REFERENCES Produk(nama_produk) ON DELETE CASCADE ON UPDATE CASCADE
);
