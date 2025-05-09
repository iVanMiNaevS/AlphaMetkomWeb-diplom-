<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    protected $fillable = ['contact_type_id', 'title',];

    public function type(): BelongsTo
    {
        return $this->belongsTo(ContactType::class, 'contact_type_id');
    }
}
