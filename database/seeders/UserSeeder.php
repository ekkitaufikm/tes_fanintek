<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

//library
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insertOrIgnore([
            [
                'id'                => 1,
                'name'              => 'Super Admin',
                'email'             => 'super.admin@coba.com',
                'password'          => Hash::make(12345678),
                'npp'               => '12345',
                'npp_supervisor'    => '-',
                'm_role_id'         => 1
            ]
        ]);
    }
}
