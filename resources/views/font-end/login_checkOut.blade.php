@extends('font-end.master')
@section('content')
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <h2>Đăng nhập vào tài khoản của bạn</h2>
                        <form action="{{route('login.customer')}}" method="post">
                            @csrf
                            <input type="text" name="email" placeholder="email" />
                            <input type="password" name="password" placeholder="password" />
                            <span>
								<input type="checkbox" class="checkbox">
								Ghi nhớ đăng nhập
							</span>
                            <button type="submit" class="btn btn-default">Đăng nhập</button>
                        </form>
                    </div><!--/login form-->
                </div>
                <div class="col-sm-1">
                    <h2 class="or">HOẶC</h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>Đăng ký tài khoản!</h2>
                        <form action="{{route('add_Customer')}}" method="post">
                            @csrf
                            <input type="text" name="name" placeholder="Nhập Ten"/>
                            <input type="email" name="email" placeholder="Nhập Email"/>
                            <input type="password" name="password" placeholder="Nhập mật khẩu"/>
                            <input type="text" name="phone" placeholder="Nhập số điện thoại"/>
                            <input type="text" name="address" placeholder="Nhập địa chỉ"/>
                            <button type="submit" class="btn btn-default">Đăng ký</button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->

@endsection
