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
        $kegiatan->jenis = 'A. Perkuliahan/tutorial dan menguji serta, 
                               kegiatan pendidikan di laboratorium,
                               praktik keguruan, praktek bengkel/studio/
                               kebun percobaan/teknologi pengajaran';
        $kegiatan->save();

        $kegiatan = new \App\Models\Kegiatan;
        $kegiatan->jenis = 'B. Membimbing seminar mahasiswa';
        $kegiatan->save();

        $kegiatan = new \App\Models\Kegiatan;
        $kegiatan->jenis = 'C. Membimbing KKN, PKN, Praktik Kerja Lapangan';
        $kegiatan->save();

        $jabFung = new \App\Models\Jabatanfungsional;
        $jabFung->jenis = 'D. Membimbing tugas akhir penelitian mahasiswa
                              termasuk membimbing, pembuatan laporan hasil
                              penelitian tugas akhir';
        $jabFung->save();

        $jabFung = new \App\Models\Jabatanfungsional;
        $jabFung->jenis = 'E. Penguji pada ujian akhir';
        $jabFung->save();

        $jabFung = new \App\Models\Jabatanfungsional;
        $jabFung->jenis = 'F. Membina kegiatan mahasiswa di bidang akademik
                              dan kemahasiswaan';
        $jabFung->save();

        $jabFung = new \App\Models\Jabatanfungsional;
        $jabFung->jenis = 'G. Mengembangkan program perkuliahan';
        $jabFung->save();

        $jabFung = new \App\Models\Jabatanfungsional;
        $jabFung->jenis = 'H. Mengembangkan bahan pengajaran';
        $jabFung->save();

        $jabFung = new \App\Models\Jabatanfungsional;
        $jabFung->jenis = 'I. Menyampaikan orasi ilmiah';
        $jabFung->save();

        $jabFung = new \App\Models\Jabatanfungsional;
        $jabFung->jenis = 'J. Membina dosen yang lebih rendah jabatannya';
        $jabFung->save();

        $jabFung = new \App\Models\Jabatanfungsional;
        $jabFung->jenis = 'K. Melaksanakan kegiatan datasharing dan 
                              pencangkokan dosen';
        $jabFung->save();
    }
}
