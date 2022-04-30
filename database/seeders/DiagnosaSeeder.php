<?php

namespace Database\Seeders;

use App\Models\Diagnosa;
use Illuminate\Database\Seeder;

class DiagnosaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diagnosa = [
            [
                'dokter_id' => 1,
                'pasien_id' => 1,
                'diagnosa_hasil' => 'kemungkinan memasuki usia 4 minggu kehamilan. dibutuhkan tindakan usg.'
            ],
            [
                'dokter_id' => 1,
                'pasien_id' => 1,
                'diagnosa_hasil' => 'kemungkinan memasuki usia 14 minggu kehamilan. dibutuhkan banyak istirahat.'
            ],
            [
                'dokter_id' => 1,
                'pasien_id' => 3,
                'diagnosa_hasil' => 'setres berlebih. rekomendasi istirahat total.'
            ],
            [
                'dokter_id' => 3,
                'pasien_id' => 2,
                'diagnosa_hasil' => 'menjaga pola makan dan mulai untuk olahraga teratur.'
            ]
        ];
        Diagnosa::insert($diagnosa);
    }
}
