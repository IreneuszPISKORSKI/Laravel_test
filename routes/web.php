<?php

use App\Http\Controllers\BackofficeProductController;
use App\Http\Controllers\BackofficeAllController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BackofficeCategoriesController;
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



Route::get('/test', [TestController::class, 'test']);


Route::get('/', [HomeController::class, 'home']);

Route::get('/product-list', [ProductController::class, 'productsList']);
Route::get('/product-list/productsByPrice', [ProductController::class, 'productsByPrice']);
Route::get('/product-list/productsByName', [ProductController::class, 'productsByName']);
Route::get('/product/{id}', [ProductController::class , 'product'])->where('id', '[0-9]+');

Route::get('/cart', [CartController::class, 'cart']);
Route::post('/cart', [CartController::class, 'store']);






Route::get('/backoffice/products', [BackofficeProductController::class, 'index']);
Route::get('/backoffice/products/create', [BackofficeProductController::class, 'create']);
Route::post('/backoffice/products/create', [BackofficeProductController::class, 'store']);
Route::get('/backoffice/products/{id}/edit', [BackofficeProductController::class, 'edit'])->where('id', '[0-9]+');
Route::put('/backoffice/products/{id}', [BackofficeProductController::class, 'update']);
Route::delete('/backoffice/products/{id}', [BackofficeProductController::class, 'destroy'])->where('id', '[0-9]+');

Route::get('/backoffice/categories', [BackofficeCategoriesController::class, 'index']);

















//Route::get('/backoffice/orders', [BackofficeProductController::class, 'home']);
//Route::get('/backoffice/orders/create', [BackofficeProductController::class, 'productCreatePage']);
//Route::post('/backoffice/orders/create', [BackofficeProductController::class, 'productCreate']);
//Route::get('/backoffice/orders/{id}/edit', [BackofficeProductController::class, 'productEditPage'])->where('id', '[0-9]+');
//Route::put('/backoffice/orders/{id}', [BackofficeProductController::class, 'productEdit']);
//Route::delete('/backoffice/orders/{id}', [BackofficeProductController::class, 'productDelete'])->where('id', '[0-9]+');















Route::get('/backoffice/others/{tomato}', [BackofficeAllController::class, 'home']);
Route::get('/backoffice/others/{tomato}/create', [BackofficeAllController::class, 'allCreatePage']);
Route::post('/backoffice/others/{tomato}/create', [BackofficeAllController::class, 'allCreate']);
Route::get('/backoffice/others/{tomato}/{id}/edit', [BackofficeAllController::class, 'allEditPage'])->where('id', '[0-9]+');
Route::put('/backoffice/others/{tomato}/{id}', [BackofficeAllController::class, 'allEdit']);
Route::delete('/backoffice/others/{tomato}/{id}', [BackofficeAllController::class, 'allDelete'])->where('id', '[0-9]+');
