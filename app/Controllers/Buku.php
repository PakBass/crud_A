<?php

namespace App\Controllers;

class Buku extends BaseController
{
    public function index()
    {
        $data = [
            'title'     => 'Data Buku | Programing RPL A'
        ];
        return view('Buku/index', $data);
    }
}
