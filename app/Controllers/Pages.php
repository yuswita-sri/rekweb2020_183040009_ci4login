<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | WebProgrammingUNPAS'
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
            'alamat' =>
            [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'Jl.Bayah-Cikotok',
                    'kota' => 'Bayah'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'Jl.Bayah-Cinangga',
                    'kota' => 'Cikotok'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }

    //--------------------------------------------------------------------

}
