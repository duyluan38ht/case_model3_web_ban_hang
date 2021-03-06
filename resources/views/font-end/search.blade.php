@extends('font-end.master')
@section('content')


    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Ket qua tim kiem</h2>

        @if(session()->has('fail'))
            <h1 style="text-align: center;color: red">{{session()->get('fail')}}</h1>
        @endif
        @foreach($search as $key=>$value)
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products" >
                        <div class="productinfo text-center" >
                            <img style="width: 100%" src='{{asset("$value->image")}}' alt="" />
                            <h2>Gia:{{number_format($value->price,0,',','.')}}VND</h2>
                            <p>{{$value->name}}</p>
                            <a href="{{route('cart.addToCart',$value->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                        </div>
                        <div class="product-overlay">
                            <div class="overlay-content">
                                <h2>Gia:{{number_format($value->price,0,',','.')}}VND</h2>
                                <p>{{$value->name}}</p>
                                <a href="{{route('cart.addToCart',$value->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
{{--                                <a href="{{route('home.product_details',$value->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Chi tiết</a>--}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    </div><!--features_items-->


@endsection
