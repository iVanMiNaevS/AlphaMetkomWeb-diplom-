<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category_id',
        'image_path',
        'content',
    ];

    public function category()
    {
        return $this->belongsTo(NewsCategory::class);
    }

    public function getImageUrlAttribute()
    {
        return asset('/storage/' . $this->image_path);
    }
}
