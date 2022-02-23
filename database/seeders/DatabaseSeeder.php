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

        $this->call(usersSeeder::class);
        $this->call(jabatanFungsionalSeeder::class);
        $this->call(kegiatanSeeder::class);
        $this->call(masaPenugasanSeeder::class);
        $this->call(rekomendasiSeeder::class);
        $this->call(dosenSeeder::class);
        $this->call(adminSeeder::class);
        $this->call(semesterSeeder::class);
        $this->call(tahunAjaranSeeder::class);
        $this->call(PeriodeSeeder::class);
        $this->call(asesorSeeder::class);
        $this->call(namaSeeder::class);
    }
}
