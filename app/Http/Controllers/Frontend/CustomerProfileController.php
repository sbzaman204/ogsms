<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use App\Models\Orderdetails;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerProfileController extends Controller
{
    public function customerprofile(){
        $id = auth()->user()->id;
        
          $orderT = Order::where('user_id',$id)->get();
        // dd(auth()->user());
        // dd($orderT);
        return view('website.layouts.customerprofile',compact('orderT'));
    }

    public function orderView($id)
    {
        // dd($id);
        $orderProducts = Orderdetails::where('order_id',$id)->get();
        return view('website.layouts.orderProductsView',compact('orderProducts'));
    }
}
