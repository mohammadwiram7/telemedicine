<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = [
            [
                'kategori_nama' => 'Kandungan',
            ],
            [
                'kategori_nama' => 'Jantung',
            ]
        ];
        Kategori::insert($kategori);
    }
}
