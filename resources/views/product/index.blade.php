@extends('layout.master')
@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Danh sách sản phẩm</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Sản phẩm</li>
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
                        <input style="border-radius: 0" type="text" name="keyword" value="{{ \Request('keyword') }}" class="form-control" placeholder="Nhập tên tìm kiếm ...">
                    </div>
                    &nbsp;
                    <div class="form-group">
                        <select name="key_cate" style="border-radius: 0" id="" class="form-control">
                            <option value="">Danh mục</option>
                            @if(isset($cates))
                                @foreach($cates as $cate)
                                    <option value="{{ $cate->id }}" {{ \Request::get('key_cate') == $cate->id ? "selected='selected'" : "" }}>{{ $cate->cate_name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div> &nbsp;&nbsp;
                    <button type="submit" class="btn btn-success"><i class="fas fa-search"></i> Search</button>
                </form>
                 <div>
                    <a class="btn btn-outline-success" href="{{ route('get.create.product') }}"><i class="fas fa-plus"></i> Thêm mới</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Danh mục</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">
                            Thao tác
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($products))
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ isset($product->category->cate_name) ? $product->category->cate_name : '[N/A]'  }}</td>
                                <td>
                                    <img width="100px" src="{{ asset('storage/'.$product->image) }}" alt="">
                                </td>
                                <td>
                                    <del>{{ number_format($product->price,0,',','.') }}đ</del>
                                    <p>{{ number_format($product->price * (100 - $product->sale)/100 ,0,',','.') }}đ</p>
                                </td>
                                <td>
                                    {{ $product->count }}
                                </td>
                                <td>
                                    <a href="{{ route('get.action.product',['status',$product->id]) }}"
                                       class="badge {{ $product->getStatus($product->status)['class'] }}">
                                        <i class="fas {{ $product->getStatus($product->status)['icon'] }}"></i>
                                        {{ $product->getStatus($product->status)['name'] }}
                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-outline-info" href="{{ route('get.edit.product',$product->id) }}"><i class="fas fa-pencil-alt"></i> Cập nhật</a>
                                    <a class="btn btn-sm btn-outline-danger" onclick="deleteCate(event)" href="{{ route('get.action.product', ['delete',$product->id]) }}"><i class="far fa-trash-alt"></i> Xóa</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                <hr>
                <div class="paginate d-flex justify-content-center">
                    {{ isset($products) ? $products->links() : '' }}
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
@stop

@section('js')
    <script type="text/javascript">
        function deleteCate(event) {
            event.preventDefault();
            var url = event.target.getAttribute("href");
            Swal.fire({
                title: 'Bạn có chắc muốn xóa?',
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
    </script>
@endsection

