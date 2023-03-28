<?php

namespace App\Models;

class Mahasiswa
{
    private static $dataMahasiswa = [
            [
                "id" => 1,
                "nama" => "Yadi",
                "NIM" => "012345678",
                "nilai" => 100,
                "personal" => [
                    "alamat" => "Jogja",
                    "gender" => 1,
                    "usia" => 20,
                ]
            ],
            [
                "id" => 2,
                "nama" => "Evi",
                "NIM" => "012345679",
                "nilai" => 85,
                "personal" => [
                    "alamat" => "Bantul",
                    "gender" => 0,
                    "usia" => 22,
                ]
            ],
            [
                "id" => 3,
                "nama" => "Ferry",
                "NIM" => "012345689",
                "nilai" => 80,
                "personal" => [
                    "alamat" => "Gamping",
                    "gender" => 1,
                    "usia" => 20,
                ]
            ],
            [
                "id" => 4,
                "nama" => "Menanda",
                "NIM" => "012345659",
                "nilai" => 70,
                "personal" => [
                    "alamat" => "Sleman",
                    "gender" => 1,
                    "usia" => 20,
                ]
            ],
            [
                "id" => 5,
                "nama" => "Rafika",
                "NIM" => "012345579",
                "nilai" => 90,
                "personal" => [
                    "alamat" => "Jogja",
                    "gender" => 1,
                    "usia" => 17,
                ]
            ]
            ];

        // Static Method
        // Return all data Mahasiswa
        public static function all()
        {
            // change dataMahasiswa to be a collection
            return collect(self::$dataMahasiswa);
        }

        // Static Method
        // Return data mahasiswa by id
        public static function find($id)
        {
            $dataMahasiswa = self::all();

            return $dataMahasiswa->firstWhere('id', $id);
        }

        // Buat Data Tutor
        /*
        ID
        Nama
        Gender
        Email
        Bidang Keahlian
        Periode Mengajar (2022-2023)
        */

}
