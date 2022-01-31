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
use App\Http\Controllers\Backend\AdminLoginController;

use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\CustomerProfileController;
use App\Http\Controllers\Frontend\ShowProductController;
use App\Http\Controllers\Frontend\ShowCategoryController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Frontend\UserPaymentController;











// Route::get('/',function(){
//   return view('website.layouts.content');
// })->name('frontend.user');




// website part
Route::get('/',[HomeController::class,'home'])->name('home');

// Registration part
Route::get('/user/registration',[LoginController::class,'registrationform'])->name('user.registration');
Route::post('/user/do/registration',[LoginController::class,'doRegistration'])->name('user.do.registration');

// login part
Route::get('/user/login',[LoginController::class,'loginform'])->name('user.login');
Route::post('/user/do/login',[LoginController::class,'doLogin'])->name('user.do.login');

Route::get('/categoryWiseProduct/{id}',[HomeController::class,'categoryWiseProduct'])->name('categorywiseproduct');
Route::get('/product/details{id}',[HomeController::class,'productdetails'])->name('productDetails');

Route::group(['middleware'=>'auth'],function(){
// logout part
Route::get('/user/logout',[LoginController::class,'logout'])->name('user.logout');
//show product part
Route::get('/user/showproduct',[ShowProductController::class,'showproduct'])->name('user.showproduct');
// show category part
Route::get('/user/showcategory',[ShowCategoryController::class,'showcategory'])->name('user.showcategory');

// customer profile part
Route::get('/customerprofile',[CustomerProfileController::class, 'customerprofile'])->name('customer.profile');

// cart
Route::post('/add-to-cart/{id}',[CartController::class,'addToCart'])->name('add-to-cart');
Route::get('/cart',[CartController::class,'cartshow'])->name('cart');
 Route::get('/cart/remove/{id}', [CartController::class,'CartRemove'])->name('cart.remove');
Route::put('/cart/update/{id}', [CartController::class,'CartUpdate'])->name('cart.update');

// checkout
Route::get('/checkout/show',[CheckoutController::class,'checkoutShow'])->name('checkoutShow');
Route::post('/add/shipping/details', [CheckoutController::class,'addCheckout'])->name('add.shipping');
Route::get('/myprofile/order/details/{id}',[CustomerProfileController::class,'orderView'])->name('myprofile.orderDetails.show');




Route::get('/user/payment/{order_id}',[UserPaymentController::class,'userpayment'])->name('user.payment');
Route::post('/user/payment/post/{order_id}',[UserPaymentController::class,'userPaymentPost'])->name('user.payment.post');




});



// Admin part

Route::get('/admin',[AdminLoginController::class, 'login'])->name('admin.login');
Route::post('/admin/dologin',[AdminLoginController::class, 'dologin'])->name('admin.do.login');

Route::group(['middleware'=>['auth','admin']],function(){
// Route::get('/admin',function(){
//     return view('admin.master');

// })->name('dashboard');
Route::get('/admin/logout', [AdminLoginController::class,'logout'])->name('admin.logout');


Route::get('/admin/home', [contentcontroller::class,'admin']);
Route::get('/dashboard', [contentcontroller::class,'dashboard'])->name('dashboard');







// category part
Route::get('/category',[CategoryController::class, 'category'])->name('category');
Route::get('/categoryform',[CategoryController::class, 'categoryf'])->name('category.form');
Route::post('/categories/store',[CategoryController::class,'store'])->name('category.store');
Route::get('/category/edit/{id}',[CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/update',[CategoryController::class, 'update'])->name('category.update');
Route::get('/category/{id}/delete',[CategoryController::class, 'delete'])->name('category.delete');
Route::get('/category/{id}/view',[CategoryController::class, 'categoryDetails'])->name('category.view');






// Product part
Route::get('/product',[ProductController::class, 'product'])->name('product');
Route::get('/productform',[ProductController::class, 'productform'])->name('product.form');
Route::post('/products/store',[ProductController::class,'store'])->name('product.store');
Route::get('/product/edit/{id}',[ProductController::class, 'productedit'])->name('product.edit');
Route::post('/product/update/{id}',[ProductController::class, 'productupdate'])->name('product.update');
Route::get('/product/{id}/delete',[ProductController::class, 'productdelete'])->name('product.delete');








// Order part
Route::get('/order',[OrderController::class, 'order'])->name('order');
Route::get('/orderform',[OrderController::class, 'orderform'])->name('order.form');
Route::post('/orders/store',[OrderController::class,'store'])->name('order.store');
Route::get('/orders/view/{id}',[OrderController::class,'orderview'])->name('order.view');





// User part
Route::get('/user',[UserController::class,'user'])->name('user');
Route::get('/user/view/{id}',[UserController::class,'userview'])->name('user.view');
Route::get('/user/{id}/delete',[UserController::class, 'userdelete'])->name('user.delete');





// purchase part
Route::get('/purchase',[PurchaseController::class,'purchase'])->name('purchase');
Route::get('/purchase/add',[PurchaseController::class,'add'])->name('purchase.add');
Route::post('/purchases/store',[PurchaseController::class,'store'])->name('purchase.store');






// Order Details part
Route::get('/orderdetails',[OrderdetailsController::class,'orderdetails'])->name('order-details');
Route::get('/orderdetailsform',[OrderdetailsController::class,'orderdetailsform'])->name('orderdetails.form');
Route::post('/orderdetailsform/store',[OrderdetailsController::class,'orderdetailsstore'])->name('orderdetails.store');




// payment part
Route::get('/payment',[PaymentController::class,'payment'])->name('payment');
Route::put('/order/update/{id}',[PaymentController::class,'orderUpdate'])->name('order.update');











// Route::get('/stock',[StockController::class,'stock'])->name('stock');

// Route::post('/purchasestore',[PurchaseController::class,'purchasestore'])->name('purchasestore');

});

