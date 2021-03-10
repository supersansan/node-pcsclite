<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Laravel\Passport\Client;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Client::factory()->state([
            'provider'=>'users',
            'secret'=> 'fJ1iMb9Pj4knACKRKbcFdcGmTxhKFsQO5LT2VNeJ',
            'password_client' => 1
        ])->create();
        
        $this->call(AdminSeeder::class);

    }
}
