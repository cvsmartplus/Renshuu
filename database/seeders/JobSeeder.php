<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Company;
use App\Models\Job;
use App\Models\CompanyAdmin;
use App\Models\User;
use App\Models\UserJob;

class JobSeeder extends Seeder
{
    public function run()
    {
        // Seeder untuk Companies
        $companies = Company::factory()->count(5)->create();

        // Seeder untuk Jobs
        foreach ($companies as $company) {
            Job::factory()->count(10)->create(['company_id' => $company->id]);
        }

        // Seeder untuk Company Admins
        foreach ($companies as $company) {
            CompanyAdmin::create([
                'company_id' => $company->id,
                'username' => Str::random(8),
                'password' => Hash::make('password123'),
            ]);
        }

        // Seeder untuk Users
        User::factory()->count(10)->create();

        // Seeder untuk UserJobs
        $jobs = Job::all();
        $users = User::all();

        foreach ($users as $user) {
            $randomJobs = $jobs->random(rand(1, 3));
            foreach ($randomJobs as $job) {
                UserJob::create([
                    'user_id' => $user->id,
                    'job_id' => $job->id,
                    'status' => 'pending',
                ]);
            }
        }
    }
}
