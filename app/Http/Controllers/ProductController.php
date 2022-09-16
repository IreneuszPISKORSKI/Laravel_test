<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function productsList():string{
        $products = DB::select('select * from products') ;
        return view('product-list', ['products' => $products]);
    }

    public function product($id):string{
        $products = DB::table('products')->where('product_id', $id)->get();
        dd($products);
        return view('product-details', ['id' => $id]);
    }
}
