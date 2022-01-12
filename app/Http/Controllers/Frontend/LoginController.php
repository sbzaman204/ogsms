<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function registrationform(){
        return view('website.layouts.registration');
    }
    public function doRegistration(Request $request){
        // dd($request->all());
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt( $request->password),
        ]);
        return redirect()->route('user.login');
        
    }


    public function loginform(){
        return view('website.layouts.login');
    }

    public function doLogin(Request $request){
        // dd($request->all());
        $userpost=$request->except('_token');
            // dd($userpost);
        if (Auth::attempt($userpost)) {
            // dd("true");
            return redirect()->route('home');
        }
        else
        return redirect()->route('user.login');
    }
    public function logout(){
        session()->forget('cart');
        Auth::logout();
        return redirect()->route('home');
    }
}
