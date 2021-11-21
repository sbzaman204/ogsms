<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        return view('admin.layout.category');
    }

    public function categoryform()
    {
        return view('admin.layout.categoryform');
    }
}
