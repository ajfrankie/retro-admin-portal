<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;

class Product extends Model
{
    use UsesUuid;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'price',
        'image_url',
        'is_active'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }
}