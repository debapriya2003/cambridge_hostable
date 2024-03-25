<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'is_published',
        'image',
        'pdf'
    ];

    public function scopePublished($query)
    {
        return $query->where('is_published', '1');
    }

    public function getPhotoUrlAttribute()
    {
        return asset("/storage/images/news/" . $this->image);
    }

    public function getPdfUrlAttribute()
    {

        return  asset("/storage/pdfs/news/" . $this->pdf);
    }
}
