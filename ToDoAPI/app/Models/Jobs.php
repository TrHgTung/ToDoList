<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_id',
        'user_id',
        'assist_id',
        'content',
        'priority_level',
        'deadline',
        'last_modified',
        'status',
    ];
    public $timestamps = false;
}
