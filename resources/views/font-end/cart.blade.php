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
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cart as $value)
                    <tr>
                        <td class="cart_product">
                            <a href=""><img style="width: 60px" src="{{asset($product[$value->id]->image)}}" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">{{$value->name}}</a></h4>

                        </td>
                        <td class="cart_price">
                            <p>{{number_format($value->price,0,',','.')}}</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href=""> + </a>
                                <input class="cart_quantity_input" type="text" name="quantity" value="{{$value->qty}}" autocomplete="off" size="2">
                                <a class="cart_quantity_down" href=""> - </a>
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
                <p>Total Price:{{$totalPrice}}</p>
            </div>
        </div>
    </section> <!--/#cart_items-->


@endsection
