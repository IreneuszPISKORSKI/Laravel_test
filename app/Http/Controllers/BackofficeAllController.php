<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Customers;
use App\Models\Order_product;
use App\Models\Orders;
use App\Models\Products;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class BackofficeAllController extends Controller
{
    public function home($tomato): string
    {
        switch ($tomato) {
            case 'products':
                $dataArray = Products::all();
                break;
            case 'orders':
                $dataArray = Orders::all();
//                dd($dataArray);
                break;
            case 'order_product':
                $dataArray = Order_product::all()->groupBy('order_id');
//                dd($products);
                break;
            case 'customers':
                $dataArray = Customers::all();
                break;
            case 'categories':
                $dataArray = Categories::all();
                break;
            default:
                dd($tomato);
                break;
        }
        return view('backoffice.others.others-home', ['dataArray' => $dataArray, 'tomato' => $tomato]);

    }

    public function productEdit($tomato, $id): string
    {

        $product = $tomato::where('id', $id)->get();                                                           // == $product = DB::table('products')->where('id', $id)->get();

        return view('backoffice.products.product-edit', ['product' => $product[0], 'id' => $id]);
    }

    public function productUpdate(Request $request): RedirectResponse
    {

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

        return redirect('/backoffice');
    }

    public function productCreatePage(): string
    {
        return view('backoffice.products.product-create');
    }

    public function productCreate(Request $request): RedirectResponse
    {

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

    public function productDelete($id)
    {
        Products::destroy($id);
        return view('backoffice.products.product-deleted');
    }
}
