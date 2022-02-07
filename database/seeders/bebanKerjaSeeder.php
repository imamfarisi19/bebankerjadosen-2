<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class bebanKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bebanKer = new \App\Models\Bebankerja;
        $bebanKer->buktiPenugasan = 'surat tugas 1';
        $bebanKer->sks = 1;
        $bebanKer->save();

        $bebanKer = new \App\Models\Bebankerja;
        $bebanKer->buktiPenugasan = ' surat tugas 2';
        $bebanKer->sks = 2;
        $bebanKer->save();

        $bebanKer = new \App\Models\Bebankerja;
        $bebanKer->buktiPenugasan = 'surat tugas 3';
        $bebanKer->sks = 3;
        $bebanKer->save();

        $bebanKer = new \App\Models\Bebankerja;
        $bebanKer->buktiPenugasan = 'surat tugas 4';
        $bebanKer->sks = 4;
        $bebanKer->save();
    }
}
