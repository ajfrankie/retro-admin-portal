<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;

class Post extends Model
{
    use UsesUuid;

    protected $fillable = [
        'author_id',
        'title',
        'slug',
        'content',
        'featured_image',
        'status',
        'published_at'
    ];

    public function author()
    {
        return $this->belongsTo(
            User::class,
            'author_id'
        );
    }
}