<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'username',
        'amount',
        'status',
        // Add these fields to the fillable array
        'orderNumber',
        'email',
        'transactionId',
        'service_type',
        'linkMeta',
    ];

    // Relationship with Product
    public function product()
    {
        return $this->belongsTo(ProductModel::class);
    }
}
