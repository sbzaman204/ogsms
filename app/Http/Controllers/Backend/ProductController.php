<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product() 
    {
        $product = product::all(); 

        return view('admin.layout.product',compact('product'));
    }

    public function productform(){
        return view('admin.layout.productform');
    }
    public function store(Request $request){
        $request->validate([
        'category_id'=>'required',
        'product_name'=>'required',
        'product_price'=>'required',
        'product_quantity'=>'required',
        'product_description'=>'required',
        'product_image'=>'required',
        ]);
        product::create([
            'category_id'=>$request->category_id,
            'product_name'=>$request->product_name,
            'product_price'=>$request->product_price,
            'product_quantity'=>$request->product_quantity,
            'product_description'=>$request->product_descrription,
            'product_image'=>$request->product_image,
        ]);
        return redirect()->back();
    }
}
