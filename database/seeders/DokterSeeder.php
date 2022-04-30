<?php

namespace Database\Seeders;

use App\Models\Dokter;
use Illuminate\Database\Seeder;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $dokter = [
            [
                'dokter_nama' => 'Dimi Winanda',
                'kategori_id' => 1,
            ],
            [
                'dokter_nama' => 'Adelia Halim',
                'kategori_id' => 1
            ],
            [
                'dokter_nama' => 'Mohammad Wira',
                'kategori_id' => 2
            ],
            [
                'dokter_nama' => 'Ucup Mardhotillah',
                'kategori_id' => 2
            ]
        ];
        Dokter::insert($dokter);
    }
}
