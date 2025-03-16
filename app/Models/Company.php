<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Company extends Authenticatable
{
    use HasFactory;

    protected $table = 'companies';

    protected $fillable = [
        'username',
        'password',
        'biodata_company_id',
    ];

    protected $hidden = [
        'password',
    ];


    public function biodata()
    {
        return $this->belongsTo(BiodataCompany::class, 'biodata_company_id');
    }

    public function jobs()
    {
        return $this->hasMany(Job::class, 'company_id');
    }
}
