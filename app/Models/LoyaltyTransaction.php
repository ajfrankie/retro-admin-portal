<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;

class LoyaltyTransaction extends Model
{
    use UsesUuid;

    protected $fillable = [
        'customer_id',
        'points',
        'type',
        'description'
    ];

    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}