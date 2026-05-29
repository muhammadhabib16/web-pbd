<?php

namespace App\Controllers;

class Products extends BaseController
{
    public function index(): string
    {
        // Memanggil file app/Views/products.php
        return view('products');
    }
}