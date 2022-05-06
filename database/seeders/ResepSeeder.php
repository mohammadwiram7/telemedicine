<?php

namespace Database\Seeders;

use App\Models\Resep;
use Illuminate\Database\Seeder;

class ResepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resep = [
            [
                'dokter_id' => 1,
                'pasien_id' => 1,
                'diagnosa_id' => 1
            ],
            [
                'dokter_id' => 3,
                'pasien_id' => 2,
                'diagnosa_id' => 4
            ],
            [
                'dokter_id' => 3,
                'pasien_id' => 2,
                'diagnosa_id' => 4
            ]
        ];
        Resep::insert($resep);
    }
}
