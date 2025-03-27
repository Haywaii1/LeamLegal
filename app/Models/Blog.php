<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'category', 'image', 'content', 'published_at'];

    // Ensure `published_at` is treated as a date
    protected $casts = [
        'published_at' => 'date',
    ];
}
