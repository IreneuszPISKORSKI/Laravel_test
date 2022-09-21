<?php

use App\Http\Controllers\BackofficeController;
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



Route::get('/test', [TestController::class, 'test']);


Route::get('/', [HomeController::class, 'home']);

Route::get('/product-list', [ProductController::class, 'productsList']);
Route::get('/product-list/productsByPrice', [ProductController::class, 'productsByPrice']);
Route::get('/product-list/productsByName', [ProductController::class, 'productsByName']);
Route::get('/product/{id}', [ProductController::class , 'product'])->where('id', '[0-9]+');

Route::get('/cart', [CartController::class, 'cart']);
Route::post('/cart', [CartController::class, 'store']);

Route::get('/backoffice', [BackofficeController::class, 'backoffice']);
Route::get('/backoffice/create', [BackofficeController::class, 'productCreatePage']);
Route::post('/backoffice', [BackofficeController::class, 'productCreate']);
Route::get('/backoffice/{id}/edit', [BackofficeController::class, 'productEdit'])->where('id', '[0-9]+');
Route::put('/backoffice/{id}', [BackofficeController::class, 'productUpdate']);
Route::delete('/backoffice/{id}', [BackofficeController::class, 'productDelete'])->where('id', '[0-9]+');
Route::get('/backoffice/product-deleted', [BackofficeController::class, 'productDeleted']);

