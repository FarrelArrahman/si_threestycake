<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryLog extends Model
{
    /** @use HasFactory<\Database\Factories\InventoryLogFactory> */
    use HasFactory;

    protected $fillable = ['product_id', 'quantity', 'type', 'created_at', 'related_order'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function relatedOrder()
    {
        return $this->belongsTo(Order::class, 'related_order');
    }
}
