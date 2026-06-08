<?php

namespace App\Controllers;

use App\Models\KeranjangModel;
use App\Models\PenggunaModel;
use App\Models\PesananModel;
use App\Models\DetailPesananModel;

class Cart extends BaseController
{
    public function index()
    {
        $session = session();
        
        if (!$session->get('isLoggedIn')) {
            return view('cart', ['cart' => [], 'total' => 0]);
        }

        $emailPengguna = $session->get('email_pengguna');
        $keranjangModel = new KeranjangModel();
        
        $cartItems = $keranjangModel->where('email_pengguna', $emailPengguna)->findAll();
        
        $total = 0;
        $cart = [];
        foreach($cartItems as $item) {
            $total += ($item['harga'] * $item['qty']);
            $cart[$item['id']] = [
                'name'  => $item['nama_produk'],
                'price' => $item['harga'],
                'qty'   => $item['qty'],
                'image' => $item['gambar_produk']
            ];
        }

        $data = [
            'cart'  => $cart,
            'total' => $total
        ];

        return view('cart', $data);
    }

    public function add()
    {
        $session = session();
        
        if (!$session->get('isLoggedIn')) {
            return redirect()->back()->with('error', 'Silakan login terlebih dahulu.');
        }

        $name  = $this->request->getPost('name');
        $price = $this->request->getPost('price');
        $image = $this->request->getPost('image');
        $emailPengguna = $session->get('email_pengguna');

        $keranjangModel = new KeranjangModel();

        // Check if product already exists in user's cart
        $existingItem = $keranjangModel->where('email_pengguna', $emailPengguna)
                                       ->where('nama_produk', $name)
                                       ->first();

        if ($existingItem) {
            // Update qty
            $keranjangModel->update($existingItem['id'], [
                'qty' => $existingItem['qty'] + 1
            ]);
        } else {
            // Insert new
            $keranjangModel->insert([
                'email_pengguna' => $emailPengguna,
                'nama_produk'    => $name,
                'qty'            => 1,
                'harga'          => $price,
                'gambar_produk'  => $image
            ]);
        }
        
        return redirect()->to('/cart')->with('cart_success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    public function remove($id)
    {
        $session = session();
        
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/');
        }

        $keranjangModel = new KeranjangModel();
        
        // Ensure user can only delete their own cart items
        $emailPengguna = $session->get('email_pengguna');
        $item = $keranjangModel->find($id);

        if ($item && $item['email_pengguna'] === $emailPengguna) {
            $keranjangModel->delete($id);
        }

        return redirect()->to('/cart')->with('cart_success', 'Produk berhasil dihapus dari keranjang.');
    }

    public function update()
    {
        $session = session();
        
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/');
        }

        $keranjangModel = new KeranjangModel();
        $emailPengguna = $session->get('email_pengguna');
        $qtys = $this->request->getPost('qty');

        if ($qtys && is_array($qtys)) {
            foreach ($qtys as $id => $qty) {
                $item = $keranjangModel->find($id);
                if ($item && $item['email_pengguna'] === $emailPengguna) {
                    $qty = (int)$qty;
                    if ($qty > 0) {
                        $keranjangModel->update($id, ['qty' => $qty]);
                    } else {
                        $keranjangModel->delete($id);
                    }
                }
            }
        }

        return redirect()->to('/cart')->with('cart_success', 'Keranjang berhasil diperbarui!');
    }

    public function checkout()
    {
        $session = session();
        
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/cart');
        }

        $emailPengguna = $session->get('email_pengguna');
        $keranjangModel = new KeranjangModel();
        $cartItems = $keranjangModel->where('email_pengguna', $emailPengguna)->findAll();
        
        if (empty($cartItems)) {
            return redirect()->to('/cart');
        }

        $total = 0;
        $cart = [];
        foreach($cartItems as $item) {
            $total += ($item['harga'] * $item['qty']);
            $cart[$item['id']] = [
                'name'  => $item['nama_produk'],
                'price' => $item['harga'],
                'qty'   => $item['qty'],
                'image' => $item['gambar_produk']
            ];
        }

