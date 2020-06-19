<style>
    .form-group{
        position: relative;
    }
    .form-group span.eye-password{
        position: absolute;
        top: 40px;
        right: 15px;
        cursor: pointer;
    }
</style>
<div class="col-md-12">
    <!-- jquery validation -->
    <div class="card card-primary">
        <div class="card-header">
            @if(isset($user))
                <h3 class="card-title">Cập nhật tài khoản</h3>
            @else
                <h3 class="card-title">Thêm mới tài khoản</h3>
            @endif
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="" method="post" id="quickForm" enctype="multipart/form-data" novalidate="novalidate">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name">Họ tên:</label>
                            <input type="text" name="name" placeholder="Nhập họ tên" value="{{ old('name', isset($user->name) ? $user->name : '') }}" class="form-control @error('name') is-invalid @enderror">
                            @if($errors->has('name'))
                                <span class="error-text">
                                    {{$errors->first('name')}}
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email"  placeholder="Nhập email" value="{{ old('email',isset($user->email) ? $user->email : '') }}" class="form-control @error('email') is-invalid @enderror">
                            @if($errors->has('email'))
                                <span class="error-text">
                                    {{$errors->first('email')}}
                                </span>
                            @endif
                        </div>
                        @isset($user)
                            <div class="form-group">
                                <label for="email">Mật khẩu cũ:</label>
                                <input data="1" type="password" name="old_password" placeholder="Nhập mật khẩu cũ" value="{{ old('password') }}" class="form-control @error('old_password') is-invalid @enderror">
                                <span onclick="eyePassword(event)" class="eye-password"><i class="fas fa-eye"></i></span>
                                @if(Session::has('error-old_password'))
                                    <span class="error-text">
                                        {{Session::get('error-old_password')}}
                                    </span>
                                @endif
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="email">Mật khẩu mới:</label>
                            <input type="password" name="password" placeholder="Nhập mật khẩu mới" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror">
                            <span onclick="eyePassword(event)" class="eye-password"><i class="fas fa-eye"></i></span>
                            @if($errors->has('password'))
                                <span class="error-text">
                                    {{$errors->first('password')}}
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">Nhập lại Mật khẩu:</label>
                            <input type="password" placeholder="Nhập lại mật khẩu" name="password_confirmation" value="{{ old('confirm-password') }}" class="form-control @error('confirm-password') is-invalid @enderror">
                            <span onclick="eyePassword(event)" class="eye-password"><i class="fas fa-eye"></i></span>
                        </div>
                        <div class="form-group">
                            <label for="name">Số điện thoại:</label>
                            <input type="text" name="phone" placeholder="Nhập số điện thoại" value="{{ old('phone',isset($user->phone) ? $user->phone : '')}}" class="form-control @error('phone') is-invalid @enderror">
                            @if($errors->has('phone'))
                                <span class="error-text">
                                    {{$errors->first('phone')}}
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">Địa chỉ:</label>
                            <input type="email" name="address"  placeholder="Nhập địa chỉ" value="{{ old('address', isset($user->address) ? $user->address : '') }}" class="form-control @error('address') is-invalid @enderror">
                            @if($errors->has('address'))
                                <span class="error-text">
                                    {{$errors->first('address')}}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group text-center mt-3">
                            <img src="{{ isset($user->avatar) ? asset('storage/'.$user->avatar) : asset('storage/users/user.png') }}" id="output" class="img img-thumbnail" width="40%" alt="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Avatar:</label>
                            <div class="custom-file">
                                <input type="file" name="avatar" id="input" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Vai trò:</label>
                            <select class="form-control @error('role_id') is-invalid @enderror" name="role_id">
                                <option value="">----- Vai trò tài khoản -----</option>
                                <option
                                    @if(isset($user))
                                        {{$user->role_id == 1 ? "selected='selected'" : '' }}
                                    @endif
                                value="1">Thành viên</option>
                                <option
                                    @if(isset($user))
                                    {{$user->role_id == 2 ? "selected='selected'" : '' }}
                                    @endif
                                value="2">Quản trị</option>
                            </select>
                            @if($errors->has('role_id'))
                                <span class="error-text">
                                    {{$errors->first('role_id')}}
                                </span>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"> {{ isset($user) ? 'Cập nhật' : 'Thêm mới' }} </button> &nbsp;
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>
@section('js')
    <script>
        function eyePassword (event) {
            let type =event.target.parentElement.parentElement.querySelector('input');
            if( type.getAttribute('type') == 'password'){
                type.setAttribute('type','text');
                console.log(event.target.setAttribute('class','fas fa-eye-slash'))
            }else{
                type.setAttribute('type','password');
                console.log(event.target.setAttribute('class','fas fa-eye'))
            }
        }
    </script>
@stop
