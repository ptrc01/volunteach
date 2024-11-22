<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users =[
            [
                'name'=>'admin1',
                'email'=>'admin1.aja@admin.co.id',
                'password'=>'admin1aja',
                'role'=>'admin',
            ],
            [
                'name'=>'admin2',
                'email'=>'admin2.saja@admin.co.id',
                'password'=>'admin2Saja',
                'role'=>'admin',

            ],
            [
                'name'=>'user1',
                'email'=>'user1.aja@google.co.id',
                'password'=>'user1aja',
                'role'=>'user'
            ],
            [
                'name'=>'user2',
                'email'=>'user2.saja@google.co.id',
                'password'=>'user2saja',
                'role' => 'user'
            ]

        ];
        DB::table('users')->insert($users);
    }
}
