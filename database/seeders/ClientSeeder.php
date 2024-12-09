<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients =[
            [
                'name'=>'admin1',
                'email'=>'admin1.aja@admin.co.id',
                'password'=>Hash::make('admin1aja'),
                'role'=>'admin',
            ],
            [
                'name'=>'admin2',
                'email'=>'admin2.saja@admin.co.id',
                'password'=>Hash::make('admin2Saja'),
                'role'=>'admin',

            ],
            [
                'name'=>'user1',
                'email'=>'user1.aja@google.co.id',
                'password'=>Hash::make('user1aja'),
                'role'=>'client'
            ],
            [
                'name'=>'user2',
                'email'=>'user2.saja@google.co.id',
                'password'=>Hash::make('user2saja'),
                'role' => 'client'
            ]

        ];
        DB::table('clients')->insert($clients);
    }
}
