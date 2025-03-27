<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\CompanyAdmin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CompanyAdminFactory extends Factory
{
    protected $model = CompanyAdmin::class;

    public function definition(): array
    {
        return [
            'company_id' => Company::factory(),
            'username' => $this->faker->unique()->userName,
            'password' => bcrypt('password123'),
        ];
    }
}
