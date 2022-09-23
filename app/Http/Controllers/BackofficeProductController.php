<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class BackofficeProductController extends Controller
{
    public function home():string{

        $products = Products::all();                                                                                        // == $products = DB::select('select * from products') ;

        return view('backoffice.products.product-home', ['products' => $products]);
    }

    public function productEditPage($id):string{

        $product = Products::where('id', $id)->get();                                                           // == $product = DB::table('products')->where('id', $id)->get();

        return view('backoffice.products.product-edit', ['product' => $product[0], 'id' => $id]);
    }

    public function productEdit(Request $request): RedirectResponse{

        $product = Products::find($request->input('id'));

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->weight = $request->input('weight');
        $product->image_url = $request->input('image_url');
        $product->stock = $request->input('stock');
        $product->available = $request->input('available');
        $product->category_id = $request->input('category_id');

        $product->update();

        return redirect('/backoffice/products');
    }

    public function productCreatePage():string{
        return view('backoffice.products.product-create');
    }

    public function productCreate(Request $request): RedirectResponse{

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

        return redirect('/backoffice/products');
    }

    public function productDelete($id){
        Products::destroy($id);
        return view('backoffice.products.product-deleted');
    }
}
