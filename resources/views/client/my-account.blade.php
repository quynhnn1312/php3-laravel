@extends('client.layout.master')
@section('content')
    <div class="breadcrumb-section bgc-offset mb-full">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="{{ route('get.home') }}">Home</a>
                        <span class="breadcrumb-item active">My Account</span>
                    </nav>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <div id="content" class="main-content-wrapper">

        <!-- Start of My Account Wrapper -->
        <div class="my-account-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <main id="primary" class="site-main">
                            <div class="user-dashboard">
                                <div class="user-info">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                            <div class="single-info">
                                                <p class="user-name">Hello <span>{{ Auth::user()->name }}</span> <br>(not {{ Auth::user()->name }}? <a class="log-out" href="login.html">Log Out</a>)</p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                            <div class="single-info">
                                                <p>Need Assistance? Customer service at <a href="#">admin@example.com</a></p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                            <div class="single-info">
                                                <p>E-mail them at <a href="#">support@example.com</a></p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-2 col-xl-3">
                                            <div class="single-info justify-content-lg-center">
                                                <a class="btn btn-secondary" href="{{ route('get.list.cart') }}">View Cart</a>
                                            </div>
                                        </div>
                                    </div> <!-- end of row -->
                                </div> <!-- end of user-info -->

                                <div class="main-dashboard">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-2">
                                            <ul class="nav flex-column dashboard-list" role="tablist">
                                                <li><a class="nav-link active" data-toggle="tab" href="#dashboard">Dashboard</a></li>
                                                <li> <a class="nav-link" data-toggle="tab" href="#orders">Orders</a></li>
                                                <li><a class="nav-link" data-toggle="tab" href="#downloads">Downloads</a></li>
                                                <li><a class="nav-link" data-toggle="tab" href="#address">Addresses</a></li>
                                                <li><a class="nav-link" data-toggle="tab" href="#account-details">Account details</a></li>
                                                <li><a class="nav-link" href="{{ route('get.logout') }}">logout</a></li>
                                            </ul> <!-- end of dashboard-list -->
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                                            <!-- Tab panes -->
                                            <div class="tab-content dashboard-content">
                                                <div id="dashboard" class="tab-pane fade show active">
                                                    <h3>Dashboard </h3>
                                                    <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">edit your password and account details.</a></p>
                                                </div> <!-- end of tab-pane -->

                                                <div id="orders" class="tab-pane fade">
                                                    <h3>Orders</h3>
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Mã đơn</th>
                                                                    <th width="30%">Thông tin</th>
                                                                    <th>Tổng tiền</th>
                                                                    <th>Trạng thái</th>
                                                                    <th width="12%">Ngày đặt</th>
                                                                    <th>Thao tác</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @if(isset($userTransaction))
                                                                    @foreach($userTransaction as $userTr)
                                                                    <tr>
                                                                        <td>DH{{ $userTr->id }}</td>
                                                                        <td>
                                                                            <ul>
                                                                                <li>SĐT: {{ $userTr->phone }}</li>
                                                                                <li>Địa chỉ: {{ $userTr->adress }}</li>
                                                                            </ul>
                                                                        </td>
                                                                        <td id="total-transaction-{{$userTr->id}}">{{ number_format($userTr->total,0,',','.') }}đ</td>
                                                                        <td>
                                                                            <span class="badge {{ $userTr->getStatus($userTr->status)['class'] }}">
                                                                                {{ $userTr->getStatus($userTr->status)['name'] }}
                                                                            </span>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            {{ $userTr->created_at }}
                                                                        </td>
                                                                        <td>
                                                                            <a class="btn btn-secondary" onclick="viewOrder(event)" data-status="{{ $userTr->status }}"  href="#" data-id="{{ $userTr->id }}" data-total='{{number_format($userTr->total,0,',','.')}}' data-toggle="modal" data-target="#modal-lg" >view</a>
                                                                            @if($userTr->status === 0)
                                                                            <a class="btn btn-secondary js-cancel-transaction" href="{{ route('cancel.transaction',$userTr->id) }}">hủy</a>
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                                @endif
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div> <!-- end of tab-pane -->

                                                <div id="downloads" class="tab-pane fade">
                                                    <h3>Downloads</h3>
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th>Product</th>
                                                                <th>Downloads</th>
                                                                <th>Expires</th>
                                                                <th>Download</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>Volga - Ecommerce Bootstrap Template</td>
                                                                <td>August 10, 2018</td>
                                                                <td>Never</td>
                                                                <td><a class="btn btn-secondary" href="#">Download File</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Gatcomart - Ecommerce HTML Template</td>
                                                                <td>September 11, 2018</td>
                                                                <td>Never</td>
                                                                <td><a class="btn btn-secondary" href="#">Download File</a></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div> <!-- end of tab-pane -->

                                                <div id="address" class="tab-pane">
                                                    <p>The following addresses will be used on the checkout page by default.</p>
                                                    <h4 class="billing-address">Billing address</h4>
                                                    <a class="btn btn-secondary my-4" href="#">edit</a>
                                                    <p>Pebona Themes</p>
                                                    <p>Bangladesh</p>
                                                </div> <!-- end of tab-pane -->

                                                <div id="account-details" class="tab-pane fade">
                                                    <h3>Account details </h3>
                                                    <div class="login-form">
                                                        <form action="#">
                                                            <div class="form-group row align-items-center">
                                                                <label class="col-12 col-sm-12 col-md-4 col-lg-3 col-form-label">Title</label>
                                                                <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                                                                    <div class="form-row">
                                                                        <div class="col-6 col-sm-3">
                                                                            <div class="custom-radio">
                                                                                <input class="form-check-input" type="radio" name="gender" id="male">
                                                                                <span class="checkmark"></span>
                                                                                <label class="form-check-label" for="male">Mr.</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6 col-sm-3">
                                                                            <div class="custom-radio">
                                                                                <input class="form-check-input" type="radio" name="gender" id="female">
                                                                                <span class="checkmark"></span>
                                                                                <label class="form-check-label" for="female">Mrs.</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="f-name" class="col-12 col-sm-12 col-md-4 col-lg-3 col-form-label">First Name</label>
                                                                <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                                                                    <input type="text" class="form-control" id="f-name" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="l-name" class="col-12 col-sm-12 col-md-4 col-lg-3 col-form-label">Last Name</label>
                                                                <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                                                                    <input type="text" class="form-control" id="l-name" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="email" class="col-12 col-sm-12 col-md-4 col-lg-3 col-form-label">Email Address</label>
                                                                <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                                                                    <input type="text" class="form-control" id="email" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputpassword" class="col-12 col-sm-12 col-md-4 col-lg-3 col-form-label">Current Password</label>
                                                                <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                                                                    <input type="password" class="form-control" id="inputpassword" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="newpassword" class="col-12 col-sm-12 col-md-4 col-lg-3 col-form-label">New Password</label>
                                                                <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                                                                    <input type="password" class="form-control" id="newpassword" required="">
                                                                    <button class="pass-show-btn" type="button">Show</button>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="c-password" class="col-12 col-sm-12 col-md-4 col-lg-3 col-form-label">Confirm Password</label>
                                                                <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                                                                    <input type="password" class="form-control" id="c-password" required="">
                                                                    <button class="pass-show-btn" type="button">Show</button>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="birth" class="col-12 col-sm-12 col-md-4 col-lg-3 col-form-label">Birthdate (Optional)</label>
                                                                <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                                                                    <input type="text" class="form-control" id="birth" placeholder="MM / DD / YYYY" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-check row p-0 mt-5">
                                                                <div class="col-12 col-sm-12 col-md-8 offset-md-4 col-lg-6 offset-lg-3">
                                                                    <div class="custom-checkbox">
                                                                        <input class="form-check-input" type="checkbox" id="offer">
                                                                        <span class="checkmark"></span>
                                                                        <label class="form-check-label" for="offer">Receive offers from our partners</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-check row p-0 mt-4">
                                                                <div class="col-12 col-sm-12 col-md-8 offset-md-4 col-lg-6 offset-lg-3">
                                                                    <div class="custom-checkbox">
                                                                        <input class="form-check-input" type="checkbox" id="subscribe" required="">
                                                                        <span class="checkmark"></span>
                                                                        <label class="form-check-label" for="subscribe">Sign up for our newsletter<br>Subscribe to our newsletters now and stay up-to-date with new collections, the latest lookbooks and exclusive offers..</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="register-box d-flex justify-content-end mt-half">
                                                                <button type="submit" class="btn btn-secondary">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div> <!-- end of tab-pane -->
                                            </div>
                                        </div>
                                    </div> <!-- end of row -->
                                </div> <!-- end of main-dashboard -->
                            </div> <!-- end of user-dashboard -->
                        </main> <!-- end of #primary -->
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of My Account Wrapper -->
    </div>
    <div class="modal fade" id="modal-lg" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Chi tiết đơn hàng # <b class="transaction-id"></b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" id="md-content">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                    <p>Thành tiền: <span id="md-total-order"></span></p>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@stop

@section('js')
    <script type="text/javascript">
        $('.js-cancel-transaction').click(function (event) {
            event.preventDefault();
            let tr = event.target.parentElement.parentElement;
            url = $(this).attr('href');
            $.ajax({
                url: url,
                type:'POST',
                data: {
                    _token : '{{ csrf_token() }}',
                }
            }).done(function(result) {
                if(result){
                    tr.innerHTML = result.html;
                }
            });
        })

        function viewOrder(event) {
            event.preventDefault();
            let id = event.target.getAttribute('data-id');
            let total = event.target.getAttribute('data-total');
            let status = event.target.getAttribute('data-status');
            $('.transaction-id').text(id);
            $.ajax({
                url: '{{ route('post.view.order') }}',
                type:'POST',
                data: {
                    _token : '{{ csrf_token() }}',
                    id : id,
                    status : status
                }
            }).done(function(result) {
                if(result) {
                    $('#md-content').html(result);
                    $('#md-total-order').html(total+' đ');
                }
            });
        }
    </script>
@stop
