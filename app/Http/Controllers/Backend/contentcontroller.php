<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contentcontroller extends Controller
{
    public function admin(){
        return view('admin.content');
    }
    public function dashboard(){
        return view('admin.content');
    }
}
