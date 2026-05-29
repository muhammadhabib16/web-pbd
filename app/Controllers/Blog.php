<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index(): string
    {
        // Memanggil file app/Views/blog.php
        return view('blog');
    }
}