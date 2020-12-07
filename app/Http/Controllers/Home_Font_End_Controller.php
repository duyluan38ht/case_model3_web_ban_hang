<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\String\b;

class Home_Font_End_Controller extends Controller
{
    public function index()
    {
        $category = Category::all();
        $product = Product::all();
        return view('font-end.home', compact('product', 'category'));
    }

    public function product()
    {
        $category = Category::all();
        $product = Product::all();
        return view('font-end.product', compact('category', 'product'));
    }

    public function product_details($id)
    {
        $product=Product::find($id);
        $products=Product::all();
        $category = Category::all();
        return view('font-end.product-details', compact('category','product','products'));

    }

    public function search(Request $request)
    {

        $keywords = $request->keywords_submit;
        $category = Category::all();
        $search = DB::table('products')->where('name', 'like', '%' . $keywords . '%')
            ->orwhere('price', 'like', '%' . $keywords)->get();
        $search_product = DB::table('products')->where('name', 'like', '%' . $keywords . '%')
            ->orwhere('price', 'like', '%' . $keywords)->exists();


        if (!$search_product) {
            $request->session()->flash('fail', 'Không có sản phẩm nào');
        }
        return view('font-end.search', compact('search', 'category'));

    }

    public function searchCategory($id)
    {
        $product=Product::all();
        $category = Category::all();
        $category_by_id = DB::table('products')->join('categories', 'categories.id', '=', 'products.category_id')
            ->where('categories.id',$id)->get();
        $category_name = DB::table('categories')->where('categories.id', $id)->limit(1)->get();
        return view('font-end.showCategory', compact('category', 'category_by_id', 'category_name','product'));
    }


}
