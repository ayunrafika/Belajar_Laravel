<?php

namespace Database\Seeders;

use App\Models\MataKuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MataKuliah::insert([
            [
                "kode" => "ADPU4332",
                "nama" => "Hukum Administrasi Negara",
            ],
            [
                "kode" => "EKMA4482",
                "nama" => "Akuntansi Keuangan Syariah",
            ],
            [
                "kode" => "MKWU2001",
                "nama" => "Bahasa Indonesia",
            ],            
            [
                "kode" => "MKWU3001",
                "nama" => "Pancasila",
            ],
            [
                "kode" => "EKMA4500",
                "nama" => "TAP Manajemen",
            ],
        ]);
    }
}
