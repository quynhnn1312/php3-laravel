@extends('layout.master')
@section('breadcrumb')
    <style>
        .dropdown-menu.show{
            left: -60% !important;
            max-width: 20px;
            font-size: 14px;
        }
    </style>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Danh sách đơn hàng</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Đơn hàng</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@stop
@section('content')
    <section class="content">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <form class="form-inline" method="get" action="">
                    <div class="form-group">
                        <input style="border-radius: 0;width: 150px" type="text" name="id" value="{{ \Request('id') }}" class="form-control" placeholder="ID">
                    </div> &nbsp;&nbsp;
                    <div class="form-group">
                        <input style="border-radius: 0" type="text" name="email" value="{{ \Request('email') }}" class="form-control" placeholder="Email ...">
                    </div> &nbsp;&nbsp;
                    <div class="form-group">
                        <select style="border-radius: 0" name="type" id="" class="form-control">
                            <option value="">Phân loại khách</option>
                            <option value="1" {{ Request::get('type') == 1 ? "selected='selected'" : "" }}>Thành viên</option>
                            <option value="0" {{ Request::get('type') === 0 ? "selected='selected'" : "" }}>Khách</option>
                        </select>
                    </div> &nbsp;&nbsp&nbsp;
                    <div class="form-group">
                        <select style="border-radius: 0" name="status" id="" class="form-control">
                            <option value="">Trạng thái đơn</option>
                            <option value="0" {{ Request::get('status') === 0 ? "selected='selected'" : "" }}>Tiếp nhận</option>
                            <option value="1" {{ Request::get('status') == 1 ? "selected='selected'" : "" }}>Đang vận chuyển</option>
                            <option value="2" {{ Request::get('status') == 2 ? "selected='selected'" : "" }}>Đã bàn giao</option>
                            <option value="-1" {{ Request::get('status') == -1 ? "selected='selected'" : "" }}>Huỷ bỏ</option>
                        </select>
                    </div> &nbsp;&nbsp&nbsp;
                    <div class="form-group">
                        Lọc giá:
                        <input style="border-radius: 0;width: 100px" type="text" oninput="numberWithCommas(this)" name="price_min" value="{{ \Request('price_min') }}" class="form-control" placeholder="100.000...đ"><i class="fas fa-long-arrow-alt-right"></i>
                        <input style="border-radius: 0;width: 100px" type="text" oninput="numberWithCommas(this)" name="price_max" value="{{ \Request('price_max') }}" class="form-control" placeholder="500.000...đ">
                    </div> &nbsp;&nbsp&nbsp;

                    <button type="submit" class="btn btn-success"><i class="fas fa-search"></i> Search</button>&nbsp;
                    <button type="submit" name="export" value="true" class="btn btn-info">
                        <i class="fa fa-save"></i> Export
                    </button>
                </form>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">ID</th>
                        <th style="width: 40%" scope="col">Thông tin</th>
                        <th scope="col">Tổng tiền</th>
                        <th scope="col">Tài khoản</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Ngày đặt</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($transactions))
                        @foreach($transactions as $key => $transaction)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $transaction->id }}</td>
                                <td>
                                    <ul>
                                        <li>Họ tên: {{ $transaction->name }}</li>
                                        <li>Email: {{ $transaction->email }}</li>
                                        <li>SĐT: {{ $transaction->phone }}</li>
                                        <li>Địa chỉ: {{ $transaction->adress }}</li>
                                    </ul>
                                </td>
                                <td id="total-transaction-{{ $transaction->id }}">{{ number_format($transaction->total,0,',','.') }}đ</td>
                                <td>
                                    @if($transaction->user_id == 0)
                                        <span class="badge badge-secondary">Khách</span>
                                    @else
                                        <span class="badge badge-success">Thành viên</span>
                                    @endif
                                </td>
                                <td>
                                    <span class="badge {{ $transaction->getStatus($transaction->status)['class'] }}">
                                        {{ $transaction->getStatus($transaction->status)['name'] }}
                                    </span>
                                </td>
                                <td>{{ $transaction->created_at }}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-info show-detail-transaction" data-id="{{ $transaction->id }}" data-total='{{number_format($transaction->total,0,',','.')}}' data-toggle="modal" data-target="#modal-lg" >
                                        <i style="font-size: 12px" class="fas fa-eye"></i> View
                                    </a>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-success">Action</button>
                                        <button type="button" class="btn btn-sm btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('get.action.transaction',['process', $transaction->id]) }}"><i class="fa fa-ban"></i> &nbsp; Đang bàn giao</a>
                                            <a class="dropdown-item" href="{{ route('get.action.transaction',['success', $transaction->id]) }}"><i class="fa fa-ban"></i> &nbsp; Đã bàn giao</a>
                                            <a class="dropdown-item" href="{{ route('get.action.transaction',['cancel', $transaction->id]) }}"><i class="fa fa-ban"></i> &nbsp; Hủy</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" onclick="deleteTransaction(event)" href="{{ route('get.delete.transaction',$transaction->id) }}"><i class="fas fa-trash-alt"></i> &nbsp; Xóa</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                <hr>
                <div class="paginate d-flex justify-content-center">
                    {{ isset($transactions) ? $transactions->links() : '' }}
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
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
    </section>
@stop
@section('js')
    <script type="text/javascript">
        function deleteTransaction(event) {
            event.preventDefault();
            var url = event.target.getAttribute("href");
            Swal.fire({
                title: 'Bạn có chắc muốn xóa dữ liệu ?',
                text: "Vui lòng chọn ok hoặc cancel !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ok'
            }).then((result) => {
                if (result.value) {
                    window.location.href = url
                }
            })
        }

        $(function () {
            $('.show-detail-transaction').click(function (event) {
                event.preventDefault();
                let $this = $(this);
                let id = $this.attr('data-id');
                let total = $this.attr('data-total');
                $('.transaction-id').text(id);
                $.ajax({
                    url: '{{ route('post.detail.transaction') }}',
                    type:'POST',
                    data: {
                        _token : '{{ csrf_token() }}',
                        id : id,
                    }
                }).done(function(result) {
                    if(result) {
                        $('#md-content').html(result);
                        $('#md-total-order').html(total+' đ');
                    }
                });
            })
        })

        function numberWithCommas(x) {
            let res = x.value.replace(/[. ]+/g, "").trim();
            let num = res.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            x.value = num;
        }

    </script>
@endsection

