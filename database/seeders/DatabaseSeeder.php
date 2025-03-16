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
public function run()
{
    $this->call([
        ManagerSeeder::class,
        ArticleSeeder::class,
        CourseSeeder::class,
        CompanySeeder::class, 
        JobCategorySeeder::class, 
        JoblistSeeder::class, 
    ]);
}

}
