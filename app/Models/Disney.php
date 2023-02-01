<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disney extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'banner',
        'description',
        'image',
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];
}
