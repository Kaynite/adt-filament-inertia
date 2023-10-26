<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class PostCategory extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = ['name', 'color'];

    protected $with = ['media'];

    protected $appends = ['icon'];

    public function getIconAttribute(): ?string
    {
        return $this->getFirstMedia('icon')?->getFullUrl();
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
