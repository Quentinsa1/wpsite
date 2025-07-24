<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
    'title',
    'location',
    'type',
    'description',
    'deadline',
    'skills',
];
 protected $casts = [
        'skills' => 'array',
    ];
}
