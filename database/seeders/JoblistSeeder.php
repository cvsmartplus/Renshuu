<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;
use App\Models\Company;
use App\Models\JobCategory;
use Illuminate\Support\Facades\DB;

class JoblistSeeder extends Seeder
{
    public function run()
    {
        $companies = Company::take(2)->get();
        $categories = JobCategory::all()->keyBy('name');

        if ($companies->isEmpty() || $categories->isEmpty()) {
            throw new \Exception('Pastikan tabel companies dan job_categories sudah terisi.');
        }

        $jobsByCategory = [
            'Software Development' => ['Software Engineer', 'Frontend Developer', 'Backend Developer'],
            'Design' => ['UI/UX Designer'],
            'Marketing' => ['Digital Marketer'],
        ];

        for ($i = 1; $i <= 50; $i++) {
            $categoryName = array_keys($jobsByCategory)[array_rand(array_keys($jobsByCategory))];
            $jobTitle = $jobsByCategory[$categoryName][array_rand($jobsByCategory[$categoryName])];

            Job::create([ // Gunakan Eloquent agar Sluggable bekerja
                'title' => $jobTitle,
                'description' => 'Deskripsi pekerjaan...',
                'company_id' => $companies[$i % 2]->id,
                'category_id' => $categories[$categoryName]->id,
                'location' => ($i % 2 == 0) ? 'Jakarta' : 'Bandung',
                'type' => ($i % 3 == 0) ? 'Remote' : (($i % 2 == 0) ? 'Full-time' : 'Part-time'),
                'salary' => rand(7000000, 25000000),
                'posted_at' => now()->subDays(rand(1, 60)),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
