<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeliverymanController extends Controller
{
    public function deliveryman()
    {
        return view('admin.layout.deliveryman');
    }
}
