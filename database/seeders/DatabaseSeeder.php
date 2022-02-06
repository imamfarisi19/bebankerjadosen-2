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
        $this->call(bebanKerjaSeeder::class);
        $this->call(masaPenugasanSeeder::class);
        $this->call(kinerjaSeeder::class);
        $this->call(rekomendasiSeeder::class);
        $this->call(dosenSeeder::class);
        $this->call(adminSeeder::class);
    }
}
