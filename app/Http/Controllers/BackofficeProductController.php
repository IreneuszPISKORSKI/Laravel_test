<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class BackofficeProductController extends Controller
{
    public function index(): View{

        $products = Products::with('category')->get();                                                                                        // == $products = DB::select('select * from products') ;

        return view('backoffice.products.product-home', ['products' => $products]);
    }

    public function create():string{
        return view('backoffice.products.product-create');
    }

    public function store(Request $request): RedirectResponse{

        $validated = $request->validate([
            'name' => ['string', 'max:45'],
            'description' => ['nullable', 'string', 'max:255'],
            'price' => ['required', 'integer', 'min:1'],
            'weight' => ['nullable', 'integer', 'min:1'],
            'image_url' => ['nullable', 'url'],
            'stock' => ['required', 'integer', 'min:1'],
            'available' => ['required', 'boolean'],
            'category_id' => ['required', 'min:1'],
        ]);

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
    public function edit($id):string{

        $product = Products::findOrFail($id);

        return view('backoffice.products.product-edit', ['product' => $product, 'id' => $id]);
    }

    public function update(Request $request): RedirectResponse{

        $validated = $request->validate([
            'name' => ['string', 'max:45'],
            'description' => ['nullable', 'string', 'max:255'],
            'price' => ['required', 'integer', 'min:1'],
            'weight' => ['nullable', 'integer', 'min:1'],
            'image_url' => ['nullable', 'url'],
            'stock' => ['required', 'integer', 'min:1'],
            'available' => ['required', 'boolean'],
            'category_id' => ['required', 'min:1'],
        ]);

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


    public function destroy($id){
        Products::destroy($id);
        return view('backoffice.products.product-deleted');
    }
}
