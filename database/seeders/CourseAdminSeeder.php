<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CourseAdminSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('course_admins')->insert([
    [
        'id' => 1,
        'name' => 'Admin Satu',
        'email' => 'admin1@example.com',
        'password' => Hash::make('password'),
        'manager_id' => 1, // Pastikan ada manager dengan ID 1
        'created_at' => now(),
        'updated_at' => now(),
    ]]);
    }
}
