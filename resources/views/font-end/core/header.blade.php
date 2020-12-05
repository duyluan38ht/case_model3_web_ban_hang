<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <div class="logo pull-left">
                                    <a href="index.html"><img style="width: 100px" src="{{asset('banenr/logoshop.webp')}}" alt="" /></a>
                                </div>
                                <li><a href="{{route('home.index')}}" class="active"><b>Trang Chủ</b></a></li>
                                <li class="dropdown"><a href="#"><b>Shop</b><i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{route('home.product')}}">Sản Phẩm</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="login.html">Login</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html"><b>Liên hệ</b></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li>
                                <div>
                                    <div class="col-sm">
                                        <form action="{{route('search')}}" method="POST">
                                            {{csrf_field()}}
                                            <div class="-group">
                                                <input type="text" name="keywords_submit" placeholder="Nhập tên hoặc giá sản phẩm"/>
                                                <input type="submit" style="margin-top:0;color:#666" name="search_items" class="btn btn-primary btn-sm" value="Tìm kiếm">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li><a href="{{route('logout')}}"><i class="fa fa-user"></i> Logout</a></li>
                            <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                            <li><a href="{{route('cart.showCart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            <li><a href="{{route('login')}}"><i class="fa fa-lock"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->



