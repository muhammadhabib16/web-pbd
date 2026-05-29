<?php

namespace App\Controllers;

class Products extends BaseController
{
    public function index(): string
    {
        $produkModel = new \App\Models\ProdukModel();
        
        $data = [
            'produk_jasa' => $produkModel->findAll()
        ];
        
        $data = array_merge($this->viewData, $data);

        return view('products', $data);
    }
}