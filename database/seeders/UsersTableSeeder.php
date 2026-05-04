<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Administrador',
                'email' => 'admin@mail.com',
                'password' => bcrypt('123456'),
                'role' => 'admin'
            ],
            [
                'name' => 'Normal user',
                'email' => 'normal@mail.com',
                'password' => bcrypt('123456'),
                'role' => 'normal'
            ],
            [
                'name' => 'Visitor',
                'email' => 'visitor@mail.com',
                'password' => bcrypt('123456'),
                'role' => 'visitor'
            ],
        ];

        DB::table('users')->insert($users);
    }
}
