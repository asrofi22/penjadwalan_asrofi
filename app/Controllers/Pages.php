<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Penjadwalan Asrofi'
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
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'Jl. ABC NO. 123',
                    'kota' => 'Jambi'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'ntah',
                    'kota' => 'jambi'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }
}
