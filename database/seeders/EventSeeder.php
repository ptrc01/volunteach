<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events =[
            [
                'name'=>'mengajar1',
                'location'=>'Jl sepanjang',
                'date'=>'2024-9-20',
                'time'=>'08:30',
                'description'=>'desc mengajar 1',
                'admin_id'=>'1'
            ],
            [
                'name'=>'mengajar2',
                'location'=>'Jl kenangan',
                'date'=>'2024-9-21',
                'time'=>'10:30',
                'description'=>'desc mengajar 2',
                'admin_id'=>'2'
            ],

        ];
        DB::table('events')->insert($events);
    }
}
