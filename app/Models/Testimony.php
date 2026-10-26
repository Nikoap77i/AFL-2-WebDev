<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    /** @use HasFactory<\Database\Factories\TestimonyFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'comment',
        'rating',
        'image_path',
        'is_featured'
    ];

public function getImageUrlAttribute(): ?string
{
    return $this->image_path ? asset('storage/' . $this->image_path) : null;
}
}
