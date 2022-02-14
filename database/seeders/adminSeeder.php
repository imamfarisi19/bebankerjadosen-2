<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gambar = 'avatar3.png';
        $ext = pathinfo($gambar, PATHINFO_EXTENSION);
        $namaGambar = time().rand(100,999).".".$ext;
        copy(public_path("\\AdminLTE\\dist\\img\\$gambar"), public_path("img\\$namaGambar"));
        $admin = new \App\Models\Admin;
        $admin->namaDepan = 'Imam';
        $admin->namaBelakang = 'Farisi';
        $admin->email = 'imam@umbjm.ac.id';
        $admin->jabatan= '-';
        $admin->tanggalLahir = '2022-12-01';
        $admin->gambar = $namaGambar;
        $admin->created_at = "2022-02-02 00:47:25";
        $admin->updated_at = "2022-02-02 00:47:25";
        $admin->save();

        $gambar = 'avatar2.png';
        $ext = pathinfo($gambar, PATHINFO_EXTENSION);
        $namaGambar = time().rand(100,999).".".$ext;
        copy(public_path("\\AdminLTE\\dist\\img\\$gambar"), public_path("img\\$namaGambar"));
        $admin = new \App\Models\Admin;
        $admin->namaDepan = 'Fajar Akbar';
        $admin->namaBelakang = 'Maulana';
        $admin->email = 'fajar@umbjm.ac.id';
        $admin->jabatan= '-';
        $admin->tanggalLahir = '2022-12-01';
        $admin->gambar = $namaGambar;
        $admin->created_at = "2022-02-02 00:47:25";
        $admin->updated_at = "2022-02-02 00:47:25";
        $admin->save();
    }
}
