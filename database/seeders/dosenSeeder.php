<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class dosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dosen = new \App\Models\Dosen;
        $dosen->namaDepan = 'test1';
        $dosen->namaBelakang = 'belakang1';
        $dosen->email = 'dosen1@gmail.com';
        $dosen->jabatan= 'lektor';
        $dosen->tanggalLahir = '2022-12-01';
        $dosen->NIDN = '123';
        $dosen->NIP = '456';
        $dosen->gelarDepan = 'DR';
        $dosen->gelarBelakang = 'M.Kom';
        $dosen->jabatanFungsional_id = 1;
        $dosen->golongan = 'A1';
        $dosen->created_at = "2022-02-02 00:47:25";
        $dosen->updated_at = "2022-02-02 00:47:25";
        $dosen->save();
        
        $dosen = new \App\Models\Dosen;
        $dosen->namaDepan = 'test2';
        $dosen->namaBelakang = 'belakang2';
        $dosen->email = 'dosen2@gmail.com';
        $dosen->jabatan= 'asisten ahli';
        $dosen->tanggalLahir = '2022-02-01';
        $dosen->NIDN = '789';
        $dosen->NIP = '345';
        $dosen->gelarDepan = 'DR';
        $dosen->gelarBelakang = 'M.Kom';
        $dosen->jabatanFungsional_id = 2;
        $dosen->golongan = 'A2';
        $dosen->created_at = "2022-02-02 00:47:25";
        $dosen->updated_at = "2022-02-02 00:47:25";
        $dosen->save();

        $dosen = new \App\Models\Dosen;
        $dosen->namaDepan = 'test3';
        $dosen->namaBelakang = 'belakang3';
        $dosen->email = 'dosen3@gmail.com';
        $dosen->jabatan= 'asisten ahli';
        $dosen->tanggalLahir = '2021-06-01';
        $dosen->NIDN = '789';
        $dosen->NIP = '345';
        $dosen->gelarDepan = 'DR';
        $dosen->gelarBelakang = 'M.Kom';
        $dosen->jabatanFungsional_id = 1;
        $dosen->golongan = 'A3';
        $dosen->created_at = "2022-02-02 00:47:25";
        $dosen->updated_at = "2022-02-02 00:47:25";
        $dosen->save();
    }
}
