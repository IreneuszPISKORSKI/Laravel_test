<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    public function categories(){
        return $this->belongsTo(Categories::class);
    }

    public function order_product(){
        return $this->belongsToMany(Order_product::class);
    }
}
