<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function course()
    {
        return $this->hasMany(Course::class);
    }
    
    public function colleges()
    {
        return $this->belongsToMany(College::class);
    }
}
