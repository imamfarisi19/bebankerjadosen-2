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
        $rekomendasi->keterangan = 'Selesai';
        $rekomendasi->save();

        $rekomendasi = new \App\Models\Rekomendasi;
        $rekomendasi->keterangan = 'Sedang Berjalan';
        $rekomendasi->save();

        $rekomendasi = new \App\Models\Rekomendasi;
        $rekomendasi->keterangan = 'Belum Selesai';
        $rekomendasi->save();

    }
}
