<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'name_user',
        'status',
        'delivery_type',
        'total_price',
        'address',
    ];

    public function products()
    {
        return $this->hasMany(Order_Product::class, 'order_id');
    }
}
