<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;

class Inventory extends Model
{
    use UsesUuid;

    protected $table = 'inventory';

    protected $fillable = [
        'product_variant_id',
        'quantity',
        'unit',
        'reorder_level'
    ];

    public $timestamps = false;

    public function variant()
    {
        return $this->belongsTo(ProductVariant::class,'product_variant_id');
    }
}