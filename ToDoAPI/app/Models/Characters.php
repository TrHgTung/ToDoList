<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characters extends Model
{
    use HasFactory;
    protected $fillable = [
        'character_id',
        'character_name'
    ];
    public $timestamps = false;
}
