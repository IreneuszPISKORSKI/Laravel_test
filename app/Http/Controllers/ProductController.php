<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\View\View;

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

    public function productsByName():string{

        $products = Products::orderBy('name')->get();

        return view('product-list', ['products' => $products]);
    }


    public function product($id): View
    {
        $product = Products::findOrFail($id);                                                           // == $product = DB::table('products')->where('id', $id)->get();

        return view('product-details', ['product' => $product]);
    }

}
