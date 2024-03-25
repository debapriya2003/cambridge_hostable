<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TopRanker extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'class',
        'name',
        'section',
        'percentage',
        'year',
        'display',
        'image'
    ];

    public function scopeDisplay($query)
    {
        return $query->where('display', '1');
    }

    public function getPhotoUrlAttribute()
    {
        return asset("/storage/images/top_rankers/" . $this->image);
    }
}
