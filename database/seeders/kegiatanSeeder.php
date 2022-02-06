<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class kegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kegiatan = new \App\Models\Kegiatan;
        $kegiatan->jenis = 'A. kegiatan 1';
        $kegiatan->save();

        $kegiatan = new \App\Models\Kegiatan;
        $kegiatan->jenis = 'B. kegiatan 2';
        $kegiatan->save();

        $kegiatan = new \App\Models\Kegiatan;
        $kegiatan->jenis = 'C. kegiatan 3';
        $kegiatan->save();
    }
}
