<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    public function customers(){
        return $this->belongsTo(Customers::class, 'customer_id');
    }

    public function order_product(){
        return $this->hasMany(Order_product::class, 'order_id');
    }
}
