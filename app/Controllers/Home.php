<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // Memanggil file dashboard.php yang otomatis mewarisi sistem layouting template
        return view('dashboard');
    }
}