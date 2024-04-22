<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class College extends Model
{
    use HasFactory;

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }
 

    public function campuses(): BelongsToMany
    {
        return $this->belongsToMany(Campus::class);
    }

      public function subcategories()
    {
        return $this->belongsToMany(Subcategory::class);
    }

    public function type_of_college()
    {
        return $this->belongsTo(TypeOfCollege::class);
    }

    public function countries(): BelongsToMany
    {
        return $this->belongsToMany(Country::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

  
}
