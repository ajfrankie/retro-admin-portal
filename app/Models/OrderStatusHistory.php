<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;

class OrderStatusHistory extends Model
{
    use UsesUuid;

    protected $table = 'order_status_history';

    protected $fillable = [
        'order_id',
        'status',
        'remarks',
        'updated_by'
    ];

    public $timestamps = false;

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'updated_by');
    }
}