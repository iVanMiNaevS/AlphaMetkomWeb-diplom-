<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServiceDefaultImage extends Model
{
    protected $fillable = [
        'service_id',
        'image_path',
    ];


    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }


    public function getImageUrlAttribute(): string
    {
        return asset('/storage/' . $this->image_path);
    }
}
