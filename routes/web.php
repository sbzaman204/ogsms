<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\contentcontroller;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SalesController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\PurchaseController;
use App\Http\Controllers\Backend\StockController;
use App\Http\Controllers\Backend\DeliverymanController;
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

//Route::get('/', function () 
  //  return view('admin.content');
//});
Route::get('/admin', [contentcontroller::class,'admin']);
Route::get('/category',[CategoryController::class, 'category'])->name('category');
Route::get('/categoryform',[CategoryController::class, 'categoryf'])->name('category.form');
Route::post('/categories/store',[CategoryController::class,'store'])->name('category.store');

Route::get('/product',[ProductController::class, 'product'])->name('product');
Route::get('/productform',[ProductController::class, 'productform'])->name('product.form');
Route::get('/products/store',[ProductController::class,'store'])->name('product.store');
Route::get('/sales',[SalesController::class, 'sales'])->name('sales');
Route::get('/customer',[CustomerController::class,'customer'])->name('customer');
Route::get('/purchase',[PurchaseController::class,'purchase'])->name('purchase');
Route::get('/purchase/add',[PurchaseController::class,'add'])->name('purchase.add');

Route::get('/stock',[StockController::class,'stock'])->name('stock');
Route::get('/deliveryman',[DeliverymanController::class,'deliveryman'])->name('deliveryman');

// Route::post('/purchasestore',[PurchaseController::class,'purchasestore'])->name('purchasestore');
Route::post('/purchases/store',[PurchaseController::class,'store'])->name('purchase.store');
