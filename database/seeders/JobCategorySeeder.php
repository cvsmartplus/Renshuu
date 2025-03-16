<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobCategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('job_categories')->insert([
            ['name' => 'Software Development', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Design', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Marketing', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
