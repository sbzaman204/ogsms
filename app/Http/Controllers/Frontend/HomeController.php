<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\product;
use App\Models\Category;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $product = product::all();
        $category = Category::all();
        return view('website.layouts.content',compact('product','category'));
    }

    public function categoryWiseProduct($id)
    {
        $category = Category::all();
        $categoryWiseProduct = Product::where('id',$id)->get();
        
        return view('website.layouts.categoryWise',compact('categoryWiseProduct','category'));
    }
}