        $data = [
            'cart'  => $cart,
            'total' => $total
        ];

        return view('checkout', $data);
    }

    public function processCheckout()
    {
        $session = session();
        
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/');
        }

        $emailPengguna = $session->get('email_pengguna');
        $keranjangModel = new KeranjangModel();
        $cartItems = $keranjangModel->where('email_pengguna', $emailPengguna)->findAll();
        
        if (empty($cartItems)) {
            return redirect()->to('/cart');
        }

        $post = $this->request->getPost();
        
        // Update data pengguna (billing address)
        $penggunaModel = new PenggunaModel();
        $penggunaModel->update($emailPengguna, [
            'nama_depan'    => $post['first_name'] ?? '',
            'nama_belakang' => $post['last_name'] ?? '',
            'company'       => $post['company'] ?? '',
            'country'       => $post['country'] ?? '',
            'jalan'         => $post['address_1'] ?? '',
            'detail_alamat' => $post['address_2'] ?? '',
            'kota'          => $post['city'] ?? '',
            'provinsi'      => $post['province'] ?? '',
            'kode_pos'      => $post['postcode'] ?? '',
            'no_telp'       => $post['phone'] ?? '',
        ]);

        $total = 0;
        $cart = [];
        foreach($cartItems as $item) {
            $total += ($item['harga'] * $item['qty']);
            $cart[$item['id']] = [
                'name'  => $item['nama_produk'],
                'price' => $item['harga'],
                'qty'   => $item['qty'],
                'image' => $item['gambar_produk']
            ];
        }

        $orderNumber = mt_rand(1000, 9999);
        $paymentMethod = 'Direct bank transfer'; // Default from design
        
        // Simpan ke pesanan
        $pesananModel = new PesananModel();
        $pesananModel->insert([
            'nomor_order'       => $orderNumber,
            'email_pengguna'    => $emailPengguna,
            'tanggal_pembelian' => date('Y-m-d H:i:s'),
            'metode_pembayaran' => $paymentMethod,
            'subtotal'          => $total,
            'coupon'            => '',
            'total'             => $total,
            'catatan'           => $post['order_notes'] ?? '',
            'no_rek_penerima'   => null,
            'nama_depan'        => $post['first_name'] ?? '',
            'nama_belakang'     => $post['last_name'] ?? '',
            'company'           => $post['company'] ?? '',
            'jalan'             => $post['address_1'] ?? '',
            'detail_alamat'     => $post['address_2'] ?? '',
            'kota'              => $post['city'] ?? '',
            'provinsi'          => $post['province'] ?? '',
            'kode_pos'          => $post['postcode'] ?? '',
            'country'           => $post['country'] ?? '',
            'no_telp'           => $post['phone'] ?? ''
        ]);

        // Simpan ke detail_pesanan
        $detailModel = new DetailPesananModel();
        foreach($cartItems as $item) {
            $detailModel->insert([
                'nomor_order' => $orderNumber,
                'nama_produk' => $item['nama_produk'],
                'jumlah'      => $item['qty']
            ]);
        }

        // Simulate order creation for the view
        $orderData = [
            'order_number'   => $orderNumber,
            'date'           => date('F j, Y'),
            'total'          => $total,
            'payment_method' => $paymentMethod,
            'billing'        => $post,
            'items'          => $cart
        ];

        // Store in flashdata
        $session->setFlashdata('order_data', $orderData);

        // Empty cart in database
        $keranjangModel->where('email_pengguna', $emailPengguna)->delete();

        return redirect()->to('/checkout/received');
    }

    public function orderReceived()
    {
        $session = session();
        $orderData = $session->getFlashdata('order_data');

        if (!$orderData) {
            return redirect()->to('/');
        }

        return view('order_received', ['order' => $orderData]);
    }
}