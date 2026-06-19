<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;

class Customer extends Model
{
    use UsesUuid;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'dob',
        'loyalty_points',
        'total_spent'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function loyaltyTransactions()
    {
        return $this->hasMany(LoyaltyTransaction::class);
    }

    public function customCakeRequests()
    {
        return $this->hasMany(CustomCakeRequest::class);
    }
}