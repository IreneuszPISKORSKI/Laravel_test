<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_product extends Model
{
    use HasFactory;
    protected $table = "order_product";


    public function orders(){
        return $this->belongsTo(Orders::class);
    }

    public function products(){
        return $this->hasOne(Products::class);
    }
}
