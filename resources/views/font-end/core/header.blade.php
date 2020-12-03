<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{route('home.index')}}" class="active"><b>Trang Chủ</b></a></li>
                                <li class="dropdown"><a href="#"><b>Shop</b><i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Sản Phẩm</a></li>
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
                                    <div class="search_box pull-right">
                                        <input type="text" placeholder="Search"/>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                            <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            <li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->


</header><!--/header-->

<section id="slider"><!--slider-->
    <div class="container-sm">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active" >

                            <div class="col-sm-12" >
                                <img style="width: 100%" src="{{asset('/banenr/banrner.jpg')}}" class="girl img-responsive" alt="" />

                            </div>
                        </div>
                        <div class="item">

                            <div class="col-sm-12">
                                <img style="width: 100%" src="{{asset('/banenr/banner.jpg')}}" class="girl img-responsive" alt="" />
                            </div>
                        </div>

                        <div class="item">

                            <div class="col-sm-12">
                                <img style="width: 100%" src="{{asset('banenr/ban.jpg')}}" class="girl img-responsive" alt="" />

                            </div>
                        </div>

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->
