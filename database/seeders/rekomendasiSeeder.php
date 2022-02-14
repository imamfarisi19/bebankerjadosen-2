<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class rekomendasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rekomendasi = new \App\Models\Rekomendasi;
        $rekomendasi->keterangan = 'Memenuhi';
        $rekomendasi->save();

        $rekomendasi = new \App\Models\Rekomendasi;
        $rekomendasi->keterangan = 'Belum Memenuhi';
        $rekomendasi->save();

        $rekomendasi = new \App\Models\Rekomendasi;
        $rekomendasi->keterangan = 'Tidak Memenuhi';
        $rekomendasi->save();

    }
}
