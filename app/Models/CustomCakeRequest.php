<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;

class CustomCakeRequest extends Model
{
    use UsesUuid;

    protected $fillable = [
        'customer_id',
        'theme',
        'cake_message',
        'image_reference',
        'event_date',
        'special_notes',
        'status'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}