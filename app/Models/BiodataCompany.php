<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataCompany extends Model
{
    use HasFactory;

    protected $table = 'biodata_companies';

    protected $fillable = [
        'name',
        'address',
        'telephone',
        'email',
        'website',
        'logo',
        'description',
        'slug',
    ];

    public function company()
    {
        return $this->hasOne(Company::class, 'biodata_company_id');
    }
}
