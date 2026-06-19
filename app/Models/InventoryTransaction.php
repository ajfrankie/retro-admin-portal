<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;

class InventoryTransaction extends Model
{
    use UsesUuid;

    protected $fillable = [
        'product_variant_id',
        'type',
        'quantity',
        'reason',
        'created_by'
    ];

    public $timestamps = false;

    public function variant()
    {
        return $this->belongsTo(ProductVariant::class,'product_variant_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'created_by');
    }
}