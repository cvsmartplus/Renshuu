<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            ManagerSeeder::class,     // Lalu ini
            CourseAdminSeeder::class, // Jalankan ini dulu
            ArticleSeeder::class,     // Baru seeder artikel
            CourseSeeder::class,
        ]);
    }
}
