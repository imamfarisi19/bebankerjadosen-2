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
        $jabFung->jenis = 'A.jabatan fungsional 1';
        $jabFung->save();

        $jabFung = new \App\Models\Jabatanfungsional;
        $jabFung->jenis = 'B.jabatan fungsional 2';
        $jabFung->save();

        $jabFung = new \App\Models\Jabatanfungsional;
        $jabFung->jenis = 'C.jabatan fungsional 3';
        $jabFung->save();
        

    }
}
