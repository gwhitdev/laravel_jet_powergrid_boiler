<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
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
        /*User::factory()
        ->count(2)
        ->create();*/

        User::create([
            'name' => 'Gareth Whitley',
            'email' => 'me@garethwhitley.online',
            'password' => Hash::make('password')
        ]);
    }
}
