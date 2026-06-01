<?php

namespace App\Controllers;

class Products extends BaseController
{
    public function index()
    {
        $produkModel = new \App\Models\ProdukModel();
        
        // Menangkap request sorting dari dropdown (misal: ?sort=price_low)
        $sort = $this->request->getGet('sort');

        // Logika Sorting Database
        switch ($sort) {
            case 'price_low':
                // Menghapus 'Rp' dan titik di SQL agar bisa diurutkan sebagai angka murni
                $produkModel->orderBy("CAST(REPLACE(REPLACE(harga_jual, 'Rp', ''), '.', '') AS UNSIGNED)", 'ASC', false);
                break;
            case 'price_high':
                $produkModel->orderBy("CAST(REPLACE(REPLACE(harga_jual, 'Rp', ''), '.', '') AS UNSIGNED)", 'DESC', false);
                break;
            case 'latest':
                // Mengutamakan produk dengan status 'Terbaru'
                $produkModel->orderBy('status_produk', 'DESC');
                break;
            case 'popularity':
                // Default sorting berdasar nama untuk popularity (karena belum ada tabel view/rating)
                $produkModel->orderBy('nama_produk', 'ASC');
                break;
            default:
                // Urutan bawaan
                $produkModel->orderBy('nama_produk', 'ASC');
                break;
        }
        
        $data = [
            'produk_jasa' => $produkModel->paginate(8, 'produk'),
            'pager' => $produkModel->pager,
            'current_sort' => $sort // Menyimpan state sorting saat ini
        ];
        
        // Gabungkan dengan viewData bawaan (jika ada data template global)
        $data = array_merge($this->viewData ?? [], $data);

        return view('products', $data);
    }

    public function detail($nama)
    {
        $produkModel = new \App\Models\ProdukModel();
        
        $produk = $produkModel->where('nama_produk', urldecode($nama))->first();

        if (!$produk) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'produk' => $produk
        ];
        
        $data = array_merge($this->viewData ?? [], $data);

        return view('product_detail', $data);
    }
}