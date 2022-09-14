<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productsList():string{
        return view('product-list');
    }

    public function product($id):string{
        return view('product-details', ['id' => $id]);
    }

}
