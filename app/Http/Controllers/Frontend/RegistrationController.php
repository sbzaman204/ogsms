<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function registrationshow()
    {
        return view('website.layouts.registration');
    }
    public function userstore(Request $request)
    {
        // dd($request->all());
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            // 'phone'=>$request->phone,
            'password'=>$request->pass,
            


        ]);
        return redirect()->back();
    }
    public function loginpost(Request $request){
        $userpost =$request->except('_token');
        if(Auth::attempt($userpost)){
            return redirect()->route('frontend.user');
        }
        else
        return redirect()->route('loginshow');
    }
}
