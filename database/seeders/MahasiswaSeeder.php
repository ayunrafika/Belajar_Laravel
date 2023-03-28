<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::create([
            "nama" => "Yadi",
            "NIM" => 12345678,
            "nilai" => 100,
            "alamat" => "Jogja",
            "gender" => 1,
            "usia" => 20,
        ]);

        Mahasiswa::create([
            "nama" => "Evi",
            "NIM" => 12345679,
            "nilai" => 85,
            "alamat" => "Bantul",
            "gender" => 0,
            "usia" => 22,
        ]);

        Mahasiswa::create([
            "nama" => "Ferry",
            "NIM" => 12345689,
            "nilai" => 80,
            "alamat" => "Gamping",
            "gender" => 1,
            "usia" => 20,
        ]);

        Mahasiswa::create([
            "nama" => "Menanda",
            "NIM" => 12345659,
            "nilai" => 70,
            "alamat" => "Sleman",
            "gender" => 1,
            "usia" => 20,
        ]);

        Mahasiswa::create([
            "nama" => "Rafika",
            "NIM" => 12345579,
            "nilai" => 90,
            "alamat" => "Jogja",
            "gender" => 0,
            "usia" => 17,
        ]);
    }
}
