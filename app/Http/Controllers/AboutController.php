<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $kontak = [
        [
            "nama" => "UT Jakarta",
            "telp" => "(021)777777",
            "alamat" => "Jalan Jakarta"
        ],
        [
            "nama" => "UT Bandung",
            "telp" => "(022)777778",
            "alamat" => "Jalan Bandung"
        ],
        [
            "nama" => "UT Purwokerto",
            "telp" => "(0231)777779",
            "alamat" => "Jalan Purwokerto"
        ]
        ];

        return view('about', [
            'title' => 'About Us',
            'kontak' => $kontak
        ]);
        
    }
}