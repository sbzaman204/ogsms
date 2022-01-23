<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(Request$request)
    {
        $search=$request->query('search');
        if($search){
            $category=Category::where('category_name','Like','%'.$search.'%')->get();
            return view('admin.layout.category',compact('category'));
        }

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
            'category_status'=>'required',

            
        ]);
        category::create([
            'category_name'=>$request->category_name,
            'category_description'=>$request->category_description,
            'category_status'=>$request->category_status,

        ]);
        return redirect()->back()->with('message','Category add succesfully');
    }

    public function categoryDetails($id)
    {

        $category = Category::where('id',$id)->first();
    
        return view('admin.layout.categorydetails',compact('category'));
    }
    public function edit($id){
        $category = Category::find($id);
        // dd($id);
        return view('admin.layout.edit_categoryform',compact('category'));
    }
    public function update(Request $request){
        $category=category::find($request->id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->category_status = $request->category_status;

        $category->save();
        return redirect('/category');


    }

    public function delete($id){
        $category=category::find($id);
        $category->delete();
        return redirect()->back();
    }

}
