<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;
    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function campuses()
    {
        return $this->belongsToMany(Campus::class);
    }

      public function subcategories()
    {
        return $this->belongsToMany(Subcategory::class);
    }

    public function type_of_collages()
    {
        return $this->belongsToMany(TypeOfCollege::class);
    }
}
