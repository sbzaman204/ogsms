<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class ShowProductController extends Controller
{
    public function showproduct(){
        $products=product::all();
        return view('website.layouts.showproduct',compact('products'));

    }
}
