<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class kinerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $masaPen = new \App\Models\Kinerja;
        $masaPen->buktiDokumen = 'buktidokumen1';
        $masaPen->sks = 1;
        $masaPen->save();

        $masaPen = new \App\Models\Kinerja;
        $masaPen->buktiDokumen = 'buktidokumen2';
        $masaPen->sks = 2;
        $masaPen->save();

        $masaPen = new \App\Models\Kinerja;
        $masaPen->buktiDokumen = 'buktidokumen3';
        $masaPen->sks = 3;
        $masaPen->save();
    }
}
