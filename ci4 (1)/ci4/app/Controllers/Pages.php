<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Unipdu Press',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('page/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'Home | Unipdu Press',
        ];
        return view('page/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | Unipdu Press',
            'alamat' => [
                ['tipe' => 'Rumah', 'alamat' => 'Desa Kalipang Kec.Sarang', 'kota' => 'Rembang'],
                ['tipe' => 'Kantor', 'alamat' => 'Sarang Rembang', 'kota' => 'Rembang']
            ]
        ];
        return view('page/contact', $data);
    }
}