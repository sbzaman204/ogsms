<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;



class contentcontroller extends Controller
{
    public function admin(){
        return view('admin.content');
    }
    public function dashboard(){
        $category=Category::count();
        $product=Product::count();
        $user=User::count();
        $order=Order::count();




        return view('admin.content',compact('category','product','user','order'));
    }
}
