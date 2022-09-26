<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Customers;
use App\Models\Orders;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class BackofficeAllController extends Controller
{
    public function home($array): View
    {
        switch ($array) {
            case 'products':
                $dataArray = Products::all();
                break;
            case 'orders':
                $dataArray = Orders::all();
                break;
            case 'customers':
                $dataArray = Customers::all();
                break;
            case 'categories':
                $dataArray = Categories::all();
                break;
            default:
                dd($array);
                break;
        }
        return view('backoffice.others.others-home', ['dataArray' => $dataArray, 'array' => $array]);

    }

    public function allEditPage($array, $id): View
    {
        switch ($array) {
            case 'products':
                $dataArray = Products::findOrFail($id);
                break;
            case 'orders':
                $dataArray = Orders::findOrFail($id);
                break;
            case 'customers':
                $dataArray = Customers::findOrFail($id);
                break;
            case 'categories':
                $dataArray = Categories::findOrFail($id);
                break;
            default:
                dd($array);
                break;
        }

        return view('backoffice.others.others-edit', ['dataArray' => $dataArray, 'id' => $id]);
    }

    public function allEdit(Request $request): RedirectResponse
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

        return redirect('/backoffice/others/products');
    }

    public function allCreatePage(): string
    {
        return view('backoffice.others.others-create');
    }

    public function allCreate(Request $request): RedirectResponse
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

        return redirect('/backoffice/others/products');
    }

    public function allDelete($tomato, $id)
    {
        Products::destroy($id);

        return view('backoffice.others.others-deleted');
    }
}
