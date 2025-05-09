<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'slug'
    ];
    public function defaultImages(): HasMany
    {
        return $this->hasMany(ServiceDefaultImage::class);
    }
}
