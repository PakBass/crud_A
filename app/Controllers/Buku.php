<?php

namespace App\Controllers;

use App\Models\BukuModel;

class Buku extends BaseController
{
    protected $bukuModel;
    public function __construct()
    {
        $this->bukuModel = new BukuModel();
    }


    public function index()
    {
        $buku = $this->bukuModel->findAll();
        $data = [
            'title'     => 'Data Buku | Programing RPL A',
            'buku'      =>$buku
        ];
        return view('Buku/index', $data);
    }
}
