<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
   public function order()   
    {
        $order = order::all();

        return view('admin.layout.order',compact('order'));
    } 
    public function orderform(){
        return view('admin.layout.orderform');


    }
    public function store(Request $request){
        $request->validate([
        'customer_id'=>'required',
            'product_id'=>'required',
            'order_number'=>'required',
            'order_date'=>'required',

            
        ]);
        Order::create([
            'customer_id'=>$request->customer_id,
            'product_id'=>$request->product_id,
            'order_number'=>$request->order_number,
            'order_date'=>$request->order_date,
            
        ]);
        return redirect()->route('order');
    }
    public function orderview($id){
        $order = Order::find($id);
        return view('admin.layout.orderview',compact('order'));
    }
}