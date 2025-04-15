<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customization extends Model
{
    /** @use HasFactory<\Database\Factories\CustomizationFactory> */
    use HasFactory;

    protected $fillable = ['order_item_id', 'option_name', 'option_value'];

    public function orderItem()
    {
        return $this->belongsTo(OrderItem::class);
    }
}
