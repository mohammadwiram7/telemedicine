<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // menjalankan semua file seeder
        $this->call(DiagnosaSeeder::class);
        $this->call(DokterSeeder::class);
        $this->call(KategoriSeeder::class);
        $this->call(PasienSeeder::class);
    }
}
