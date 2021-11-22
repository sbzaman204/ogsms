<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        $category = Category::all();
        // dd($category);
        return view('admin.layout.category',compact('category'));
    }

    public function categoryf()
    {
        return view('admin.layout.categoryform');
    }
    public function store(Request $request){
        category::create([
            'product_code'=>$request->product_code,
            'product_name'=>$request->product_name,
            'product_price'=>$request->product_price,
            'product_description'=>$request->product_description,
        ]);
        return redirect()->back();
    }
}
