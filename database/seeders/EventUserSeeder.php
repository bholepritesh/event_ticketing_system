<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EventUser;


class EventUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EventUser::create([
            'event_id' =>  2,
            'user_id'  =>  2
        ]);

        EventUser::create([
            'event_id' =>  2,
            'user_id'  =>  3
        ]);

        EventUser::create([
            'event_id' =>  1,
            'user_id'  =>  4
        ]);

        EventUser::create([
            'event_id' =>  1,
            'user_id'  =>  3
        ]);
    }
}
