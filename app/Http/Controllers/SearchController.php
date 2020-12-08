<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function searchAoVest()
    {
        $search = DB::table('products')->where('name', 'like', '%' . 'ÁO VEST' . '%')
            ->get();
        return view('font-end.search.searchAoVest',compact('search'));
    }
    public function searchQuanJean()
    {
        $search = DB::table('products')->where('name', 'like', '%' . 'QUẦN' . '%')
            ->get();
        return view('font-end.search.searchQuanJean',compact('search'));
    }
    public function searchAoSoMi()
    {
        $search = DB::table('products')->where('name', 'like', '%' . 'ÁO SƠ MI' . '%')
            ->get();
        return view('font-end.search.searchAoSoMi',compact('search'));
    }
}
