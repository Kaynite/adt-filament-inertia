<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class TeamMember extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'position',
        'team_group_id',
    ];

    protected $with = ['media'];

    protected $appends = ['image'];

    public function teamGroup(): BelongsTo
    {
        return $this->belongsTo(TeamGroup::class);
    }

    public function getImageAttribute(): ?string
    {
        return $this->getFirstMedia('image')?->getFullUrl();
    }
}
