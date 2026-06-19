<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;

class Payment extends Model
{
    use UsesUuid;

    protected $fillable = [
        'invoice_id',
        'amount',
        'method',
        'reference'
    ];

    public $timestamps = false;

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}