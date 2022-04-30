<?php

namespace Database\Seeders;

use App\Models\Pasien;
use Illuminate\Database\Seeder;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pasien = [
            [
                'pasien_nama' => 'Yola Iskandar',
                'alamat' => 'jl. jambi 15'
            ],
            [
                'pasien_nama' => 'Utun Musk',
                'alamat' => 'jl. poncowati 17'
            ],
            [
                'pasien_nama' => 'Portia Pola',
                'alamat' => 'jl. pakuningratan 77'
            ]
        ];
        Pasien::insert($pasien);
    }
}
