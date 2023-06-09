<?php

namespace App\Models;

class Tutor
{
    private static $dataTutor = [
        [
            "id" => 1,
            "nama" => "Sarono",
            "id_tutor" => "1234",
            "bidang_keahlian" => "Ilmu Komputer",
            "personal" => [
                "email" => "sarono@gmail.com",
                "alamat" => "Jogja",
                "gender" => 1,
                "periode_mengajar" => 2022,
            ]
        ],
        [
            "id" => 2,
            "nama" => "Diana",
            "id_tutor" => "1235",
            "bidang_keahlian" => "Perencanaan Wilayah dan Kota",
            "personal" => [
                "email" => "diana@gmail.com",
                "alamat" => "Bantul",
                "gender" => 0,
                "periode_mengajar" => 2023,
            ]
        ],
        [
            "id" => 3,
            "nama" => "Marlina",
            "id_tutor" => "1236",
            "bidang_keahlian" => "Ilmu Biologi",
            "personal" => [
                "email" => "marlina@gmail.com",
                "alamat" => "Wates",
                "gender" => 0,
                "periode_mengajar" => 1999,
            ]
        ],
        [
            "id" => 4,
            "nama" => "Musiran",
            "id_tutor" => "1237",
            "bidang_keahlian" => "Pendidikan Guru",
            "personal" => [
                "email" => "musiran@gmail.com",
                "alamat" => "Bantul",
                "gender" => 1,
                "periode_mengajar" => 1998,
            ]
        ],
        [
            "id" => 5,
            "nama" => "Nana",
            "id_tutor" => "1238",
            "bidang_keahlian" => "Sastra Inggris",
            "personal" => [
                "email" => "nana07@gmail.com",
                "alamat" => "Jakarta",
                "gender" => 0,
                "periode_mengajar" => 2001,
            ]
        ]
        ];

    // Static Method
    // Return all data Tutor
    public static function all()
    {
        // change dataMahasiswa to be a collection
        return collect(self::$dataTutor);
    }

    // Static Method
    // Return data Tutor by id
    public static function find($id)
    {
        $dataTutor = self::all();

        return $dataTutor->firstWhere('id', $id);
    }
}