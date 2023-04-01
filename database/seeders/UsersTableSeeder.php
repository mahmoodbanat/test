<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@test.local',
            'password' => bcrypt('121212'),
            'created_at' => '2020-01-01 14:28:15',
            'updated_at' => '2020-01-01 14:28:15'
        ]);
    }
}
