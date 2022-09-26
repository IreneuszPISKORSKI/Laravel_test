<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class BackofficeCategoriesController extends Controller
{
    public function index(){
        $data = Categories::all();
        return view('backoffice.categories.categories-home', ['data' => $data]);
    }

}
