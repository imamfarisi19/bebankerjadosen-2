<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class tahunAjaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rekomendasi = new \App\Models\Tahunajaran;
        $rekomendasi->keterangan = '2021/2022';
        $rekomendasi->save();

        $rekomendasi = new \App\Models\Tahunajaran;
        $rekomendasi->keterangan = '2022/2023';
        $rekomendasi->save();

        $rekomendasi = new \App\Models\Tahunajaran;
        $rekomendasi->keterangan = '2023/2024';
        $rekomendasi->save();
    }
}
