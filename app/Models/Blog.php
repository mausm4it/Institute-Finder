<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'summary',
        'content',
        'views',
        'publish',
        'blog_image',
        'blog_category_id'
       
    ];
    use HasFactory;
    public function blog_category()
    {
        return $this->belongsTo(BlogCategory::class);
    }
}