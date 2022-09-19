<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function productsList():string{

        $products = Products::all();                                                                                    // == $products = DB::select('select * from products') ;

        return view('product-list', ['products' => $products]);
    }

    public function productsByPrice():string{

        $products = Products::orderBy('price')->get();

        return view('product-list', ['products' => $products]);
    }

    public function product($id):string{
        $product = Products::where('product_id', $id)->get();                                                           // == $product = DB::table('products')->where('product_id', $id)->get();

        return view('product-details', ['product' => $product[0], 'id' => $id]);
    }

}
