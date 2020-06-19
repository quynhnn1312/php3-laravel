<div class="card card-primary">
    <div class="card-header">
        @if(isset($product))
            <h3 class="card-title">Cập nhật sản phẩm</h3>
        @else
            <h3 class="card-title">Thêm mới sản phẩm</h3>
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
                        <label for="name">Tên sản phẩm:</label>
                        <input type="text" name="name" value="{{ old('name', isset($product->name) ? $product->name : '') }}" class="form-control @error('name') is-invalid @enderror" id="email">
                        @if($errors->has('name'))
                            <span class="error-text">
                                {{$errors->first('name')}}
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="name">giá:</label>
                        <input type="number" value="{{ old('price', isset($product->price) ? $product->price : '') }}" class="form-control @error('price') is-invalid @enderror"  name="price" id="pwd">
                        @if($errors->has('price'))
                            <span class="error-text">
                                {{$errors->first('price')}}
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="name">% giảm giá:</label>
                        <input type="number" value="{{ old('sale', isset($product->sale) ? $product->sale : '') }}" class="form-control @error('sale') is-invalid @enderror"  name="sale" id="pwd">
                        @if($errors->has('sale'))
                            <span class="error-text">
                                {{$errors->first('sale')}}
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="name">Số lượng:</label>
                        <input type="number" value="{{ old('count', isset($product->count) ? $product->count : '') }}" class="form-control @error('count') is-invalid @enderror"  name="count" id="pwd">
                        @if($errors->has('count'))
                            <span class="error-text">
                                {{$errors->first('count')}}
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="name">Mô tả ngắn:</label>
                        <textarea class="form-control @error('short_desc') is-invalid @enderror"  rows="3" name="short_desc" cols="30"  placeholder="Mô tả sản phẩm ...">{{ old('short_desc',isset($product->short_desc) ? $product->short_desc : '') }}</textarea>
                        @if($errors->has('short_desc'))
                            <span class="error-text">
                                {{$errors->first('short_desc')}}
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="name">Chi tiết:</label>
                        <textarea name="detail" class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;">{{ old('detail',isset($product->detail) ? $product->detail : '') }}</textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group text-center mt-5 mb-4">
                        <img src="{{ isset($product->image) ? asset('storage/'.$product->image) : asset('images/no_image.jpg') }}" id="output" class="img img-thumbnail" width="60%" alt="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Ảnh sản phẩm:</label>
                        <div class="custom-file">
                            <input type="file" name="image" id="input" class="form-control @error('image') is-invalid @enderror">
                            @if($errors->has('image'))
                                <span class="error-text">
                                    {{$errors->first('image')}}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">Danh mục:</label>
                        <select class="form-control @error('cate_id') is-invalid @enderror" name="cate_id">
                            <option value="">----- Danh mục sản phẩm -----</option>
                            @if($categories)
                                @foreach($categories as $cate)
                                    <option value="{{ $cate->id }}" {{ old('cate_id', isset( $product->cate_id) ? $product->cate_id : '') == $cate->id  ? "selected='selected'" : " " }}  >{{ $cate->cate_name }}</option>
                                @endforeach
                            @endif
                        </select>
                        @if($errors->has('cate_id'))
                            <span class="error-text">
                                {{$errors->first('cate_id')}}
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">{{ isset($product) ? 'Cập nhật' : 'Thêm mới' }}</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </div>
    </form>
</div>

@section('js')
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#output').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#input").change(function() {
            readURL(this);
        });
    </script>
@endsection
