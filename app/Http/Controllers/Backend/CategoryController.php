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
        $request->validate([
        'category_name'=>'required',
            'category_description'=>'required',
            
        ]);
        category::create([
            'category_name'=>$request->category_name,
            'category_description'=>$request->category_description,
        ]);
        return redirect()->back();
    }
}
