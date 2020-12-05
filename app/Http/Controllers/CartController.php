<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function showCart(){
        $product=Product::all();
        $category=Category::all();
        $cart=Cart::content();
        $totalPrice=Cart::subtotal();


        return view('font-end.cart',compact('category','cart','totalPrice','product'));
    }

    public function addToCart($id)
    {
        $product=Product::find($id);
        $cartInFo=[
            'id'=>$id,
            'name'=>$product->name,
            'price'=>$product->price,
            'qty'=>'1',
        ];
        Cart::add($cartInFo);
        return redirect()->route('home.index');
    }
    public function remove($id){
        $cart=Cart::content();
//        dd($cart);
        foreach ($cart as $value){
            if($value->id==$id){
                $rowId=$value->rowId;
            }
        }
//        dd($rowId);
        Cart::remove($rowId);
        return redirect()->back();
    }
}
