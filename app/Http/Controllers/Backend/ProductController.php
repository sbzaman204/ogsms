<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product() 
    {
        $product = product::all(); 

        return view('admin.layout.product',compact('product'));
    }

    public function productform(){
        $categories = Category::all();
        return view('admin.layout.productform',compact('categories'));
    }
    public function store(Request $request){
       
        if($request->hasFile('product_image'))
        {
            $file=$request->file('product_image');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }


        $request->validate([
        'category_id'=>'required',
        'product_name'=>'required',
        'product_price'=>'required',
        'product_quantity'=>'required',
        'product_description'=>'required',
        'product_image'=>'required',      
        'product_status'=>'required',


        ]);
        product::create([
            'category_id'=>$request->category_id,
            'product_name'=>$request->product_name,
            'product_price'=>$request->product_price,
            'product_quantity'=>$request->product_quantity,
            'product_description'=>$request->product_description,
            'product_image'=>$filename,            
            'product_status'=>$request->product_status,


        ]);
        return redirect()->back();
    }
}
