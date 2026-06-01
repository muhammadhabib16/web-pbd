<?php

namespace App\Controllers;

class Cart extends BaseController
{
    public function index()
    {
        $session = session();
        $cart = $session->get('cart') ?? [];
        
        $total = 0;
        foreach($cart as $item) {
            $total += ($item['price'] * $item['qty']);
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
            // Ini akan otomatis membuka modal login (karena mengirim 'error')
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
        
        // 🌟 UBAH: dari 'success' menjadi 'cart_success'
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

        return redirect()->to('/cart')->with('cart_success', 'Keranjang berhasil diperbarui!');
    }

    public function checkout()
    {
        $session = session();
        $cart = $session->get('cart') ?? [];
        
        if (empty($cart)) {
            return redirect()->to('/cart');
        }

        $total = 0;
        foreach($cart as $item) {
            $total += ($item['price'] * $item['qty']);
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
        $cart = $session->get('cart') ?? [];
        
        if (empty($cart)) {
            return redirect()->to('/cart');
        }

        $post = $this->request->getPost();
        $emailPengguna = $session->get('email_pengguna');
        
        if ($emailPengguna) {
            // Update data pengguna (billing address)
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

        $total = 0;
        foreach($cart as $item) {
            $total += ($item['price'] * $item['qty']);
        }

        $orderNumber = mt_rand(1000, 9999);
        $paymentMethod = 'Direct bank transfer'; // Default from design
        
        // Simpan ke pesanan
        $pesananModel = new \App\Models\PesananModel();
        $pesananModel->insert([
            'nomor_order'       => $orderNumber,
            'email_pengguna'    => $emailPengguna,
            'tanggal_pembelian' => date('Y-m-d H:i:s'),
            'metode_pembayaran' => $paymentMethod,
            'subtotal'          => $total,
            'coupon'            => '',
            'total'             => $total,
            'catatan'           => $post['order_notes'] ?? '',
            'no_rek_penerima'   => null 
        ]);

        // Simpan ke detail_pesanan
        $detailModel = new \App\Models\DetailPesananModel();
        foreach($cart as $item) {
            $detailModel->insert([
                'nomor_order' => $orderNumber,
                'nama_produk' => $item['name'],
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

        // Empty cart
        $session->remove('cart');

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