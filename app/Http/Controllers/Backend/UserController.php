<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {
        $data=User::all();
        return view('admin.layout.user',compact('data'));
    }
}
