<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Founder extends Model
{
    /** @use HasFactory<\Database\Factories\FounderFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image_path'
    ];

    public function getImageUrlAttribute(): ?string
    {
        return $this->image_path ? asset('storage/' . $this->image_path) : null;
    }
}
