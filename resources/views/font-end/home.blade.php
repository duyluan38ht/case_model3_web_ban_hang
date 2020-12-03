@extends('font-end.master')
@section('content')
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Sản Phẩm Nổi Bật</h2>
        @foreach($product as $key=>$value)
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products" >
                    <div class="productinfo text-center" >
                        <img style="width: 100%" src='{{asset("$value->image")}}' alt="" />
                        <h2>Gia:{{number_format($value->price)}}VND</h2>
                        <p>{{$value->name}}</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                    </div>
                    <div class="product-overlay">
                        <div class="overlay-content">
                          <h2>Gia:{{number_format($value->price)}}VND</h2>
                            <p>{{$value->name}}</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Chi tiết</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </div><!--features_items-->

    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                @for($i=0;$i<3;$i++)
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{asset($product[$i]->image)}}" alt="" />
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
                @endfor

            </div>



            <div class="item">
                @for($i=0;$i<3;$i++)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{asset($product[$i]->image)}}" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div><!--/recommended_items-->
@endsection
