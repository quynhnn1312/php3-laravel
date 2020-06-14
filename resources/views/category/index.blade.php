@extends('layout.master')
@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Danh sách danh mục</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh mục</li>
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
                        <input type="text" name="keyword" value="{{ \Request('keyword') }}" class="form-control" placeholder="Nhập tên tìm kiếm ...">
                    </div> &nbsp;
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                </form>
                <div>
                    <a class="btn btn-outline-success" href="{{ route('get.add.cate') }}"><i class="fas fa-plus"></i> Thêm mới</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên danh mục</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">
                            Thao tác
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($categories))
                        @foreach($categories as $cate)
                            <tr>
                                <td>{{ $cate->id }}</td>
                                <td>{{ $cate->cate_name }}</td>
                                <td>{{ $cate->slug }}</td>
                                <td>
                                    @if($cate->show_menu == 1)
                                        <button type="button" class="btn bg-gradient-success btn-xs">Hiển thị</button>
                                    @else
                                        <button type="button" class="btn bg-gradient-danger btn-xs">Ẩn</button>
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-outline-info" href="{{ route('get.edit.cate', $cate->id) }}"><i class="fas fa-pencil-alt"></i> Cập nhật</a>
                                    <a class="btn btn-sm btn-outline-danger" onclick="deleteCate({{ $cate->id }})" href="javascript:void(0)"><i class="far fa-trash-alt"></i> Xóa</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table><hr>
                <div class="paginate d-flex justify-content-center">
                    {{ $categories->links() }}
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
@stop

@section('js')
    <script type="text/javascript">
        function deleteCate(id) {
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
                    window.location.href = `categories/${id}/remove`
                }
            })
        }
    </script>
@endsection
