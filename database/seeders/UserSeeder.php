<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\RoleUser;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Pritesh Organizer',
            'email' => 'bholepritesh829@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        RoleUser::create([
            'user_id'       =>  $user->id,
            'role_id'     =>  1
        ]);

        $attendee1 = User::create([
            'name' => 'Ram',
            'email' => 'ram@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        RoleUser::create([
            'user_id'       =>  $attendee1->id,
            'role_id'     =>  2
        ]);

        $attendee2 = User::create([
            'name' => 'Shyam',
            'email' => 'shyam@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        RoleUser::create([
            'user_id'       =>  $attendee2->id,
            'role_id'     =>  2
        ]);
    }
}
