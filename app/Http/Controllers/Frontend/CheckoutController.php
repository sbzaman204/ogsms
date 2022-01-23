<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Payment;
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
    
       $order =  Order::create([
            'user_id' => auth()->user()->id,
            'email'=>$request->input('email'),
            'name'=>$request->input('name'),
            'address'=>$request->input('address'),
            'city'=>$request->input('city'),
            'phone_number'=>$request->input('phone_number'),
            'grant_total'=>array_sum(array_column($cart,'sub_total')),
        ]);


        foreach ($cart as $item)
        {
            $order_products = Orderdetails::create([
             
                'order_id'=>$order->id,
                'product_id'=>$item['id'],
                'product_name'=>$item['name'],
                'product_quantity'=>$item['quantity'],
                'unit_price'=>$item['price'],
                'sub_total'=>$item['price'] * $item['quantity'],
            ]);
            
        }
        // dd($order_products);
        $orderP = (array)$order_products;
        Payment::create([
             'order_id'=>$order->id,
             'transection_id'=>$request->input('transection_id'),
             'payment_method'=>$request->input('payment_method'),
             'grant_total'=>array_sum(array_column($cart,'sub_total'))

        ]);

    
        session()->forget('cart');

        return redirect()->route('home');
    }
}
