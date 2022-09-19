<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
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

Route::get('/product-list', [ProductController::class, 'productsList']);
Route::get('/product-list/productsByPrice', [ProductController::class, 'productsByPrice']);

Route::get('/product/{id}', [ProductController::class , 'product'])->where('id', '[0-9]+');

Route::get('/cart', [CartController::class, 'cart']);
Route::post('/cart', [CartController::class, 'store']);

Route::get('/test', [TestController::class, 'test']);



//Route::get('/', function () {
//    return view('home');
//});
//
//Route::get('cart', function () {
//    return view('cart');
//});
//
//Route::get('product-list', function () {
//    return view('product-list');
//});
//
//
//Route::get('product-details/{id}', function ($id) {
//    return view('product-details', ['id' => $id]);
//});


