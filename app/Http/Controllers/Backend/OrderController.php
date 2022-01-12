<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
   public function order(Request $request)   
    {

        $search=$request->query('search');
        if($search){
            $order=Order::where('product_id','Like','%'.$search.'%')->get();
            return view('admin.layout.order',compact('order'));
        }
        // dd("ok");
        $order = Order::all();

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
        // dd($id);
        $data = Order::find($id);
        
            return view('admin.layout.orderview',compact('data'));

        }
    }
