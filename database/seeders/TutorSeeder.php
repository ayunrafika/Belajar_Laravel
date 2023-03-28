<?php

namespace Database\Seeders;

use App\Models\Tutor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tutor::create([
            "nama" => "Sarono",
            "ID Tutor" => 1234,
            "email" => "sarono@gmail.com",
            "periode mengajar" => 2022,
            "alamat" => "Jogja",
            "gender" => 1,
            "usia" => 50,
            "bidang keahlian" => "Ilmu Komputer",
        ]);

        Tutor::create([
            "nama" => "Diana",
            "ID Tutor" => 1235,
            "email" => "diana@gmail.com",
            "periode mengajar" => 2023,
            "alamat" => "Bantul",
            "gender" => 0,
            "usia" => 50,
            "bidang keahlian" => "Perencanaan Wilayah dan Kota",
        ]);
        
        Tutor::create([
            "nama" => "Marlina",
            "ID Tutor" => 1236,
            "email" => "marlina@gmail.com",
            "periode mengajar" => 1999,
            "alamat" => "Wates",
            "gender" => 0,
            "usia" => 45,
            "bidang keahlian" => "Ilmu Biologi",
        ]);

        Tutor::create([
            "nama" => "Musiran",
            "ID Tutor" => 1237,
            "email" => "musiran@gmail.com",
            "periode mengajar" => 1998,
            "alamat" => "Bantul",
            "gender" => 1,
            "usia" => 60,
            "bidang keahlian" => "Pendidikan Guru",
        ]);

        Tutor::create([
            "nama" => "Nana",
            "ID Tutor" => 1238,
            "email" => "nana07@gmail.com",
            "periode mengajar" => 2001,
            "alamat" => "Jakarta",
            "gender" => 0,
            "usia" => 35,
            "bidang keahlian" => "Sastra Inggris",
        ]);

    }
}
