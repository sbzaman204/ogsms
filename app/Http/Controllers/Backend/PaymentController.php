<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\OrderDetails;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment()
    {
         return view('admin.layout.payment');

    }

    public function orderUpdate(Request $request,$id)
    {
        $orderProducts = OrderDetails::find($id);
        $orderProducts->update([
            'status'=>$request->status,
        ]);
        return redirect()->back()->with('message','Order Status Updated');
    }
}
