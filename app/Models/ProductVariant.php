<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;

class ProductVariant extends Model
{
    use UsesUuid;

    protected $fillable = [
        'product_id',
        'name',
        'sku',
        'price_modifier'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function inventory()
    {
        return $this->hasOne(Inventory::class);
    }

    public function transactions()
    {
        return $this->hasMany(InventoryTransaction::class);
    }
}