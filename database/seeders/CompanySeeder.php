<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Company;
use App\Models\BiodataCompany;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat data biodata perusahaan dulu
        $biodata1 = BiodataCompany::create([
            'name' => 'TechCorp',
            'address' => 'Jakarta, Indonesia',
            'telephone' => '081234567890',
            'email' => 'contact@techcorp.com',
            'website' => 'https://techcorp.com',
            'logo' => 'techcorp-logo.png',
            'description' => 'Leading software development company.',
            'slug' => 'techcorp',
        ]);

        $biodata2 = BiodataCompany::create([
            'name' => 'CreativeInd',
            'address' => 'Bandung, Indonesia',
            'telephone' => '081298765432',
            'email' => 'info@creativeind.com',
            'website' => 'https://creativeind.com',
            'logo' => 'creativeind-logo.png',
            'description' => 'Creative design and marketing agency.',
            'slug' => 'creativeind',
        ]);

        // Buat data company dengan menghubungkan ke biodata
        Company::create([
            'username' => 'techcorp',
            'password' => Hash::make('password123'),
            'biodata_company_id' => $biodata1->id,
        ]);

        Company::create([
            'username' => 'creativeind',
            'password' => Hash::make('password456'),
            'biodata_company_id' => $biodata2->id, 
        ]);
    }
}
