<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product($id):string{
        if ($id===null) {
            return 'Liste des produits';
        }else{
            return 'Fiche du produit ' . $id;
        }
    }
}
