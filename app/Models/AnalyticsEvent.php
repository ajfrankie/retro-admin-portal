<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;

class AnalyticsEvent extends Model
{
    use UsesUuid;

    protected $fillable = [
        'event_type',
        'page_url',
        'session_id',
        'metadata'
    ];

    protected $casts = [
        'metadata' => 'array'
    ];

    public $timestamps = false;
}