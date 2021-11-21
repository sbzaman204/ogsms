<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function purchase()
    {
      return view('admin.layout.purchase');  
    }
    public function add()
    {
      return view('admin.layout.purchase_add');  
    }
    public function store(Request $request){
      purchase::create([
        
        'product_code'=>$request->product_code,
        'product_name'=>$request->product_name,
        'order_date'=>$request->order_date,
        'quantity'=>$request->quantity,
      ]);
      return redirect()->back();
    }

    
}
