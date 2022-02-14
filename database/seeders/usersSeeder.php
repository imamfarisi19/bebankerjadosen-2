<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\Models\User;
        $user->dosen_id = NULL;
        $user->admin_id = 1;
        $user->name = 'Imam Farisi';
        $user->level = 'Admin';
        $user->email = 'imam@login.admin';
        $user->email_verified_at = NULL;
        $user->password = hash::make('12345678');
        $user->remember_token = Str::random(60);
        $user->save();

        $user = new \App\Models\User;
        $user->dosen_id = NULL;
        $user->admin_id = 2;
        $user->name = 'Fajar Akbar Maulana';
        $user->level = 'Admin';
        $user->email = 'fajar@login.admin';
        $user->email_verified_at = NULL;
        $user->password = hash::make('12345678');
        $user->remember_token = Str::random(60);
        $user->save();

        $user = new \App\Models\User;
        $user->dosen_id = 1;
        $user->admin_id = NULL;
        $user->name = 'Rudy Ansari';
        $user->level = 'User';
        $user->email = 'rudy@umbjm.ac.id';
        $user->email_verified_at = NULL;
        $user->password = hash::make('12345678');
        $user->remember_token = Str::random(60);
        $user->save();

        $user = new \App\Models\User;
        $user->dosen_id = 2;
        $user->admin_id = NULL;
        $user->name = 'Nahdi Saubari';
        $user->level = 'User';
        $user->email = 'nahdi@umbjm.ac.id';
        $user->email_verified_at = NULL;
        $user->password = hash::make('12345678');
        $user->remember_token = Str::random(60);
        $user->save();

        $user = new \App\Models\User;
        $user->dosen_id = 3;
        $user->admin_id = NULL;
        $user->name = 'Muhammad Syahid Pebriadi';
        $user->level = 'User';
        $user->email = 'syahid@umbjm.ac.id';
        $user->email_verified_at = NULL;
        $user->password = hash::make('12345678');
        $user->remember_token = Str::random(60);
        $user->save();

        $user = new \App\Models\User;
        $user->dosen_id = 4;
        $user->admin_id = NULL;
        $user->name = 'Mukhaimy Gazali';
        $user->level = 'User';
        $user->email = 'mukhaimy@umbjm.ac.id';
        $user->email_verified_at = NULL;
        $user->password = hash::make('12345678');
        $user->remember_token = Str::random(60);
        $user->save();

        $user = new \App\Models\User;
        $user->dosen_id = 5;
        $user->admin_id = NULL;
        $user->name = 'Windarsyah';
        $user->level = 'User';
        $user->email = 'windarsyah@umbjm.ac.id';
        $user->email_verified_at = NULL;
        $user->password = hash::make('12345678');
        $user->remember_token = Str::random(60);
        $user->save();

        $user = new \App\Models\User;
        $user->dosen_id = 6;
        $user->admin_id = NULL;
        $user->name = 'Muhammad Ziki Elfirman';
        $user->level = 'User';
        $user->email = 'Ziki@umbjm.ac.id';
        $user->email_verified_at = NULL;
        $user->password = hash::make('12345678');
        $user->remember_token = Str::random(60);
        $user->save();

        $user = new \App\Models\User;
        $user->dosen_id = 7;
        $user->admin_id = NULL;
        $user->name = 'Munsyi';
        $user->level = 'User';
        $user->email = 'munsyi@umbjm.ac.id';
        $user->email_verified_at = NULL;
        $user->password = hash::make('12345678');
        $user->remember_token = Str::random(60);
        $user->save();

        $user = new \App\Models\User;
        $user->dosen_id = 8;
        $user->admin_id = NULL;
        $user->name = 'Kamarudin';
        $user->level = 'User';
        $user->email = 'kamarudin@umbjm.ac.id';
        $user->email_verified_at = NULL;
        $user->password = hash::make('12345678');
        $user->remember_token = Str::random(60);
        $user->save();
    }
}
