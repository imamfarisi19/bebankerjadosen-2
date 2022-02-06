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
        $user->dosen_id = 1;
        $user->admin_id = NULL;
        $user->name = 'Dosen 1';
        $user->level = 'User';
        $user->email = 'user1@gmail.com';
        $user->email_verified_at = NULL;
        $user->password = hash::make('12345678');
        $user->remember_token = Str::random(60);
        $user->save();

        $user = new \App\Models\User;
        $user->dosen_id = 2;
        $user->admin_id = NULL;
        $user->name = 'Dosen 2';
        $user->level = 'User';
        $user->email = 'user2@gmail.com';
        $user->email_verified_at = NULL;
        $user->password = hash::make('12345678');
        $user->remember_token = Str::random(60);
        $user->save();

        $user = new \App\Models\User;
        $user->dosen_id = 3;
        $user->admin_id = NULL;
        $user->name = 'Dosen 3';
        $user->level = 'User';
        $user->email = 'user3@gmail.com';
        $user->email_verified_at = NULL;
        $user->password = hash::make('12345678');
        $user->remember_token = Str::random(60);
        $user->save();

        $user = new \App\Models\User;
        $user->dosen_id = 4;
        $user->admin_id = NULL;
        $user->name = 'Dosen 4';
        $user->level = 'User';
        $user->email = 'user4@gmail.com';
        $user->email_verified_at = NULL;
        $user->password = hash::make('12345678');
        $user->remember_token = Str::random(60);
        $user->save();

        $user = new \App\Models\User;
        $user->dosen_id = 5;
        $user->admin_id = NULL;
        $user->name = 'Dosen 5';
        $user->level = 'User';
        $user->email = 'user5@gmail.com';
        $user->email_verified_at = NULL;
        $user->password = hash::make('12345678');
        $user->remember_token = Str::random(60);
        $user->save();

        $user = new \App\Models\User;
        $user->dosen_id = 6;
        $user->admin_id = NULL;
        $user->name = 'Dosen 6';
        $user->level = 'User';
        $user->email = 'user6@gmail.com';
        $user->email_verified_at = NULL;
        $user->password = hash::make('12345678');
        $user->remember_token = Str::random(60);
        $user->save();
    }
}
