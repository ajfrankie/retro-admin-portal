<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;

class Invoice extends Model
{
    use UsesUuid;

    protected $fillable = [
        'order_id',
        'invoice_number',
        'amount',
        'status',
        'due_date'
    ];

    public $timestamps = false;

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}