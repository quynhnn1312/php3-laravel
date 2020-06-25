@extends('client.layout.master')
@section('content')
    <div class="breadcrumb-section bgc-offset mb-full">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <nav class="breadcrumb">
                        product-list                <a class="breadcrumb-item" href="index.html">Home</a>
                        <a class="breadcrumb-item" href="cart.html">Shopping Cart</a>
                        <span class="breadcrumb-item active">Checkout</span>
                    </nav>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <div id="content" class="main-content-wrapper">

        <!-- Start of Checkout Wrapper -->
        <div class="checkout-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        @if(\Cart::count() == 0)
                        <div style="margin-bottom: 100px" class="page-content not-item text-center" id="no-shopping-cartxx">
                            <div class="img text-center">
                                <img src="http://localhost/php3/php3-laravel/public/./images/empty_cart4fcc.png">
                            </div>
                            <p style="margin: 10px 0;">
                                Không có sản phẩm nào trong giỏ hàng của bạn
                            </p>
                            <div style="padding: 20px 0;" class="ctnBuy button-action">
                                <a style="display: inline-block;
                                        border: 0;
                                        background:#cc2121;
                                        height: 50px;
                                        padding: 0 40px;
                                        border-radius: 50px;
                                        font-size: 16px;
                                        text-decoration: none;
                                        line-height: 50px;
                                        transition: all .3s;
                                        color: #fff;
                                        text-transform: uppercase;
                                        font-weight: 300;
                                        border: 1px solid #86590d !important;
                                    }" title="Tiếp tục" href="{{ route('get.home') }}" class="btn btn-outline closeCartLine">Tiếp tục mua hàng
                                </a>
                            </div>
                        </div>
                        @else
                        <main id="primary" class="site-main">
                            <div class="user-actions-area">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="user-actions user-login">
                                            <h3>Returning customer? <span id="show_login">Click here to login.</span></h3>
                                            <div id="checkout_login" class="display-content">
                                                <div class="login-info">
                                                    <p class="login-text">If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                                                    <form>
                                                        <div class="form-row mb-3">
                                                            <div class="form-group col-12 col-sm-12 col-md-6">
                                                                <label for="login_user">Username Or Email <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" id="login_user" required="">
                                                            </div>
                                                            <div class="form-group col-12 col-sm-12 col-md-6">
                                                                <label for="login_pass">Password <span class="text-danger">*</span></label>
                                                                <input type="password" class="form-control" id="login_pass" required="">
                                                            </div>
                                                        </div>
                                                        <div class="form-row align-items-center mb-3">
                                                            <div class="form-group col-4 col-sm-2 col-md-2 col-lg-1">
                                                                <button type="submit" class="btn btn-secondary">Login</button>
                                                            </div>
                                                            <div class="form-group col-8 col-sm-10 col-md-10 col-lg-11">
                                                                <div class="form-check">
                                                                    <div class="custom-checkbox">
                                                                        <input class="form-check-input" type="checkbox" id="remember_check">
                                                                        <span class="checkmark"></span>
                                                                        <label class="form-check-label" for="remember_check">remember Me</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="lost-password">
                                                            <a href="#">Lost your password?</a>
                                                        </p>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> <!-- end of user-actions -->

                                        <div class="user-actions user-coupon">
                                            <h3>Have A Coupon? <span id="show_coupon">Click Here To Enter Your Code.</span></h3>
                                            <div id="checkout_coupon" class="display-content">
                                                <div class="coupon-info">
                                                    <form action="#">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-12 col-md-6">
                                                                <div class="input-group">
                                                                    <input type="text" name="coupon" value="" placeholder="Coupon Code" id="input-coupon" class="form-control mr-3" required="">
                                                                    <input type="submit" value="Apply Coupon" id="button-coupon" class="btn btn-secondary">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> <!-- end of user-actions -->
                                    </div>
                                </div> <!-- end of row -->
                            </div> <!-- end of user-actions -->

                            <div class="checkout-area">
                                <form action="{{ route('post.checkout') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-7">
                                        <div class="checkout-form">
                                            <div class="section-title left-aligned">
                                                <h2>Billing Details</h2>
                                            </div>
                                            <div class="form-row mb-3">
                                                <div class="form-group col-12 col-sm-12 col-md-12">
                                                    <label for="first_name">Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', isset(Auth::user()->name) ? Auth::user()->name : '') }}" id="first_name" name="name" placeholder="Enter your first and last name ...">
                                                    @if($errors->has('name'))
                                                        <span class="error-text">
                                                            {{$errors->first('name')}}
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row mb-3">
                                                <div class="form-group col-12 col-sm-12 col-md-12">
                                                    <label for="email_address">Email Address <span class="text-danger">*</span></label>
                                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', isset(Auth::user()->email) ? Auth::user()->email : '') }}" id="email_address" placeholder="Enter your email address ...">
                                                    @if($errors->has('email'))
                                                        <span class="error-text">
                                                            {{$errors->first('email')}}
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row mb-3">
                                                <div class="form-group col-12 col-sm-12 col-md-12">
                                                    <label for="p_address">Address <span class="text-danger">*</span></label>
                                                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address',isset(Auth::user()->address) ? Auth::user()->address : '') }}" id="p_address" placeholder="Enter your address ...">
                                                    @if($errors->has('address'))
                                                        <span class="error-text">
                                                            {{$errors->first('address')}}
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row mb-3">
                                                <div class="form-group col-12 col-sm-12 col-md-12">
                                                    <label for="tel_number">telephone</label>
                                                    <input type="tel" name="phone" value="{{ old('phone', isset(Auth::user()->phone) ? Auth::user()->phone : '') }}" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter your phone ..." id="tel_number">
                                                    @if($errors->has('phone'))
                                                        <span class="error-text">
                                                            {{$errors->first('phone')}}
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-12 col-sm-12 col-md-12">
                                                    <label for="order_notes">Order Notes</label>
                                                    <textarea class="form-control" name="note" id="order_notes" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                                </div>
                                            </div>
                                    </div> <!-- end of checkout-form -->
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-5">
                                        <div class="order-summary">
                                            <div class="section-title left-aligned">
                                                <h2>Your Order</h2>
                                            </div>
                                            <div class="product-container">
                                                @if(isset($products))
                                                    @foreach($products as $product)
                                                        <div class="product-list">
                                                            <div class="product-inner media align-items-center">
                                                                <div class="product-image mr-4 mr-sm-5 mr-md-4 mr-lg-5">
                                                                    <a href="{{ route('get.single.product',[\Str::slug($product->name,'-'),$product->id]) }}">
                                                                        <img src="{{ asset('storage/'. $product->options->image)}}" alt="{{ $product->name }}" title="{{ $product->name }}">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5>{{ $product->name }}</h5>
                                                                    <p class="product-quantity">Quantity: {{ $product->qty }}</p>
                                                                    <p class="product-final-price">{{ number_format($product->price,0,',','.') }}đ</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div> <!-- end of product-container -->
                                            <div class="order-review">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                        <tr class="cart-subtotal">
                                                            <th>Subtotal</th>
                                                            <td class="text-center">{{ \Cart::subtotal(0.3) }}đ</td>
                                                        </tr>
                                                        <tr class="order-total">
                                                            <th>Total</th>
                                                            <td class="text-center"><strong><span class="color-primary">{{ \Cart::subtotal(0.3) }}đ</span></strong></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="checkout-payment">
                                                <div class="form-row">
                                                    <div class="custom-radio">
                                                        <input class="form-check-input" type="radio" checked name="payment" id="cash_delivery_payment" value="cash">
                                                        <span class="checkmark"></span>
                                                        <label class="form-check-label" for="cash_delivery_payment">Cash on Delivery</label>

                                                        <div class="payment-info" id="cash_pay">
                                                            <p>Pay with cash upon delivery.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-check">
                                                        <div class="custom-checkbox">
                                                            <input class="form-check-input" type="checkbox" id="terms_acceptance" required="">
                                                            <span class="checkmark"></span>
                                                            <label class="form-check-label" for="terms_acceptance">I agree to the <a href="#">terms of service</a> and will adhere to them unconditionally.</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row justify-content-end">
                                                    <input type="submit" class="btn btn-secondary dark" value="Continue to Payment">
                                                </div>
                                            </div> <!-- end of checkout-payment -->
                                        </div> <!-- end of order-summary -->
                                    </div>
                                </div> <!-- end of row -->
                                </form>
                            </div> <!-- end of checkout-area -->
                        </main> <!-- end of #primary -->
                        @endif
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Checkout Wrapper -->
    </div>
@stop
