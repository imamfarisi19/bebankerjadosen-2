<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class namaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $asesor = new \App\Models\Namaasesor;
        $asesor->nama = 'Muhammad Ziki Elfirman';
        $asesor->save();

        $asesor = new \App\Models\Namaasesor;
        $asesor->nama = 'Munsyi';
        $asesor->save();

        $asesor = new \App\Models\Namaasesor;
        $asesor->nama = 'Nahdi Saubari';
        $asesor->save();
    }
}
