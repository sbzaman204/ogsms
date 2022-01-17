<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerProfileController extends Controller
{
    public function customerprofile(){
        $orders = Order::with('productRelation')->where('user_id',auth()->user()->id)->get();
        // dd(auth()->user());
        // dd($orders);
        return view('website.layouts.customerprofile',compact('orders'));
    }
}
