<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    /** @use HasFactory<\Database\Factories\MenuFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'description',
        'price',
        'image_path',
    ];

    public const CATEGORIES = [
        'food'        => 'Food',
        'drink'       => 'Drinks',
        'addon_drink' => 'Drink add-ons',
        'addon_food'  => 'Food add-ons',
    ];

    public function getImageUrlAttribute(): ?string
{
    return $this->image_path ? asset('storage/' . $this->image_path) : null;
}
}
