<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserJob extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'job_id', 'status'];

    // Relasi ke Job
    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
