<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    protected $model = Job::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->paragraph,
            'company_id' => Company::factory(),
            'salary_min' => $this->faker->numberBetween(3000000, 7000000),
            'salary_max' => $this->faker->numberBetween(8000000, 15000000),
            'location' => $this->faker->city,
            'job_type' => $this->faker->randomElement(['full-time', 'part-time', 'freelance', 'internship']),
            'status' => 'open',
        ];
    }
}
