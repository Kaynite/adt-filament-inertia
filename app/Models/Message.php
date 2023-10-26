<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'message',
        'is_new',
    ];

    public function scopeNew($query)
    {
        return $query->whereIsNew(true);
    }
}
