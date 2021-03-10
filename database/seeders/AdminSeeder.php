<?php

namespace Database\Seeders;

use App\Models\Organization;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->state([
            'username' => 'admin',
            'email' => 'contact@medensy.com',
            'email_verified_at' => now(),
            'name' => 'Admin',
            'password' => bcrypt('m3d3nsyy'), // password
            'remember_token' => null,
            'profile_pic' => 'avatars/1.png',
            'is_admin' => true,
            'role' => 'admin'
        ])->create();
    }
}
