<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    public function backoffice():string{

    $products = Products::all();                                                                                        // == $products = DB::select('select * from products') ;

        return view('backoffice', ['products' => $products]);
    }

    public function productEdit($id):string{

        $product = Products::where('product_id', $id)->get();                                                           // == $product = DB::table('products')->where('product_id', $id)->get();

        return view('product-edit', ['product' => $product[0], 'id' => $id]);
    }

    public function productStore(Request $request):string{

        $product = new Products();
//        dd($product);
        $product->product_id = $request->input('product_id');
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->weight = $request->input('weight');
        $product->image_url = $request->input('image_url');
        $product->stock = $request->input('stock');
        $product->available = $request->input('available');
        $product->category_id = $request->input('category_id');
//dd($product);
        $product->update();

        return redirect('/backoffice');
    }

    public function productCreatePage():string{
        return view('product-create');
    }

    public function productCreate(Request $request):string{

        $product = new Products();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->weight = $request->input('weight');
        $product->image_url = $request->input('image_url');
        $product->stock = $request->input('stock');
        $product->available = $request->input('available');
        $product->category_id = $request->input('category_id');
        $product->save();

        return redirect('/backoffice');
    }

    public function productDelete($id){
        Products::find('product_id', $id)->delete();

        return redirect('/backoffice');
    }
}
