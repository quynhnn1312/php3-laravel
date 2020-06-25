@extends('layout.master')
@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Danh sách thành viên</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Thành viên</li>
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
                    </div> &nbsp;
                    <button type="submit" class="btn btn-success"><i class="fas fa-search"></i> Search</button>
                </form>
                <div>
                    <a class="btn btn-outline-success" href="{{ route('get.create.user') }}"><i class="fas fa-plus"></i> Thêm mới</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Họ tên</th>
                            <th scope="col">Avatar</th>
                            <th width="30%" scope="col">Thông tin</th>
                            <th scope="col">Vai trò</th>
                            <th scope="col">Trạng Thái</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(isset($users))
                        @foreach($users as $key => $user)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>
                                    <img src="{{ isset($user->google_id) ? asset($user->avatar) : asset('storage/'. $user->avatar) }}" width="70px" alt="">
                                </td>
                                <td>
                                    <li><strong>Email :</strong> {{ $user->email }}</li>
                                    <li><strong>Số điện thoại :</strong> {{ $user->phone }}</li>
                                    <li><strong>Địa chỉ :</strong> {{ $user->address }}</li>
                                </td>
                                <td>{{ $user->role_id == 1 ? 'Thành viên' : 'Quản trị' }}</td>
                                <td>
                                    <a href="{{ route('get.action.user',['status',$user->id]) }}"
                                       class="badge {{ $user->getStatus($user->status)['class'] }}">
                                        <i class="fas {{ $user->getStatus($user->status)['icon'] }}"></i>
                                        {{ $user->getStatus($user->status)['name'] }}
                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-outline-info" href="{{ route('get.edit.user',$user->id) }}"><i class="fas fa-pencil-alt"></i> Cập nhật</a>
                                    <a class="btn btn-sm btn-outline-danger" onclick="deleteUser({{ $user->id }})" href="javascript:void(0)"><i class="far fa-trash-alt"></i> Xóa</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                <hr>
                <div class="paginate d-flex justify-content-center">
                    {{ isset($users) ? $users->links() : '' }}
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
@stop

@section('js')
    <script type="text/javascript">
        function deleteUser(id) {
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
                    window.location.href = `users/delete/${id}`
                }
            })
        }
    </script>
@endsection

