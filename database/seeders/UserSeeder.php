<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Roles seeder
        DB::table('users')->insert([
            'name' => 'Pablo',
            'email' => 'pablo@example.com',
            'password' => Hash::make('pablo'),
        ]);
        DB::table('users')->insert([
            'name' => 'Pedro',
            'email' => 'pedro@example.com',
            'password' => Hash::make('pedro'),
        ]);
        DB::table('roles')->insert([
            'name' => 'Admin',
        ]);
        DB::table('roles')->insert([
            'name' => 'Guest',
        ]);

        //User-roles seeder
        DB::table('role_user')->insert([
            'user_id' => 1,
            'role_id' => 1
        ]);
        DB::table('role_user')->insert([
            'user_id' => 2,
            'role_id' => 2
        ]);
    }
}
