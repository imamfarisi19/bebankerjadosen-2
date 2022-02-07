<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class masaPenugasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $masaPen = new \App\Models\Masapenugasan;
        $masaPen->keterangan= '1 hari';
        $masaPen->save();

        $masaPen = new \App\Models\Masapenugasan;
        $masaPen->keterangan= '1 pekan';
        $masaPen->save();

        $masaPen = new \App\Models\Masapenugasan;
        $masaPen->keterangan= '1 bulan';
        $masaPen->save();

        $masaPen = new \App\Models\Masapenugasan;
        $masaPen->keterangan= '2 bulan';
        $masaPen->save();

        $masaPen = new \App\Models\Masapenugasan;
        $masaPen->keterangan= '3 bulan';
        $masaPen->save();

        $masaPen = new \App\Models\Masapenugasan;
        $masaPen->keterangan= '4 bulan';
        $masaPen->save();

        $masaPen = new \App\Models\Masapenugasan;
        $masaPen->keterangan= '5 bulan';
        $masaPen->save();

        $masaPen = new \App\Models\Masapenugasan;
        $masaPen->keterangan= '6 bulan';
        $masaPen->save();

        $masaPen = new \App\Models\Masapenugasan;
        $masaPen->keterangan= '1 tahun';
        $masaPen->save();
    }
}
