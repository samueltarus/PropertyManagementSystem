<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AdminLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin');
    }
    public function showLoginForm(){
        return view ('auth.admin-login');

    }
    public function login(){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6'

        ]);
        if (Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)) {

            return  redirect()->intended(route('dashboard.index'));

        }
        return redirect()->back()->withInput($request->only('email','rememeber'));
        


    }

}

