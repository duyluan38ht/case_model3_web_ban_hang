@extends('font-end.master')
@section('content')
{{--    <section id="advertisement">--}}
{{--        <div class="container">--}}
{{--            <img src="images/shop/advertisement.jpg" alt="" />--}}
{{--        </div>--}}
{{--    </section>--}}
    <section>
        <div class="container mt-5">
            <div class="row">

                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Features Items</h2>
                        @foreach($product as $key=>$value)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{asset($value->image)}}" alt="" />
                                        <h2>{{number_format($value->price)}}VND</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="{{route('cart.addToCart',$value->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <a href="{{route('cart.addToCart',$value->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                        <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div><!--features_items-->
                </div>
            </div>
        </div>


    </section>
<div class="container">

       <h3 style="text-align: center"> <span>{!! $product->render() !!}</span></h3>

</div>
@endsection
