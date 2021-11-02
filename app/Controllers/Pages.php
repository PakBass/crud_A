<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title'     => 'Home | Programing RPL A'
        ];
        return view('Pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title'     => 'About Me | Programing RPL A'
        ];
        return view('Pages/abaout', $data);
    }

    
    public function contact()
    {
        $data = [
            'title'     => 'Contact | Programing RPL A',
            'alamat'    => [
                    [
                    'sekolah'    => 'SMK Airlangga Balikpapan',
                    'alamat'     => 'Jl S.Parman No.14 Gn Guntur',
                    'kota'       => 'Kota Balikpapan'
                ]
            ]
        ];
        return view('Pages/contact', $data);
    }
}
