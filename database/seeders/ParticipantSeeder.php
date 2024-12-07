<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $participants=[
            [
                'event_id'=>'1',
                'client_id'=>'3',

            ],
            [
                'event_id'=>'1',
                'client_id'=>'4',

            ],
            [
                'event_id'=>'2',
                'client_id'=>'4',

            ]
        ];
        DB::table('participants')->insert($participants);
    }
}
