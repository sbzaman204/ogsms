<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalesController extends Controller
{
   public function sales()   
    {
        return view('admin.layout.sales');
    } 
}
