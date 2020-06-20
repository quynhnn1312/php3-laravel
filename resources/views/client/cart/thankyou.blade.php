<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Shop name - Thanh toán đơn hàng">

    <title>Thank-You</title>


    <link rel="shortcut icon" href="https://oh-me-va-be.bizwebvietnam.net/favicon.ico" type="image/x-icon">


    <link href="{{asset('./thankyou/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('./thankyou/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('./thankyou/thankyou.css')}}" rel="stylesheet" type="text/css">

    <style>
        #map {
            width: 100%;
            height: 245px;
        }

        .hidden-map {
            display: none;
        }
    </style>


    <script type="text/javascript" charset="UTF-8" src="{{asset('./thankyou/common.js.tải xuống')}}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{asset('./thankyou/util.js.tải xuống')}}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{asset('./thankyou/map.js.tải xuống')}}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{asset('./thankyou/marker.js.tải xuống')}}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{asset('./thankyou/onion.js.tải xuống')}}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{asset('./thankyou/controls.js.tải xuống')}}"></script>
</head>

<body class="body--custom-background-color ">

<div context="checkout" define="{checkout: new Bizweb.StoreCheckout(this,{})}" class="container">
    <div class="header">
        <div class="wrap">
            <div class="shop logo logo--left ">

                <h1 class="shop__name">
                    <a href="{{ route('get.home') }}">
                        Pebona.
                    </a>
                </h1>

            </div>
        </div>
    </div>
    <div class="main">
        <div class="wrap clearfix">
            <div class="row thankyou-infos">
                <div class="col-md-7 thankyou-message">
                    <div class="thankyou-message-icon unprint">
                        <div class="icon icon--order-success svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
                                <g fill="none" stroke="#8EC343" stroke-width="2">
                                    <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                                    <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="thankyou-message-text">
                        <h3>Cảm ơn bạn đã đặt hàng</h3>
                        <p>

                            Một email xác nhận đã được gửi tới {{ $requestData['email'] }}. Xin vui lòng kiểm tra email của bạn

                        </p>
                        <div style="font-style: italic;">

                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12 order-info">
                    <div class="order-summary order-summary--custom-background-color ">
                        <div class="order-summary-header summary-header--thin summary-header--border">
                            <h2>
                                <label class="control-label">Đơn hàng #{{ $transactionId }} có ({{ $countProduct }}) sản phẩm</label>
                            </h2>
                            <a class="underline-none expandable expandable--pull-right mobile unprint" bind-event-click="toggle(this, &#39;.order-items&#39;)" bind-class="{open: order_expand}" href="javascript:void(0)">
                                Xem chi tiết
                            </a>
                        </div>
                        <div class="order-items mobile--is-collapsed">
                            <div class="summary-body summary-section summary-product">
                                <div class="summary-product-list">
                                    <ul class="product-list">
                                        @if(isset($products))
                                        @foreach($products as $pro)
                                            <li class="product product-has-image clearfix">
                                                <div class="product-thumbnail pull-left">
                                                    <div class="product-thumbnail__wrapper">
                                                        <img src="{{ asset('storage/'.$pro->options->image) }}" class="product-thumbnail__image">
                                                    </div>
                                                    <span class="product-thumbnail__quantity unprint" aria-hidden="true">{{ $pro->qty }}</span>
                                                </div>
                                                <div class="product-info pull-left">
                                                        <span class="product-info-name">
                                                            <strong>{{ $pro->name }}</strong>
                                                            <label class="print">x{{ $pro->qty }}</label>
                                                        </span>
                                                </div>
                                                <strong class="product-price pull-right">
                                                    {{ number_format($pro->price,0,',','.') }}đ
                                                </strong>
                                            </li>
                                        @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="summary-section  border-top-none--mobile ">
                            <div class="total-line total-line-subtotal clearfix">
                                    <span class="total-line-name pull-left">
                                        Tạm tính
                                    </span>
                                    <span class="total-line-subprice pull-right">
                                        {{ number_format($requestData['total'],0,',','.') }}đ
                                    </span>
                            </div>
{{--                            <div class="total-line total-line-shipping clearfix">--}}
{{--                                    <span class="total-line-name pull-left">--}}
{{--                                        Giá mã vouchers--}}
{{--                                    </span>--}}
{{--                                <span class="pull-right">--}}
{{--                                    </span>--}}
{{--                            </div>--}}
                        </div>
                        <div class="summary-section">
                            <div class="total-line total-line-total clearfix">
                                    <span class="total-line-name total-line-name--bold pull-left">
                                        Tổng cộng
                                    </span>
                                    <span class="total-line-price pull-right">
                                        {{ number_format($requestData['total'],0,',','.') }}đ
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 customer-info">

                    <div class="shipping-info">
                        <div class="row">

                            <div class="col-md-6 col-sm-6">
                                <div class="order-summary order-summary--white no-border no-padding-top">
                                    <div class="order-summary-header">
                                        <h2>
                                            <label class="control-label">Thông tin nhận hàng</label>
                                        </h2>
                                    </div>
                                    <div class="summary-section no-border no-padding-top">
                                        <p class="address-name">
                                            {{ $requestData['name'] }}
                                        </p>
                                        <p class="address-address">
                                            {{ $requestData['phone'] }}
                                        </p>
                                        <p class="address-ward">
                                            {{ $requestData['email'] }}
                                        </p>
                                        <p class="address-ward">
                                            {{ $requestData['adress'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">

                                <div class="order-summary order-summary--white no-border">
                                    <div class="order-summary-header">
                                        <h2>
                                            <label class="control-label">Thông tin thanh toán</label>
                                        </h2>
                                    </div>
                                    <div class="summary-section no-border no-padding-top">
                                        <p class="address-name">
                                            {{ $requestData['name'] }}
                                        </p>
                                        <p class="address-address">
                                            {{ $requestData['phone'] }}
                                        </p>
                                        <p class="address-ward">
                                            {{ $requestData['email'] }}
                                        </p>
                                        <p class="address-ward">
                                            {{ $requestData['adress'] }}
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="order-summary order-summary--white no-border">
                                    <div class="order-summary-header">
                                        <h2>
                                            <label class="control-label">Hình thức thanh toán</label>
                                        </h2>
                                    </div>
                                    <div class="summary-section no-border no-padding-top">
                                        <span>Thanh toán khi giao hàng (COD)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="order-summary order-summary--white no-border">
                                    <div class="order-summary-header">
                                        <h2>
                                            <label class="control-label">Hình thức vận chuyển</label>
                                        </h2>
                                    </div>
                                    <div class="summary-section no-border no-padding-top">


                                        <span>Thanh toán khi giao hàng (COD)</span>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="order-success unprint">
                        <a href="{{ route('get.home') }}" class="btn btn-primary">
                            Tiếp tục mua hàng
                        </a>
                        <a onclick="window.print()" class="nounderline print-link" href="javascript:void(0)">
                            <div class="print-link__block clearfix">
                                <i class="fa fa-print icon-print" aria-hidden="true"></i> In
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_footer footer unprint">



            <div class="mt10"></div>
        </div>
        <div class="modal fade" id="refund-policy" data-width="" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 class="modal-title">Chính sách hoàn trả</h4>
                    </div>
                    <div class="modal-body">
                        <pre></pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="privacy-policy" data-width="" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 class="modal-title">Chính sách bảo mật</h4>
                    </div>
                    <div class="modal-body">
                        <pre></pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="terms-of-service" data-width="" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 class="modal-title">Điều khoản sử dụng</h4>
                    </div>
                    <div class="modal-body">
                        <pre></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('./thankyou/jquery-2.1.3.min.js.tải xuống')}}" type="text/javascript"></script>
<script src="{{asset('./thankyou/bootstrap.min.js.tải xuống')}}" type="text/javascript"></script>
<script src="{{asset('./thankyou/twine.min.js.tải xuống')}}" type="text/javascript"></script>
<script src="{{asset('./thankyou/checkout.js.tải xuống')}}" type="text/javascript"></script>
<script src="{{asset('./thankyou/thankyou.js.tải xuống')}}" type="text/javascript"></script>

<script type="text/javascript">
    context = {}

    $(function() {
        Twine.reset(context).bind().refresh();
    });

    window.Bizweb || (window.Bizweb = {});
    Bizweb.Checkout = function() {
        function Checkout(e, options) {
            if (!options)
                options = {};

            this.ele = e;
            this.invalidEmail = false;
        };

        Checkout.prototype.handleClick = function(element) {
            $(element).closest(".field__input-wrapper").find(".field__input").focus();
        }

        Checkout.prototype.handleFocus = function(element) {
            $(element).closest(".field__input-wrapper").addClass("js-is-focused")
        }

        Checkout.prototype.handleFieldBlur = function(element) {
            $(element).closest(".field__input-wrapper").removeClass("js-is-focused")
        }

        Checkout.prototype.changeEmail = function() {}

        return Checkout;
    }();
</script>


</body>

</html>
