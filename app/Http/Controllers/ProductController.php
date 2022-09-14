<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productsList():string{
        return 'Liste des produits';
    }

    public function product($id):string{
        return 'Fiche du produit ' . $id;
    }

}
