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
        $rekomendasi->keterangan = 'rekomendasi1';
        $rekomendasi->save();

        $rekomendasi = new \App\Models\Rekomendasi;
        $rekomendasi->keterangan = 'rekomendasi2';
        $rekomendasi->save();

        $rekomendasi = new \App\Models\Rekomendasi;
        $rekomendasi->keterangan = 'rekomendasi3';
        $rekomendasi->save();

        $rekomendasi = new \App\Models\Rekomendasi;
        $rekomendasi->keterangan = 'rekomendasi4';
        $rekomendasi->save();
    }
}
