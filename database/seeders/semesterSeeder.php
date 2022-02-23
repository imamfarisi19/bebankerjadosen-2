<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class semesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rekomendasi = new \App\Models\Semester;
        $rekomendasi->keterangan = 'Ganjil';
        $rekomendasi->save();

        $rekomendasi = new \App\Models\Semester;
        $rekomendasi->keterangan = 'Genap';
        $rekomendasi->save();
    }
}
