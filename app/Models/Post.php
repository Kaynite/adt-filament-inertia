<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = ['title', 'slug', 'excerpt', 'content', 'post_category_id'];

    protected $with = ['media'];

    protected $appends = ['thumbnail'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(PostCategory::class, 'post_category_id');
    }

    public function getThumbnailAttribute(): ?string
    {
        return $this->getFirstMedia('thumbnail')?->getFullUrl();
    }
}
