<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\contentcontroller;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SalesController;
use App\Http\Controllers\Backend\CustomerController;
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
  //  return view('admin.content');
//});
Route::get('/admin', [contentcontroller::class,'admin']);
Route::get('/category',[CategoryController::class, 'category'])->name('category');
Route::get('/product',[ProductController::class, 'product'])->name('product');
Route::get('/sales',[SalesController::class, 'sales'])->name('sales');
Route::get('/customer',[CustomerController::class,'customer'])->name('customer');