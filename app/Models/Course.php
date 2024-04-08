<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public function college()
    {
        return $this->belongsToMany(College::class);
    }
    public function course_duration()
    {
        return $this->belongsTo(CourseDuration::class);
    }
    public function sub_category()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
