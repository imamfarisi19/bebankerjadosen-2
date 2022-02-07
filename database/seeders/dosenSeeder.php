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
        $dosen->namaDepan = 'Rudy';
        $dosen->namaBelakang = 'Ansari';
        $dosen->email = 'rudy@umbjm.ac.id';
        $dosen->jabatan= 'Lektor';
        $dosen->tanggalLahir = '2022-12-01';
        $dosen->NIDN = '1112068401';
        $dosen->NIP = '0112061984187012017';
        $dosen->gelarDepan = '';
        $dosen->gelarBelakang = 'M.Kom';
        $dosen->jabatanFungsional_id = 1;
        $dosen->golongan = 'IVC';
        $dosen->created_at = "2022-02-02 00:47:25";
        $dosen->updated_at = "2022-02-02 00:47:25";
        $dosen->save();
        
        $dosen = new \App\Models\Dosen;
        $dosen->namaDepan = 'Nahdi';
        $dosen->namaBelakang = 'Saubari';
        $dosen->email = 'nahdi@umbjm.ac.id';
        $dosen->jabatan= 'Lektor';
        $dosen->tanggalLahir = '2022-02-01';
        $dosen->NIDN = '1108109102';
        $dosen->NIP = '0108101991207005018';
        $dosen->gelarDepan = '';
        $dosen->gelarBelakang = 'M.Kom';
        $dosen->jabatanFungsional_id = 2;
        $dosen->golongan = 'IVA';
        $dosen->created_at = "2022-02-02 00:47:25";
        $dosen->updated_at = "2022-02-02 00:47:25";
        $dosen->save();

        $dosen = new \App\Models\Dosen;
        $dosen->namaDepan = 'Muhammad Syahid';
        $dosen->namaBelakang = 'Pebriadi';
        $dosen->email = 'syahid@umbjm.ac.id';
        $dosen->jabatan= 'Lektor';
        $dosen->tanggalLahir = '2021-06-01';
        $dosen->NIDN = '1108109102';
        $dosen->NIP = '0117021990213008018';
        $dosen->gelarDepan = '';
        $dosen->gelarBelakang = 'M.Kom';
        $dosen->jabatanFungsional_id = 1;
        $dosen->golongan = 'IVB';
        $dosen->created_at = "2022-02-02 00:47:25";
        $dosen->updated_at = "2022-02-02 00:47:25";
        $dosen->save();

        $dosen = new \App\Models\Dosen;
        $dosen->namaDepan = 'Mukhaimy';
        $dosen->namaBelakang = 'Gazali';
        $dosen->email = 'mukhaimy@umbjm.ac.id';
        $dosen->jabatan= 'Lektor';
        $dosen->tanggalLahir = '2022-12-01';
        $dosen->NIDN = '1112068401';
        $dosen->NIP = '200.010.016';
        $dosen->gelarDepan = '';
        $dosen->gelarBelakang = 'S.Si., M.Si';
        $dosen->jabatanFungsional_id = 1;
        $dosen->golongan = 'IVC';
        $dosen->created_at = "2022-02-02 00:47:25";
        $dosen->updated_at = "2022-02-02 00:47:25";
        $dosen->save();

        $dosen = new \App\Models\Dosen;
        $dosen->namaDepan = 'Windarsyah';
        $dosen->namaBelakang = '';
        $dosen->email = 'windarsyah@umbjm.ac.id';
        $dosen->jabatan= 'Lektor';
        $dosen->tanggalLahir = '2022-12-01';
        $dosen->NIDN = '0004078602';
        $dosen->NIP = '010407198623006019';
        $dosen->gelarDepan = '';
        $dosen->gelarBelakang = 'M.Kom';
        $dosen->jabatanFungsional_id = 1;
        $dosen->golongan = 'IVB';
        $dosen->created_at = "2022-02-02 00:47:25";
        $dosen->updated_at = "2022-02-02 00:47:25";
        $dosen->save();

        $dosen = new \App\Models\Dosen;
        $dosen->namaDepan = 'Muhammad Ziki';
        $dosen->namaBelakang = 'Elfirman';
        $dosen->email = 'ziki@umbjm.ac.id';
        $dosen->jabatan= 'Lektor';
        $dosen->tanggalLahir = '2022-12-01';
        $dosen->NIDN = '0009098504';
        $dosen->NIP = '218004018';
        $dosen->gelarDepan = '';
        $dosen->gelarBelakang = 'M.Kom';
        $dosen->jabatanFungsional_id = 1;
        $dosen->golongan = 'IVB';
        $dosen->created_at = "2022-02-02 00:47:25";
        $dosen->updated_at = "2022-02-02 00:47:25";
        $dosen->save();
        
        $dosen = new \App\Models\Dosen;
        $dosen->namaDepan = 'Munsyi';
        $dosen->namaBelakang = '';
        $dosen->email = 'munsyi@umbjm.ac.id';
        $dosen->jabatan= 'asisten ahli';
        $dosen->tanggalLahir = '2022-12-01';
        $dosen->NIDN = '1121048902';
        $dosen->NIP = '200001018';
        $dosen->gelarDepan = '';
        $dosen->gelarBelakang = 'M.Kom';
        $dosen->jabatanFungsional_id = 1;
        $dosen->golongan = 'IVB';
        $dosen->created_at = "2022-02-02 00:47:25";
        $dosen->updated_at = "2022-02-02 00:47:25";
        $dosen->save();

        $dosen = new \App\Models\Dosen;
        $dosen->namaDepan = 'Kamarudin';
        $dosen->namaBelakang = '';
        $dosen->email = 'kamarudin@umbjm.ac.id';
        $dosen->jabatan= 'asisten ahli';
        $dosen->tanggalLahir = '2022-12-01';
        $dosen->NIDN = '0009098504';
        $dosen->NIP = '218004018';
        $dosen->gelarDepan = '';
        $dosen->gelarBelakang = 'M.Kom';
        $dosen->jabatanFungsional_id = 1;
        $dosen->golongan = 'IVB';
        $dosen->created_at = "2022-02-02 00:47:25";
        $dosen->updated_at = "2022-02-02 00:47:25";
        $dosen->save();
    }
}
