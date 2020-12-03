<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home_back_end_Controller extends Controller
{
    public function showHome(){
        return view('back-end.home');
    }
}
