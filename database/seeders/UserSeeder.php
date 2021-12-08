<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'name' => 'Arsadi',
                'username' => 'arsad',
                'email' => 'arsad@gmail.com',
                'email_verified_at' => null,
                'password' => bcrypt('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ummul Fajri Rahmat',
                'username' => 'ummul',
                'email' => 'ummul@gmail.com',
                'email_verified_at' => null,
                'password' => bcrypt('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ])->each(fn ($user) => DB::table('users')->insert($user));
    }
}
