<header class="header bgc-white header-type-1">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-12 order-2 col-sm-12 order-sm-2 col-md-8 order-md-1 align-self-center">
                    <p>Mid-season sale up to 20% OFF. Use code "SALEOFF20"</p>
                </div>

                <div class="col-12 order-1 col-sm-12 order-sm-1 col-md-4 order-md-2">
                    <ul class="list-inline">
                        @if(Auth::check())
                        <li class="currency list-inline-item">
                            <div class="btn-group d-flex align-items-center">
                                Hello! &nbsp;<b> {{ Auth::user()->name }}</b>&nbsp; <img class="img-rounded" style="box-shadow: 0px 4px 11px #fff;border-radius: 50%" src="{{ isset(Auth::user()->avatar) ? isset(Auth::user()->google_id) ? Auth::user()->avatar :  asset('storage/'.Auth::user()->avatar) : asset('storage/users/user.png') }}" width="30px" alt="">
                            </div>
                        </li>
                        @endif
                        <li class="currency list-inline-item">
                            <div class="btn-group">
                                <button class="btn-link dropdown-toggle"> USD $<i class="fa fa-angle-down"></i></button>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="#">Euro €</a></li>
                                        <li><a href="#" class="current">USD $</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="language list-inline-item">
                            <div class="btn-group">
                                <button class="btn-link dropdown-toggle">English <i class="fa fa-angle-down"></i></button>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="#" class="current"><img src="{{ asset('assets/images/icons/en-gb.png')}}" alt="Icons"> English</a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/icons/fr-fr.png')}}" alt="Icons"> Français</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div> <!-- end of container -->
    </div> <!-- end of top-bar -->

    <div class="header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 order-2 col-sm-6 order-sm-2 col-md-4 order-md-1 col-lg-3">
                    <div class="header-search-area">
                        <form action="#">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search entire store here ...">
                                <div class="input-group-append">
                                    <button class="header-search-btn" type="submit"><i class="pe-7s-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 order-1 col-sm-12 order-sm-1 col-md-4 order-md-2 col-lg-6">
                    <div class="logo">
                        <a href="{{ route('get.home') }}"><img src="{{ asset('assets/images/logo.png')}}" alt="Logo" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-6 order-3 col-sm-6 col-md-4 col-lg-3">
                    <div class="header-cart-area">
                        <div class="header-cart">
                            <div class="btn-group">
                                <button class="btn-link dropdown-toggle icon-cart">
                                    <i class="pe-7s-shopbag"></i>
                                    <span class="count-style">{{ \Cart::count() }}</span>
                                </button>
                                <div class="dropdown-menu">
                                    <div class="shopping-cart-content cart-small-header">
                                        @if(\Cart::count() == 0)
                                            <div class="no-cart">
                                                <div>
                                                    <img src="{{ asset('./images/empty_cart4fcc.png') }}" alt="">
                                                    <p>Không có sản phẩm nào</p>
                                                </div>
                                            </div>
                                        @else
                                            <ul class="list-unstyled" id="listUnstyled">
                                                @foreach(Cart::content() as $key => $product)
                                                    <li class="single-cart-item media" id="{{ $key }}">
                                                    <div class="shopping-cart-img mr-4">
                                                        <a href="#">
                                                            <img class="img-fluid" alt="Cart Item" src="{{ asset('storage/'.$product->options->image)}}">
                                                            <span class="product-quantity">{{ $product->qty}}</span>
                                                        </a>
                                                    </div>
                                                    <div class="shopping-cart-title media-body">
                                                        <h4><a href="#">{{ $product->name }}</a></h4>
                                                        <p class="cart-price">{{ number_format($product->price,0,',','.') }}đ</p>
                                                        <div class="product-attr">
                                                            <span>Color: White</span>
                                                            <span>Accessories: Yes</span>
                                                        </div>
                                                    </div>
                                                    <div class="shopping-cart-delete">
                                                        <a onclick="deleteCartItem('{{$key}}')" href="javascript:;"><i class="ion ion-md-close"></i></a>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                            <div class="shopping-cart-total">
                                                <h4>Sub-Total : <span class="totalShoppingCart">{{ Cart::subtotal(0.3) }}đ</span></h4>
                                                <h4>Total : <span class="totalShoppingCart">{{ Cart::subtotal(0.3) }}đ</span></h4>
                                            </div>
                                            <div class="shopping-cart-btn">
                                                <a class="default-btn" href="{{ route('get.list.cart') }}">view cart</a>
                                                <a class="default-btn" href="{{ route('get.checkout') }}">checkout</a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="list-inline">
                            <li class="top-links list-inline-item">
                                <div class="btn-group">
                                    <button class="btn-link dropdown-toggle"><i class="pe-7s-config"></i></button>
                                    <div class="dropdown-menu">
                                        <ul>
                                            @if (!Auth::check())
                                            <li><a href="{{ route('get.register') }}">Register</a></li>
                                            <li><a href="{{ route('get.login') }}">Login</a></li>
                                            @else
                                            <li><a href="{{ route('get.my-account') }}">My Account</a></li>
                                            <li><a href="{{ route('get.wishlist') }}">Wishlist</a></li>
                                            <li><a href="{{ route('get.checkout') }}">Checkout</a></li>
                                            <li><a href="{{ route('get.logout') }}">Logout</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- end of header-cart-area -->
                </div>
            </div>
        </div> <!-- end of container -->
    </div> <!-- end of header-top -->



    <!-- Start of Main and Mobile Navigation -->
    <div class="main-nav-area bgc-white">
        <div class="container">
            <nav id="main_nav" class="stellarnav">
                <ul>
                    <li><a href="{{ route('get.home') }}"><span>Home</span></a>
                    </li>
                    <li><a href="{{ route('get.shop') }}"><span>Shop</span></a>
                        <ul>
                            @if(isset($categories))
                                @foreach($categories as $cate)
                                    <li><a href="{{ route('get.list.shop',[$cate->slug, $cate->id]) }}">{{ $cate->cate_name }}</a></li>
                                @endforeach
                            @endif
{{--                            <li><a href="{{ route('get.single.product') }}">Single - Product</a></li>--}}
                        </ul>
                    </li>
                    <li><a href="{{ route('get.blog') }}"><span>Blog Pages</span></a>
                        <ul>
                            <li><a href="{{ route('get.blog.detail') }}">Blog-Detail</a></li>
                        </ul>
                    </li>
{{--                    <li><a href="faqs.html"><span>Utility Pages</span></a>--}}
{{--                        <ul>--}}
{{--                            <li><a href="faqs.html">FAQs Page</a></li>--}}
{{--                            <li><a href="404.html">404 Page</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                    <li><a href="{{ route('get.about') }}"><span>About Us</span></a></li>
                    <li><a href="{{ route('get.contact') }}"><span>Contact Us</span></a></li>
                </ul>
            </nav>
        </div> <!-- end of container -->
    </div>
    <!-- End of Main and Mobile Navigation -->
</header>
