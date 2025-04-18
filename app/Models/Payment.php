<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentFactory> */
    use HasFactory;

    protected $fillable = ['order_id', 'payment_date', 'method', 'proof_image', 'status'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
