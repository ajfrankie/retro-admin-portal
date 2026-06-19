<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;

class Offer extends Model
{
    use UsesUuid;

    protected $fillable = [
        'title',
        'description',
        'discount_type',
        'discount_value',
        'promo_code',
        'start_date',
        'end_date',
        'is_active'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}