<div class="col-md-12">
    <!-- jquery validation -->
    <div class="card card-primary">
        <div class="card-header">
            @if(isset($category))
                <h3 class="card-title">Cập nhật danh mục</h3>
            @else
                <h3 class="card-title">Thêm mới danh mục</h3>
            @endif
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="" method="post" id="quickForm" novalidate="novalidate">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Tên danh mục:</label>
                    <input type="text" name="cate_name" value="{{ old('cate_name', isset($category->cate_name) ? $category->cate_name : '' ) }}" class="form-control @error('cate_name') is-invalid @enderror" id="email">
                    @if($errors->has('cate_name'))
                        <span class="error-text">
                            {{$errors->first('cate_name')}}
                        </span>
                    @endif
                </div>
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" name="show_menu" {{ isset($category->show_menu) ? $category->show_menu == 1 ? 'checked' : '' : "" }} id="customCheckbox2">
                    <label for="customCheckbox2" class="custom-control-label">Hiển thị</label>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"> {{ isset($category) ? 'Cập nhật' : 'Thêm mới' }} </button> &nbsp;
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>
