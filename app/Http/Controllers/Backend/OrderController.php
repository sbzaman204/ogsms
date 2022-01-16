<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Orderdetails;

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
        $order = Order::with('orderRelation','productRelation')->get();
        // dd($order);

        return view('admin.layout.order',compact('order'));
    } 
    public function orderform(){
        return view('admin.layout.orderform');


    }
    public function store(Request $request){
        $request->validate([
        'user_id'=>'required',
            'product_id'=>'required',
            'order_number'=>'required',
            'order_date'=>'required',

            
        ]);
        Order::create([
            'user_id'=>$request->user_id,
            'product_id'=>$request->product_id,
            'order_number'=>$request->order_number,
            'order_date'=>$request->order_date,
            
        ]);
        return redirect()->route('order');
    }
    public function orderview($id){
        // dd($id);
        $data = Order::find($id);
        // dd($data);
        $order_data = Orderdetails::where('order_id',$id)->get();
        // dd($order_data);
            return view('admin.layout.orderview',compact('data','order_data'));

        }
    }
