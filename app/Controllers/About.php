<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index(): string
    {
        // Memanggil file app/Views/about.php
        return view('about');
    }
}