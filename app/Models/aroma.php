<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aroma extends Model
{
    use HasFactory;

    public function wines()
    {
        return $this->belongsToMany(wine::class);
    }
}
