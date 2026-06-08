<?php

namespace App\Controllers;

class Cart extends BaseController
{
    public function index()
    {
        $session = session();
        $cart = $session->get('cart') ?? [];
        
        $subtotal = 0;
        foreach($cart as $item) {
            $subtotal += ($item['price'] * $item['qty']);
        }

        $discount = $session->get('discount_amount') ?? 0;
        $applied_coupon = $session->get('applied_coupon') ?? '';
        $total = max(0, $subtotal - $discount);

        $data = [
            'cart'           => $cart,
            'subtotal'       => $subtotal,
            'discount'       => $discount,
            'total'          => $total,
            'applied_coupon' => $applied_coupon
        ];

        return view('cart', $data);
    }

    public function add()
    {
        $session = session();
        
        if (!$session->get('isLoggedIn')) {
            return redirect()->back()->with('error', 'Silakan login terlebih dahulu.');
        }

        $id    = $this->request->getPost('id'); 
        $name  = $this->request->getPost('name');
        $price = $this->request->getPost('price');
        $image = $this->request->getPost('image');

        $cart = $session->get('cart') ?? [];

        if (array_key_exists($id, $cart)) {
            $cart[$id]['qty'] += 1;
        } else {
            $cart[$id] = [
                'name'  => $name,
                'price' => $price,
                'qty'   => 1,
                'image' => $image
            ];
        }

        $session->set('cart', $cart);
        
        return redirect()->to('/cart')->with('cart_success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    public function remove($id)
    {
        $session = session();
        $cart = $session->get('cart') ?? [];

        if (array_key_exists($id, $cart)) {
            unset($cart[$id]);
            $session->set('cart', $cart);
        }

        if (empty($session->get('cart'))) {
            $session->remove(['applied_coupon', 'discount_amount']);
        }

        return redirect()->to('/cart')->with('cart_success', 'Produk berhasil dihapus dari keranjang.');
    }

    public function update()
    {
        $session = session();
        $cart = $session->get('cart') ?? [];
        $qtys = $this->request->getPost('qty');

        if ($qtys && is_array($qtys)) {
            foreach ($qtys as $id => $qty) {
                if (isset($cart[$id])) {
                    $qty = (int)$qty;
                    if ($qty > 0) {
                        $cart[$id]['qty'] = $qty;
                    } else {
                        unset($cart[$id]);
                    }
                }
            }
            $session->set('cart', $cart);
        }
        
        if (empty($cart)) {
            $session->remove(['applied_coupon', 'discount_amount']);
        }

        return redirect()->to('/cart')->with('cart_success', 'Keranjang berhasil diperbarui!');
    }

    // 🌟 FUNGSI BARU: Menerapkan Kupon
    public function applyCoupon()
    {
        $session = session();
        $code = trim($this->request->getPost('coupon_code'));

        // Logika Sistem Internal (Tanpa Cek Database)
        if (strtoupper($code) === 'PROMO10K') {
            $session->set([
                'applied_coupon'  => 'PROMO10K',
                'discount_amount' => 10000 // Total dipotong Rp10.000
            ]);
            $session->setFlashdata('coupon_success', 'Kupon berhasil digunakan!');
        } else {
            // Jika salah, kirim pesan error spesifik
            $session->setFlashdata('coupon_error', 'Kupon tidak ditemukan.');
        }
        return redirect()->to('/cart');
    }

    // 🌟 FUNGSI BARU: Menghapus Kupon
    public function removeCoupon()
    {
        $session = session();
        $session->remove(['applied_coupon', 'discount_amount']);
        $session->setFlashdata('coupon_success', 'Kupon berhasil dilepas.');
        return redirect()->to('/cart');
    }

    public function checkout()
    {
        $session = session();
        $cart = $session->get('cart') ?? [];
        
        if (empty($cart)) {
            return redirect()->to('/cart');
        }

        $subtotal = 0;
        foreach($cart as $item) {
            $subtotal += ($item['price'] * $item['qty']);
        }

        $discount = $session->get('discount_amount') ?? 0;
        $applied_coupon = $session->get('applied_coupon') ?? '';
        $total = max(0, $subtotal - $discount);

        $data = [
            'cart'           => $cart,
            'subtotal'       => $subtotal,
            'discount'       => $discount,
            'total'          => $total,
            'applied_coupon' => $applied_coupon
        ];

        return view('checkout', $data);
    }

    public function processCheckout()
    {
        $session = session();
        $cart = $session->get('cart') ?? [];
        
        if (empty($cart)) {
            return redirect()->to('/cart');
        }

        $post = $this->request->getPost();
        $emailPengguna = $session->get('email_pengguna');
        
        if ($emailPengguna) {
            $penggunaModel = new \App\Models\PenggunaModel();
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
        }

        $subtotal = 0;
        foreach($cart as $item) {
            $subtotal += ($item['price'] * $item['qty']);
        }

        $discount = $session->get('discount_amount') ?? 0;
        $total = max(0, $subtotal - $discount);

        $orderNumber = mt_rand(1000, 9999);
        $paymentMethod = 'Direct bank transfer'; 
        
        // Simpan ke pesanan
        $pesananModel = new \App\Models\PesananModel();
        $pesananModel->insert([
            'nomor_order'       => $orderNumber,
            'email_pengguna'    => $emailPengguna,
            'tanggal_pembelian' => date('Y-m-d H:i:s'),
            'metode_pembayaran' => $paymentMethod,
            'subtotal'          => $subtotal,
            'coupon'            => '', // 🌟 KOSONGKAN SEMENTARA: Tidak masuk ke database
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

        $detailModel = new \App\Models\DetailPesananModel();
        foreach($cart as $item) {
            $detailModel->insert([
                'nomor_order' => $orderNumber,
                'nama_produk' => $item['name'],
                'jumlah'      => $item['qty']
            ]);
        }

        $orderData = [
            'order_number'   => $orderNumber,
            'date'           => date('F j, Y'),
            'total'          => $total,
            'payment_method' => $paymentMethod,
            'billing'        => $post,
            'items'          => $cart
        ];

        $session->setFlashdata('order_data', $orderData);
        $session->remove(['cart', 'applied_coupon', 'discount_amount']);

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