<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\contentcontroller;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\PurchaseController;
use App\Http\Controllers\Backend\OrderdetailsController;
use App\Http\Controllers\Backend\DeliverymanController;
use App\Http\Controllers\Frontend\RegistrationController;






Route::get('/',function(){
  return view('website.layouts.content');
})->name('frontend.user');

Route::get('/user/registration/show',[RegistrationController::class, 'registrationshow'])->name('registration');
Route::post('/user/store',[RegistrationController::class, 'userstore'])->name('user.store');
Route:;get('/user/login/show',[RegistrationController::class,'loginshow'])->name('loginshow');
Route::post('/login/post',[RegistrationController::class,'loginpost'])->name('user.post.login');









Route::get('/admin', [contentcontroller::class,'admin']);
Route::get('/category',[CategoryController::class, 'category'])->name('category');
Route::get('/categoryform',[CategoryController::class, 'categoryf'])->name('category.form');
Route::post('/categories/store',[CategoryController::class,'store'])->name('category.store');

Route::get('/product',[ProductController::class, 'product'])->name('product');
Route::get('/productform',[ProductController::class, 'productform'])->name('product.form');
Route::post('/products/store',[ProductController::class,'store'])->name('product.store');


Route::get('/order',[OrderController::class, 'order'])->name('order');
Route::get('/orderform',[OrderController::class, 'orderform'])->name('order.form');
Route::post('/orders/store',[OrderController::class,'store'])->name('order.store');


Route::get('/user',[UserController::class,'user'])->name('user');


Route::get('/purchase',[PurchaseController::class,'purchase'])->name('purchase');
Route::get('/purchase/add',[PurchaseController::class,'add'])->name('purchase.add');


Route::get('/orderdetails',[OrderdetailsController::class,'orderdetails'])->name('order-details');
Route::get('/orderdetailsform',[OrderdetailsController::class,'orderdetailsform'])->name('orderdetails.form');
Route::post('/orderdetailsform/store',[OrderdetailsController::class,'orderdetailsstore'])->name('orderdetails.store');




Route::get('/deliveryman',[DeliverymanController::class,'deliveryman'])->name('deliveryman');

// Route::post('/purchasestore',[PurchaseController::class,'purchasestore'])->name('purchasestore');
Route::post('/purchases/store',[PurchaseController::class,'store'])->name('purchase.store');
