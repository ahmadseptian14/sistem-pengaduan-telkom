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
                'name' => 'Rama',
                'email' => 'rama@gmail.com',
                'password' => Hash::make('rama12345'),
                'phone' => '0821221211',
                'roles' => 'PELANGGAN'
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin12345'),
                'phone' => '08965212177',
                'roles' => 'ADMIN'
            ],
            [
                'name' => 'Teknisi',
                'email' => 'teknisi@gmail.com',
                'password' => Hash::make('teknisi12345'),
                'phone' => '08965212121',
                'roles' => 'TEKNISI'
            ],
        ];

        DB::table('users')->insert($users);
    }
}
