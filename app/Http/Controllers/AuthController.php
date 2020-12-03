<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('back-end.login.login');
    }

    public function register()
    {
        return view('back-end.login.dangky');
    }
    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {

            return redirect()->route('showLogin');
        }else{
            return redirect()->route('admin.showHome');
        }
    }
    public function logOut(){
        Auth::logout();
        return redirect()->route('showLogin');
    }


}
