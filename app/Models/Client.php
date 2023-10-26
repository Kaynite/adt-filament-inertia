<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Client extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = ['name'];

    protected $with = ['media'];

    protected $appends = ['logo'];

    public function getLogoAttribute(): ?string
    {
        return $this->getFirstMedia('logo')?->getFullUrl();
    }
}
