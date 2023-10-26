<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Testimonial extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = ['name', 'position', 'testimonial'];

    protected $with = ['media'];

    protected $appends = ['image'];

    public function getImageAttribute(): ?string
    {
        return $this->getFirstMedia('image')?->getFullUrl();
    }
}