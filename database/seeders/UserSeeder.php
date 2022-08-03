<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Dewanda',
                'email' => 'dewanda@gmail.com',
                'password' => Hash::make('dewanda12345'),
                'phone' => '0821221211',
                'roles' => 'PELANGGAN'
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin12345'),
                'phone' => '08965212177',
                'roles' => 'ADMIN'
            ]
        ];

        DB::table('users')->insert($users);
    }
}
