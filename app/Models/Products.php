<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function order_product(){
        return $this->belongsToMany(Order_product::class, 'order_product_id');
    }
}
