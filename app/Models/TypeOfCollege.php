<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOfCollege extends Model
{
    use HasFactory;
    public function college()
    {
        return $this->belongsTo(College::class);
    }
}
