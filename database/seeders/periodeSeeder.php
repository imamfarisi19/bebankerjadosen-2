<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class periodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tahunAjaran = new \App\Models\Tahunajaran;
        $semester = new \App\Models\Semester;

        $periode = new \App\Models\Periode;
        $periode->dosen_id = 1;
        $periode->tahunAjaran_id = 1;
        $periode->semester_id = 1;
        $periode->save();

        $periode = new \App\Models\Periode;
        $periode->dosen_id = 1;
        $periode->tahunAjaran_id = 1;
        $periode->semester_id = 2;
        $periode->save();

        $periode = new \App\Models\Periode;
        $periode->dosen_id = 1;
        $periode->tahunAjaran_id = 2;
        $periode->semester_id = 1;
        $periode->save();

        $periode = new \App\Models\Periode;
        $periode->dosen_id = 1;
        $periode->tahunAjaran_id = 2;
        $periode->semester_id = 2;
        $periode->save();

        $periode = new \App\Models\Periode;
        $periode->dosen_id = 1;
        $periode->tahunAjaran_id = 3;
        $periode->semester_id = 1;
        $periode->save();

        $periode = new \App\Models\Periode;
        $periode->dosen_id = 1;
        $periode->tahunAjaran_id = 3;
        $periode->semester_id = 2;
        $periode->save();

        $periode = new \App\Models\Periode;
        $periode->dosen_id = 2;
        $periode->tahunAjaran_id = 1;
        $periode->semester_id = 1;
        $periode->save();

        $periode = new \App\Models\Periode;
        $periode->dosen_id = 2;
        $periode->tahunAjaran_id = 1;
        $periode->semester_id = 2;
        $periode->save();

        $periode = new \App\Models\Periode;
        $periode->dosen_id = 2;
        $periode->tahunAjaran_id = 2;
        $periode->semester_id = 1;
        $periode->save();

        $periode = new \App\Models\Periode;
        $periode->dosen_id = 2;
        $periode->tahunAjaran_id = 2;
        $periode->semester_id = 2;
        $periode->save();

        $periode = new \App\Models\Periode;
        $periode->dosen_id = 2;
        $periode->tahunAjaran_id = 3;
        $periode->semester_id = 1;
        $periode->save();

        $periode = new \App\Models\Periode;
        $periode->dosen_id = 2;
        $periode->tahunAjaran_id = 3;
        $periode->semester_id = 2;
        $periode->save();

        $periode = new \App\Models\Periode;
        $periode->dosen_id = 3;
        $periode->tahunAjaran_id = 1;
        $periode->semester_id = 1;
        $periode->save();

        $periode = new \App\Models\Periode;
        $periode->dosen_id = 3;
        $periode->tahunAjaran_id = 1;
        $periode->semester_id = 2;
        $periode->save();

        $periode = new \App\Models\Periode;
        $periode->dosen_id = 3;
        $periode->tahunAjaran_id = 2;
        $periode->semester_id = 1;
        $periode->save();

        $periode = new \App\Models\Periode;
        $periode->dosen_id = 3;
        $periode->tahunAjaran_id = 2;
        $periode->semester_id = 2;
        $periode->save();

        $periode = new \App\Models\Periode;
        $periode->dosen_id = 3;
        $periode->tahunAjaran_id = 3;
        $periode->semester_id = 1;
        $periode->save();

        $periode = new \App\Models\Periode;
        $periode->dosen_id = 3;
        $periode->tahunAjaran_id = 3;
        $periode->semester_id = 2;
        $periode->save();
    }
}
