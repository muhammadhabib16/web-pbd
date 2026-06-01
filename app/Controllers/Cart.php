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
}