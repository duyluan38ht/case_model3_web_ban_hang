<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class Home_Font_End_Controller extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('font-end.home',compact('product'));
    }
}
