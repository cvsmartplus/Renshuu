<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'joblists';

    protected $fillable = [
        'title',
        'description',
        'company_id',
        'category_id',
        'location',
        'type',
        'salary',
        'posted_at',
        'slug',
    ];

    protected $casts = [
        'salary' => 'decimal:2',
        'posted_at' => 'date',
    ];
     public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function category()
    {
        return $this->belongsTo(JobCategory::class, 'category_id');
    }
}
