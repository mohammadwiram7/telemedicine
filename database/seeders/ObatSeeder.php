<?php

namespace Database\Seeders;

use App\Models\Obat;
use Illuminate\Database\Seeder;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obat = [
            [
                'obat_nama' => 'Duphaston 10 mg 20 Tablet',
                'obat_deskripsi' => 'DUPHASTON 10 MG 20 TABLET mengandung zat aktif Dydrogesterone yang merupakan hormon sintesis yang mirip dengan hormon progesteron, yakni hormon seks pada wanita yang terbentuk secara alami di tubuh. Obat ini digunakan dalam kasus infertilitas, terancam keguguran, keguguran berulang, nyeri saat haid, peradangan pada rahim/endometriosis, siklus haid tidak teratur dan amenorea. Dalam penggunaan obat ini harus SESUAI DENGAN PETUNJUK DOKTER.'
            ],
            [
                'obat_nama' => 'Premaston 5 mg 10 Tablet',
                'obat_deskripsi' => 'PREMASTON TABLET memiliki kandungan Allylestrenol yang digunakan sebagai obat penguat kandungan bagi ibu hamil. Obat ini digunakan untuk ibu hamil yang mengalami kekurangan hormon plasenta sehingga terancam mengalami keguguran, serta mencegah keguguran pada ibu hamil yang memiliki riwayat keguguran berulang. Allylestrenol bekerja dengan cara berikatan dengan progesteron dan esterogen pada saluran reproduksi manusia, kelenjar payudara, hipotalamus, dan hipofisis. Hal ini menyebabkan pelepasan hormon GnRH dari hipotalamus menjadi lambat dan peningkatan hormon LH lambat. Ketika embrio tertanam di rahim, progesteron akan mempertahankan kehamilan, dan menstimulasi produksi ASI,s erta melemaskan otot polos uterus untuk mendukung pertumbuhan janin. Dalam penggunaan obat ini harus SESUAI DENGAN PETUNJUK DOKTER.'
            ],
            [
                'obat_nama' => 'Utrogestan 100 mg 15 Kapsul',
                'obat_deskripsi' => 'UTROGESTAN merupakan obat yang mengandung progesterone termikronisasi. Obat ini digunakan sebagai obat penguat kandungan, mengatasi masalah menstruasi, pendarahan, dan terapi gejala menopouse. Dalam penggunaan obat ini HARUS SESUAI DENGAN PETUNJUK DOKTER.'
            ],
            [
                'obat_nama' => 'Cardio Aspirin 100 mg 10 Tablet',
                'obat_deskripsi' => 'ASCARDIA TABLET adalah obat tablet yang mengandung Acetylsalicylic Acid 100 mg. Acetylsalicylic acid atau dikenal juga dengan Aspirin merupakan senyawa analgesik non steroid yang digunakan sebagai analgesik, antipiretik, antiinflamasi dan anti-platelet. Pada dosis kecil (80 mg - 100 mg), Acetylsalicylic acid, memiliki manfaat sebagai anti-platelet atau pengencer darah yang dapat digunakan untuk mencegah proses agregasi platelet (keping darah atau trombosit) pada pasien yang mengalami infark miokard atau penyumbatan pada otot jantung dan kondisi pasca stroke. Obat ini bekerja dengan cara menghambat agregasi trombosit sehingga dapat menghambat pembentukan trombus (penggumpalan darah yang terbentuk pada dinding pembuluh darah) yang sering ditemukan pada pembuluh darah arteri. Acetylsalicylic acid akan menghambat aktivitas enzim cyclo-oxygenase I dan II (COX 1 dan COX 2) yang selanjutnya menghambat produksi tromboksan, yaitu zat yang merangsang agregasi trombosit. Dalam penggunaan obat ini HARUS SESUAI DENGAN PETUNJUK DOKTER. '
            ],
            [
                'obat_nama' => 'Simarc 2 mg 10 Tablet',
                'obat_deskripsi' => 'SIMARC 2 MG TABLET merupakan obat dengan kandungan Warfarin 2 mg. Warfarin adalah obat antikoagulan. Obat ini bekerja menghambat koagulasi dengan jalan mencegah reduksi vitamin K secara enzimatik di dalam hati sehingga aktivasi faktor pembekuan darah terganggu atau tidak terjadi. Obat ini digunakan sebagai profilaksi embolisasi pada penyakit jantung rematik dan fibrilasi atrium, setelah pemasangan katup jantung prostetik, profilaksis pengobatan trombosis vena, dan serangan iskemik cerebral yang transien. Dalam penggunaan obat ini HARUS SESUAI DENGAN PETUNJUK DOKTER.'
            ],
            [
                'obat_nama' => 'Lisinopril 10 mg 10 Tablet',
                'obat_deskripsi' => 'LISINOPRIL 10 MG merupakan obat generik yang digunakan untuk menurunkan tekanan darah tinggi. Obat ini dapat membantu mencegah stroke, serangan jantung, masalah ginjal, serta mengobati gagal jantung dan meningkatkan angka keselamatan setelah serangan jantung. Lisinopril merupakan golongan ACE inhibitor yang bekerja dengan cara merelaksasi pembuluh darah sehingga darah dapat mengalir lebih mudah. Dalam menggunakan obat ini HARUS SESUAI DENGAN PETUNJUK DOKTER.'
            ]
        ];
        Obat::insert($obat);
    }
}
