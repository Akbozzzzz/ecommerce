<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => "Admin User",
                'username' => 'admin_user',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('password'),
            ],
            [
                'name' => "Vender",
                'username' => 'vender_user',
                'email' => 'vender@gmail.com',
                'role' => 'vender',
                'status' => 'active',
                'password' => bcrypt('password'),
            ],
            [
                'name' => "Regular User",
                'username' => 'regular_user',
                'email' => 'user@gmail.com',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('password'),
            ],
        ]);
    }
}
