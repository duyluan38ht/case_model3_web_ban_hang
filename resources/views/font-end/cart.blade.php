@extends('font-end.master')
@section('content')
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Hinh Anh</td>
                        <td class="description">Tên Sản  Phẩm</td>
                        <td class="price">Giá</td>
                        <td class="quantity">Số Lượng</td>
                        <td class="total">Tổng Tiền</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cart as $value)
                    <tr>
                        <td class="cart_product">
                            <a href=""><img style="width: 60px" src="{{asset($products[$value->id-1]->image)}}"></a>

                        </td>
                        <td class="cart_description">
                            <h4><a href="">{{$value->name}}</a></h4>

                        </td>
                        <td class="cart_price">
                            <p>{{number_format($value->price,0,',','.')}}</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">

                                <input class="cart_quantity_input" type="text" name="quantity" value="{{$value->qty}}" autocomplete="off" size="2">

                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">{{number_format($value->qty*$value->price,0,',','.')}}</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href="{{route('cart.remove',$value->id)}}"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
                <h3>Tổng Tiền:{{$totalPrice}}VND</h3>
            </div>
        </div>
    </section> <!--/#cart_items-->


@endsection
