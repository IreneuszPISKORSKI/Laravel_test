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
        $product = Products::findOrFail($request->id);
        $request->validate([
            'quantity' => ['integer', 'min:1', 'max:' . $product->stock],
        ]);
        $productInCart = $request->except('_token');
//        dd($product, $productInCart);
        return view('cart', ['product' => $product, 'productInCart' => $productInCart]);
    }
}
