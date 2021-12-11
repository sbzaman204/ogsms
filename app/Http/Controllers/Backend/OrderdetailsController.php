<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderdetailsController extends Controller
{
    public function orderdetails()
    {
        return view('admin.layout.orderdetails');
    }
}
