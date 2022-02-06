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
        $admin = new \App\Models\Admin;
        $admin->namaDepan = 'Imam';
        $admin->namaBelakang = 'Farisi';
        $admin->email = 'imam@login.admin';
        $admin->jabatan= '-';
        $admin->tanggalLahir = '2022-12-01';
        $admin->created_at = "2022-02-02 00:47:25";
        $admin->updated_at = "2022-02-02 00:47:25";
        $admin->save();
    }
}
