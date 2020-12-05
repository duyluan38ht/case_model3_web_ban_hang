<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if ($request->email == "admin@gmail.com") {
                return redirect()->route('admin.showHome');
            } else {
                return redirect()->route('home.index');
            }
        } else {
            return redirect()->route('showLogin');
        }
    }

    public function logOut()
    {
        Auth::logout();
        return redirect()->route('showLogin');
    }


}
