@extends('client.layout.master')
@section('content')
    <div class="breadcrumb-section bgc-offset mb-full">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="index.html">Home</a>
                        <span class="breadcrumb-item active">Shopping Cart</span>
                    </nav>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <div id="content" class="main-content-wrapper">
{{--    @php(dd($products))--}}
        <!-- Start of Shopping Cart Wrapper -->
        <div class="shopping-cart-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <main id="primary" class="site-main">
                            <div class="shopping-cart">
                                <div class="row">
                                    <div id="shopping-cart-big" class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <div style="display: none" class="page-content not-item text-center" id="no-shopping-cartxx">
                                            <div class="img text-center">
                                                <img src="{{ asset('./images/empty_cart4fcc.png') }}">
                                            </div>
                                            <p style="margin: 10px 0;">
                                                Không có sản phẩm nào trong giỏ hàng của bạn
                                            </p>
                                            <div style="padding: 20px 0;" class="ctnBuy button-action">
                                                <a style="  display: inline-block;
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
                                        <div class="container-shopping-cart">
                                            <div class="section-title">
                                                <h2>Shopping Cart</h2>
                                            </div>
                                            <form action="#">
                                                @csrf
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <td>STT</td>
                                                            <td>Image</td>
                                                            <td>Product Name</td>
                                                            <td>Quantity</td>
                                                            <td>Action</td>
                                                            <td>Unit Price</td>
                                                            <td>Total</td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if(isset($products))
                                                            @php($i = 1)
                                                            @foreach($products as $key => $product)
                                                                <tr id="row-cart-big-{{$key}}">
                                                                    <td>#{{ $i }}</td>
                                                                    <td>
                                                                        <a href="{{ route('get.single.product',[\Str::slug($product->name,'-'),$product->id]) }}"><img src="{{asset('storage/'.$product->options->image)}}" alt="Cart Product Image" title="Compete Track Tote" class="img-thumbnail"></a>
                                                                    </td>
                                                                    <td>
                                                                        <a href="{{ route('get.single.product',[\Str::slug($product->name,'-'),$product->id]) }}">{{ $product->name }}</a>
                                                                        <span>Delivery Date: 2018-09-22</span>
                                                                        <span>Color: Brown</span>
                                                                        <span>Reward Points: 300</span>
                                                                    </td>
                                                                    <td id="quantity-product-item-{{ $key }}">{{ $product->qty }}</td>
                                                                    <td>
                                                                        <div class="input-group btn-block">
                                                                            <div class="cart-input">
                                                                                <input id="pro-{{ $key }}" class="cart-input-box" type="text" min="1" value="{{ $product->qty }}">
                                                                                <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                                                <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                                            </div>
                                                                            <span class="input-group-btn">
                                                                            <button type="button" onclick="qtyUpdate('{{$key}}',{{ $product->price }})" class="btn btn-primary"><i class="fa fa-refresh"></i></button>
                                                                            <button type="button" onclick="deleteCartItem('{{$key}}')" class="btn btn-danger pull-right"><i class="fa fa-times-circle"></i></button>
                                                                        </span>
                                                                        </div>
                                                                    </td>
                                                                    <td>{{ number_format($product->price,0,',','.') }}đ</td>
                                                                    <td id="total-product-item-{{$key}}">{{ number_format($product->qty * $product->price,0,',','.') }}đ</td>
                                                                </tr>
                                                                @php($i++)
                                                            @endforeach
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </form>

                                            <div class="cart-accordion-wrapper mt-full">
                                                <h2>What would you like to do next?</h2>
                                                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                                                <div id="cart_accordion" class="mt-4" role="tablist">
                                                    <div class="card">
                                                        <div class="card-header" role="tab" id="headingCoupon">
                                                            <h4 class="mb-0">
                                                                <a data-toggle="collapse" href="#collapseCoupon" aria-expanded="false" aria-controls="collapseCoupon">Use Coupon Code<i class="ion ion-ios-arrow-down"></i></a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseCoupon" class="collapse" role="tabpanel" aria-labelledby="headingCoupon" data-parent="#cart_accordion">
                                                            <div class="card-body">
                                                                <div class="input-group">
                                                                    <label class="col-12 col-sm-12 col-md-3" for="input-coupon">Enter your coupon here</label>
                                                                    <div class="col-12 col-sm-12 col-md-9">
                                                                        <div class="input-group">
                                                                            <input type="text" name="coupon" value="" placeholder="Enter your coupon here" id="input-coupon" class="form-control">
                                                                            <input type="button" value="Apply Coupon" id="button-coupon" class="btn btn-secondary">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" role="tab" id="headingTax">
                                                            <h4 class="mb-0">
                                                                <a class="collapsed" data-toggle="collapse" href="#collapseTax" aria-expanded="false" aria-controls="collapseTax">Estimate Shipping &amp; Taxes<i class="ion ion-ios-arrow-down"></i></a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseTax" class="collapse" role="tabpanel" aria-labelledby="headingTax" data-parent="#cart_accordion">
                                                            <div class="card-body">
                                                                <p>Enter your destination to get a shipping estimate.</p>
                                                                <div class="input-group form-group">
                                                                    <label class="col-12 col-sm-12 col-md-3" for="input-country"><span class="text-danger">*</span> Country</label>
                                                                    <div class="col-12 col-sm-12 col-md-9">
                                                                        <select name="country_id" id="input-country" class="form-control nice-select" style="display: none;">
                                                                            <option value=""> --- Please Select --- </option>
                                                                            <option value="">Argentina</option>
                                                                            <option value="">Bangladesh</option>
                                                                            <option value="">Belgium</option>
                                                                            <option value="">Brazil</option>
                                                                            <option value="">Germany</option>
                                                                            <option value="">India</option>
                                                                            <option value="">United Kingdom</option>
                                                                            <option value="">United States</option>
                                                                        </select><div class="nice-select form-control" tabindex="0"><span class="current"> --- Please Select --- </span><ul class="list"><li data-value="" class="option selected"> --- Please Select --- </li><li data-value="" class="option">Argentina</li><li data-value="" class="option">Bangladesh</li><li data-value="" class="option">Belgium</li><li data-value="" class="option">Brazil</li><li data-value="" class="option">Germany</li><li data-value="" class="option">India</li><li data-value="" class="option">United Kingdom</li><li data-value="" class="option">United States</li></ul></div>
                                                                    </div>
                                                                </div>
                                                                <div class="input-group form-group">
                                                                    <label class="col-12 col-sm-12 col-md-3" for="input-zone"><span class="text-danger">*</span> Region / State</label>
                                                                    <div class="col-12 col-sm-12 col-md-9">
                                                                        <select name="zone_id" id="input-zone" class="form-control nice-select" style="display: none;">
                                                                            <option value=""> --- Please Select --- </option>
                                                                            <option value="">Alabama</option>
                                                                            <option value="">Arizona</option>
                                                                            <option value="">California</option>
                                                                            <option value="">Florida</option>
                                                                            <option value="">Newyork</option>
                                                                        </select><div class="nice-select form-control" tabindex="0"><span class="current"> --- Please Select --- </span><ul class="list"><li data-value="" class="option selected"> --- Please Select --- </li><li data-value="" class="option">Alabama</li><li data-value="" class="option">Arizona</li><li data-value="" class="option">California</li><li data-value="" class="option">Florida</li><li data-value="" class="option">Newyork</li></ul></div>
                                                                    </div>
                                                                </div>
                                                                <div class="input-group form-group mb-5">
                                                                    <label class="col-12 col-sm-12 col-md-3" for="input-postcode"><span class="text-danger">*</span> Post Code</label>
                                                                    <div class="col-12 col-sm-12 col-md-9">
                                                                        <input type="text" name="postcode" value="" placeholder="Post Code" id="input-postcode" class="form-control mb-0">
                                                                    </div>
                                                                </div>
                                                                <button type="button" id="button-quote" class="btn btn-secondary">Get Quotes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" role="tab" id="headingGift">
                                                            <h4 class="mb-0">
                                                                <a class="collapsed" data-toggle="collapse" href="#collapseGift" aria-expanded="false" aria-controls="collapseGift">Use Gift Certificate<i class="ion ion-ios-arrow-down"></i></a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseGift" class="collapse" role="tabpanel" aria-labelledby="headingGift" data-parent="#cart_accordion">
                                                            <div class="card-body">
                                                                <div class="input-group">
                                                                    <label class="col-12 col-sm-12 col-md-3" for="input-voucher">Enter your gift certificate code here</label>
                                                                    <div class="col-12 col-sm-12 col-md-9">
                                                                        <div class="input-group">
                                                                            <input type="text" name="voucher" value="" placeholder="Enter your gift certificate code here" id="input-voucher" class="form-control">
                                                                            <input type="button" value="Apply Gift Certificate" id="button-boucher" class="btn btn-secondary">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="cart-amount-wrapper">
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-4 offset-md-8">
                                                        <table class="table table-bordered">
                                                            <tbody>
                                                            <tr>
                                                                <td><strong>Sub-Total:</strong></td>
                                                                <td class="total-shopping-cart">{{ \Cart::total(0,3) }}đ</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Total:</strong></td>
                                                                <td><span class="color-primary total-shopping-cart">{{ \Cart::total(0,3) }}đ</span></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="cart-button-wrapper d-flex justify-content-between mt-4">
                                                <a href="{{ route('get.shop') }}" class="btn btn-secondary dark">Continue Shopping</a>
                                                <a href="{{ route('get.checkout') }}" class="btn btn-secondary dark align-self-end">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end of shopping-cart -->
                        </main> <!-- end of #primary -->
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Shopping Cart Wrapper -->
    </div>
