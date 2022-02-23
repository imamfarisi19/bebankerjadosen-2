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

        $kegiatan = new \App\Models\Kegiatan;
        $kegiatan->jenis = 'D. Membimbing tugas akhir penelitian mahasiswa
                               termasuk membimbing, pembuatan laporan hasil
                               penelitian tugas akhir';
        $kegiatan->save();

        $kegiatan = new \App\Models\Kegiatan;
        $kegiatan->jenis = 'E. Penguji pada ujian akhir';
        $kegiatan->save();

        $kegiatan = new \App\Models\Kegiatan;
        $kegiatan->jenis = 'F. Membina kegiatan mahasiswa di bidang akademik
                               dan kemahasiswaan';
        $kegiatan->save();

        $kegiatan = new \App\Models\Kegiatan;
        $kegiatan->jenis = 'G. Mengembangkan program perkuliahan';
        $kegiatan->save();

        $kegiatan = new \App\Models\Kegiatan;
        $kegiatan->jenis = 'H. Mengembangkan bahan pengajaran';
        $kegiatan->save();

        $kegiatan = new \App\Models\Kegiatan;
        $kegiatan->jenis = 'I. Menyampaikan orasi ilmiah';
        $kegiatan->save();

        $kegiatan = new \App\Models\Kegiatan;
        $kegiatan->jenis = 'J. Membina dosen yang lebih rendah jabatannya';
        $kegiatan->save();

        $kegiatan = new \App\Models\Kegiatan;
        $kegiatan->jenis = 'K. Melaksanakan kegiatan datasharing dan 
                               pencangkokan dosen';
        $kegiatan->save();
        
    }
}
