<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'id',
        'title',
        'slug',
        'image',
        'content',
        'category',
        'order',
        'tags',
        'published_date',
        'status'
    ];
}
