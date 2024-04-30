<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    use HasFactory;
    public function colleges():BelongsToMany
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

    public function course_fees()
    {
        return $this->hasMany(CourseFee::class);
    }

    public function applies()
    {
        return $this->hasMany(Apply::class);
    }
}