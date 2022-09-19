<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart(): string
    {
        return view('cart');
    }

    public function store(Request $request)
    {
        $productsInCart = $request->except('_token');
        $products = Products::all();
//dd($productsInCart);
        return view('cart', ['products' => $products, 'productsInCart' => $productsInCart]);

    }
}
