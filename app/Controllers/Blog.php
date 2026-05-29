<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index(): string
    {
        $blogModel = new \App\Models\BlogModel();
        
        $data = [
            'blogs' => $blogModel->findAll()
        ];
        
        $data = array_merge($this->viewData, $data);

        return view('blog', $data);
    }
}