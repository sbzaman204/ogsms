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
            'total'=>'required',
            'order_date'=>'required',
            'order_status'=>'required',
            'order_number'=>'required',

            
        ]);
        order::create([
            'customer_id'=>$request->customer_id,
            'total'=>$request->total,
            'order_date'=>$request->order_date,
            'order_status'=>$request->order_status,
            'order_number'=>$request->order_number,

        ]);
        return redirect()->back();
    }
}