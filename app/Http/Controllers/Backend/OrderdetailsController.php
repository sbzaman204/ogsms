<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Orderdetails;

use Illuminate\Http\Request;

class OrderdetailsController extends Controller
{
    public function orderdetails()
    {
        $data= Orderdetails::all();
        return view('admin.layout.orderdetails',compact('data'));
    }
    public function orderdetailsform()
    {
        return view('admin.layout.orderdetailsform');
    }
    public function orderdetailsstore(Request $request)
    {
        // dd($request->all());
        Orderdetails::create([
            'order_id'=>$request->order_id,
            'product_id'=>$request->product_id,
            'product_name'=>$request->product_name,
            'product_quantity'=>$request->product_quantity,
            'unit_price'=>$request->unit_price,
            'sub_total'=>$request->sub_total,
        ]);
        return redirect()->back();
    }
}
