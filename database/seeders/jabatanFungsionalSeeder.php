<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class jabatanFungsionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jabFung = new \App\Models\Jabatanfungsional;
        $jabFung->jenis = 'Asisten Ahli';
        $jabFung->save();

        $jabFung = new \App\Models\Jabatanfungsional;
        $jabFung->jenis = 'Lektor';
        $jabFung->save();

        $jabFung = new \App\Models\Jabatanfungsional;
        $jabFung->jenis = 'Lektor Kepala';
        $jabFung->save();

        $jabFung = new \App\Models\Jabatanfungsional;
        $jabFung->jenis = 'Profesor';
        $jabFung->save(); 

    }
}
