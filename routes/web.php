<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\contentcontroller;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\PurchaseController;
use App\Http\Controllers\Backend\OrderdetailsController;
use App\Http\Controllers\Backend\StockController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\ShowProductController;
use App\Http\Controllers\Frontend\ShowCategoryController;
use App\Http\Controllers\Frontend\HomeController;







// Route::get('/',function(){
//   return view('website.layouts.content');
// })->name('frontend.user');

Route::get('/',[HomeController::class,'home'])->name('home');

Route::get('/categoryWiseProduct/{id}',[HomeController::class,'categoryWiseProduct'])->name('categorywiseproduct');

// Registration part
Route::get('/user/registration',[LoginController::class,'registrationform'])->name('user.registration');
Route::post('/user/do/registration',[LoginController::class,'doRegistration'])->name('user.do.registration');
// login part
Route::get('/user/login',[LoginController::class,'loginform'])->name('user.login');
Route::post('/user/do/login',[LoginController::class,'doLogin'])->name('user.do.login');
// logout part
Route::get('/user/logout',[LoginController::class,'logout'])->name('user.logout');
//show product part
Route::get('/user/showproduct',[ShowProductController::class,'showproduct'])->name('user.showproduct');
// show category part
Route::get('/user/showcategory',[ShowCategoryController::class,'showcategory'])->name('user.showcategory');






// Category part
Route::get('/admin', [contentcontroller::class,'admin']);
Route::get('/category',[CategoryController::class, 'category'])->name('category');
Route::get('/categoryform',[CategoryController::class, 'categoryf'])->name('category.form');
Route::post('/categories/store',[CategoryController::class,'store'])->name('category.store');
Route::get('/category/edit/{id}',[CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/update',[CategoryController::class, 'update'])->name('category.update');




// Product part
Route::get('/product',[ProductController::class, 'product'])->name('product');
Route::get('/productform',[ProductController::class, 'productform'])->name('product.form');
Route::post('/products/store',[ProductController::class,'store'])->name('product.store');





// Order part
Route::get('/order',[OrderController::class, 'order'])->name('order');
Route::get('/orderform',[OrderController::class, 'orderform'])->name('order.form');
Route::post('/orders/store',[OrderController::class,'store'])->name('order.store');





// User part
Route::get('/user',[UserController::class,'user'])->name('user');





// purchase part
Route::get('/purchase',[PurchaseController::class,'purchase'])->name('purchase');
Route::get('/purchase/add',[PurchaseController::class,'add'])->name('purchase.add');
Route::post('/purchases/store',[PurchaseController::class,'store'])->name('purchase.store');






// Order Details part
Route::get('/orderdetails',[OrderdetailsController::class,'orderdetails'])->name('order-details');
Route::get('/orderdetailsform',[OrderdetailsController::class,'orderdetailsform'])->name('orderdetails.form');
Route::post('/orderdetailsform/store',[OrderdetailsController::class,'orderdetailsstore'])->name('orderdetails.store');




Route::get('/stock',[StockController::class,'stock'])->name('stock');

// Route::post('/purchasestore',[PurchaseController::class,'purchasestore'])->name('purchasestore');
