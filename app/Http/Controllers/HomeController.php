<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $username = "Rafika";
        $dataMahasiswa = [
            [
                "nama" => "Yadi",
                "NIM" => "012345678",
                "nilai" => 100
            ],
            [
                "nama" => "Evi",
                "NIM" => "012345679",
                "nilai" => 85
            ],
            [
                "nama" => "Ferry",
                "NIM" => "012345689",
                "nilai" => 80
            ],
            [
                "nama" => "Menanda",
                "NIM" => "012345659",
                "nilai" => 70
            ],
            [
                "nama" => "Rafika",
                "NIM" => "012345579",
                "nilai" => 90
            ]
            ];

            return view('home', [
                'title' => 'Home',
                'user' => $username,
                'usia' => 18,
                'isMember' => true,
                'grade' => 100,
                'dataMahasiswa' => $dataMahasiswa
            ]);
    }
}
