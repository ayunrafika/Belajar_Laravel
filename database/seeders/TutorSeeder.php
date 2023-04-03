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
            "id_tutor" => 1234,
            "email" => "sarono@gmail.com",
            "periode_mengajar" => 2022,
            "alamat" => "Jogja",
            "gender" => 1,
            "usia" => 50,
            "bidang_keahlian" => "Ilmu Komputer",
            "mata_kuliah_id" => 1,
        ]);

        Tutor::create([
            "nama" => "Diana",
            "id_tutor" => 1235,
            "email" => "diana@gmail.com",
            "periode_mengajar" => 2023,
            "alamat" => "Bantul",
            "gender" => 0,
            "usia" => 50,
            "bidang_keahlian" => "Perencanaan Wilayah dan Kota",
            "mata_kuliah_id" => 2,
        ]);
        
        Tutor::create([
            "nama" => "Marlina",
            "id_tutor" => 1236,
            "email" => "marlina@gmail.com",
            "periode_mengajar" => 1999,
            "alamat" => "Wates",
            "gender" => 0,
            "usia" => 45,
            "bidang_keahlian" => "Ilmu Biologi",
            "mata_kuliah_id" => 3,
        ]);

        Tutor::create([
            "nama" => "Musiran",
            "id_tutor" => 1237,
            "email" => "musiran@gmail.com",
            "periode_mengajar" => 1998,
            "alamat" => "Bantul",
            "gender" => 1,
            "usia" => 60,
            "bidang_keahlian" => "Pendidikan Guru",
            "mata_kuliah_id" => 4,
        ]);

        Tutor::create([
            "nama" => "Nana",
            "id_tutor" => 1238,
            "email" => "nana07@gmail.com",
            "periode_mengajar" => 2001,
            "alamat" => "Jakarta",
            "gender" => 0,
            "usia" => 35,
            "bidang_keahlian" => "Sastra Inggris",
            "mata_kuliah_id" => 5,
        ]);

    }
}
