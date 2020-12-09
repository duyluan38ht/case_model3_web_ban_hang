<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Product;
use App\Models\Shipping;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();

class CheckOutController extends Controller
{
    public function showCheckOut()
    {
        return view('font-end.login_checkOut');
    }

    public function add_Customer(Request $request)
    {
//        $customer = new Customers();
//        $customer->fill($request->all());
//        $customer->save();
//
//        Session::put('id',$id);
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = md5($request->password);
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;

        $customer_id = DB::table('customers')->insertGetId($data);

//        Session::put('id',$customer_id);
//        Session::put('name',$request->name);

        Session::put('id', $customer_id);
        Session::put('name', $request->name);

        return redirect()->route('checkOut');
    }

    public function checkOut()
    {
        return view('font-end.checkOut');
    }

    public function save_checkOut(Request $request)
    {
//        $shipping = new Shipping();
//        $shipping->fill($request->all());
//        $shipping->save();

        $data = array();
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['notes'] = $request->notes;
        $data['address'] = $request->address;

        $shipping_id = DB::table('shippings')->insertGetId($data);

        Session::put('id', $shipping_id);

        return redirect()->route('payment');
    }

    public function payment()
    {
        $products=Product::all();
        $cart=Cart::content();
        return view('font-end.payment',compact('cart','products'));
    }

    public function logout_checkOut()
    {
        Session::flush();
        return redirect()->route('showCheckOut');
    }

    public function login_customer(Request $request)
    {
        $email = $request->email;
        $password = md5($request->password);
        $result = DB::table('customers')->where('email', $email)->where('password', $password)->first();

        if($result){
            Session::put('id',$result->id);
            return redirect()->route('checkOut');
        }else{
            return redirect()->route('showCheckOut');;
        }
    }

    public function order_place(Request $request){
        //insert payment_method

        $data = array();
        $data['method'] = $request->payment_option;
        $data['status'] = 'Đang chờ xử lý';
        $payment_id = DB::table('payment')->insertGetId($data);

        //insert order
        $order_data = array();
        $order_data['customer_id'] = Session::get('id');
        $order_data['shipping_id'] = Session::get('id');
        $order_data['payment_id'] = $payment_id;
        $order_data['order_total'] = Cart::subtotal();
        $order_data['order_status'] = 'Đang chờ xử lý';
        $order_id = DB::table('order')->insertGetId($order_data);

        //insert order_details
        $content = Cart::content();
        foreach($content as $v_content){
            $order_d_data['order_id'] = $order_id;
            $order_d_data['product_id'] = $v_content->id;
            $order_d_data['product_name'] = $v_content->name;
            $order_d_data['product_price'] = $v_content->price;
            $order_d_data['product_sales_quantity'] = $v_content->qty;
            DB::table('order_details')->insert($order_d_data);
        }
        if($data['method']==1){

            echo 'Thanh toán thẻ ATM';

        }elseif($data['method']==2){
            Cart::destroy();

//            $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
//            $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
            return view('font-end.offcheckout');

        }else{
            echo 'Thẻ ghi nợ';

        }

        //return Redirect::to('/payment');
    }
}
