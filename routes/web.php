<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

//Route::get('product', function () {
//    return 'Liste des produits';
//});
//
//Route::get('/product/{id}', function ($id) {
//    return 'Fiche du produit ' . $id;
//})->where('id', '[0-9]+');
//
//Route::get('cart', function () {
//    return 'Panier';
//});




Route::get('/', [HomeController::class, 'home']);

Route::get('product', [ProductController::class, 'product']);

Route::get('product/{id}', [ProductController::class , 'product']);

Route::get('cart', [CartController::class, 'cart']);




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

//
//Route::get('/', function () {
//    return 'Homepage';
//});


