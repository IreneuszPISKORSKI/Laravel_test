<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('home');
//});
//
//Route::get('cart', function () {
//    return view('cart');
//});
//
//Route::get('login', function () {
//    return view('login');
//});


Route::get('/', function () {
    return 'Homepage';
});

Route::get('product', function () {
    return 'Liste des produits';
});

Route::get('/product/{id}', function ($id) {
    return 'Fiche du produit ' . $id;
})->where('id', '[0-9]+');

Route::get('cart', function () {
    return 'Panier';
});

