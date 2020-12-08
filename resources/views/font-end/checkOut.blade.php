@extends('font-end.master')
@section('content')
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Check out</li>
                </ol>
            </div><!--/breadcrums-->

            <div class="register-req">
                <p>Làm ơn đăng ký hoặc đăng nhập để thanh toán giỏ hàng và xem lại lịch sử mua hàng</p>
            </div><!--/register-req-->

            <div class="shopper-informations">
                <div class="row">
                    <div class="col-sm">
                        <div class="bill-to">
                            <p>Điền thông tin gửi hàng</p>
                            <div class="form-one">
                                <form action="{{route('Save.checkOut')}}" method="post">
                                    @csrf
                                    <input type="text" name="name" placeholder="Họ và tên *">
                                    <input type="text" name="address" placeholder="Địa chỉ*">
                                    <input type="text" name="phone" placeholder="Số điện thoại*">
                                    <input type="text" name="email" placeholder="Địa chỉ Email*">
                                    <textarea name="notes" placeholder="Ghi chú đơn hàng của bạn" rows="16"></textarea>
                                    <button type="submit" class="btn btn-default">Gửi</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="review-payment">
                <h2>Xem lại giỏ hàng</h2>
            </div>

            <div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
                <span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
                <span>
						<label><input type="checkbox"> Paypal</label>
					</span>
            </div>
        </div>
    </section> <!--/#cart_items-->
@endsection
