<?php

namespace App\Models;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Event extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'event_date',
        'from',
        'to',
        'location',
    ];

    protected $with = ['media'];

    protected $appends = ['thumbnail', 'gallery'];

    public function getThumbnailAttribute(): ?string
    {
        return $this->getFirstMedia('thumbnail')?->getFullUrl();
    }

    public function getGalleryAttribute(): Arrayable
    {
        return $this->getMedia('gallery')->map->getFullUrl();
    }
}
