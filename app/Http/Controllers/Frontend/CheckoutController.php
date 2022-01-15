<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Orderdetails;

class CheckoutController extends Controller
{
    public function checkoutShow()
    {
        $order =  Order::all();
        return view('website.layouts.checkout',compact('order'));
    }

    public function addCheckout(Request $request)
    {
        $cart = session('cart');
        // dd($cart);
       $order =  Order::create([
            'user_id' => auth()->user()->id,
            'product_id'=>$request->input('product_id'),
            'order_number'=>$request->input('order_number'),
            'order_date'=>$request->input('order_date'),
            'grant_total'=>array_sum(array_column($cart,'sub_total'))
        ]);


        foreach ($cart as $item)
        {
            $order_products = Orderdetails::create([
             
                'order_id'=>$order->id,
                'product_id'=>$item['id'],
                'product_name'=>$item['name'],
                'product_quantity'=>$item['quantity'],
                'product_price'=>$item['price'],
                'sub_total'=>$item['price'] * $item['quantity'],
            ]);
            
        }
        return redirect()->route('home');
    }
}
