<?php

namespace App\Controllers;

class pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | WebProgrammingUNPAS', 'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'contact us',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'jl. abc no. 123',
                    'kota' => 'ppppp'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'jl. def no. 456',
                    'kota' => 'ppppp'
                ],
            ]
        ];
        return view('pages/contact', $data);
    }
}
