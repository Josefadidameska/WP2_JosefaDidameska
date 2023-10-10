<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'nama' => 'Josefa Didameska Banjarnahor',
            'email' => 'josefadidameskabanjarnahor@gmail.com',
            'telp' => '085831384037',
            'ttl' => 'Medan, 04 Maret 2004',
            'nim' => '19221053',
            'kelas' => '19.3C.05',
            'umur' => '19 Tahun',
            'alamat' => 'Cluster vernonia residence blok DH 03'
        ];
        return view('welcome_message', $data);
    }
}