@stop
@section('js')
    <script>
        @if(\Cart::count() == 0)
            $('#no-shopping-cartxx').show();
            $('.container-shopping-cart').hide();

        @endif
        function qtyUpdate(key,price){
            quantityUpdate = document.querySelector('#pro-'+key).value;
            $.ajax({
                url: '{{ route('update.cart.item') }}',
                type:'POST',
                data: {
                    _token : '{{ csrf_token() }}',
                    key : key,
                    quantityUpdate : quantityUpdate,
                    price : price,
                }
            }).done(function(result) {
                if(result){
                    $(`#total-product-item-${key}`).text(result.totalProductItem+'đ');
                    $(`#quantity-product-item-${key}`).text(quantityUpdate);
                    $('.total-shopping-cart').text(result.total+'đ')
                    $('.count-style').html(result.count)
                    if(quantityUpdate == 0){
                        $(`#row-cart-big-${key}`).remove();
                        $(`#${key}`).remove();
                    }
                    if(result.total == 0) {
                        $('.shopping-cart-content').
                        html(`<div class="no-cart">
                            <div>
                                <img src="{{ asset('./images/empty_cart4fcc.png') }}" alt="">
                                <p>Không có sản phẩm nào</p>
                            </div>
                         </div>`)
                        $('#no-shopping-cartxx').show();
                        $('.container-shopping-cart').hide();
                    }
                }
            });
        }
    </script>

@stop
