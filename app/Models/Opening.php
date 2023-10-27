<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Opening extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'excerpt',
        'content',
        'is_published',
        'opening_category_id',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(OpeningCategory::class, 'opening_category_id');
    }
}
