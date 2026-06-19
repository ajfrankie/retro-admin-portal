<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;

class Order extends Model
{
    use UsesUuid;

    protected $fillable = [
        'customer_id',
        'offer_id',
        'order_number',
        'status',
        'subtotal',
        'tax',
        'discount',
        'total',
        'order_date'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }

    public function statusHistory()
    {
        return $this->hasMany(OrderStatusHistory::class);
    }
}