<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    use HasFactory;

    public function aromas()
    {
        return $this->belongsToMany(Aroma::class);
    }

    public function winery()
    {
        return $this->belongsTo(Winery::class);
    }


    protected $fillable = [
        'winery',
        'wine',
        'average',
        'reviews',
        'slug',
        'location',
        'image',
    ];
}
