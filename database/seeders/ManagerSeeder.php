<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ManagerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('managers')->insert([
    [
        'id' => 1,
        'name' => 'Manager Satu',
        'email' => 'manager1@example.com',
        'password' => Hash::make('password'),
        'created_at' => now(),
        'updated_at' => now(),
    ]
]);

    }
}
