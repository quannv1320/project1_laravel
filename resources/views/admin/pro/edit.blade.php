@extends('admin.layouts.main')

@section('content')
<h1>Sửa sản phẩm</h1>
<div class="card card-primary">
    <!-- form start -->
    <form action="" method="POST" role="form" enctype="multipart/form-data">
    @csrf
      <div class="card-body">
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="exampleInputEmail1" class="font-weight-bold">Tên sản phẩm</label>
              <input type="text" class="form-control" name="name" placeholder="Tên sản phẩm" value="{{ old('name', $oldPro->name) }}">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name')}}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" class="font-weight-bold">Ảnh sản phẩm</label>
                <input type="file" class="form-control" name="image" value="{{ old('image', $oldPro->image) }}">
                  @if ($errors->has('image'))
                      <span class="text-danger">{{ $errors->first('image')}}</span>
                  @endif
            </div>
            <div class="form-group">
                <label for="inputPassword4" class="font-weight-bold">Danh mục</label>
                  <select name="cate_id" class="custom-select">
                      @foreach ($categories as $cate)
                            <option value="{{$cate->id}}" {{$oldPro->cate_id == $cate->id ? "selected" : ""}}>{{$cate->name}}</option>
                      @endforeach
                  </select>
            </div>
            <div class="form-group">
              <label for="inputPassword4" class="font-weight-bold">Thương hiệu</label>
                <select name="brand_id" class="custom-select">
                    @foreach ($brands as $brand)
                            <option value="{{$brand->id}}" {{$oldPro->brand_id == $brand->id ? "selected" : ""}}>{{$brand->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1" class="font-weight-bold">Giá sản phẩm</label>
              <input type="text" class="form-control" name="price" placeholder="Giá sản phẩm" value="{{ old('price', $oldPro->price) }}">
                @if ($errors->has('price'))
                    <span class="text-danger">{{ $errors->first('price')}}</span>
                @endif
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="exampleInputEmail1" class="font-weight-bold">Số lượng</label>
              <input type="text" class="form-control" name="quantity" placeholder="Số lượng sản phẩm" value="{{ old('quantity', $oldPro->quantity) }}">
                @if ($errors->has('quantity'))
                    <span class="text-danger">{{ $errors->first('quantity')}}</span>
                @endif
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1" class="font-weight-bold">Miêu tả ngắn</label>
              <input type="text" class="form-control" name="short_desc" placeholder="Giá sản phẩm" value="{{ old('short_desc', $oldPro->short_desc) }}">
                @if ($errors->has('short_desc'))
                    <span class="text-danger">{{ $errors->first('short_desc')}}</span>
                @endif
            </div>
            <div class="form-group">
              <label for="inputAddress2" class="font-weight-bold">Chi tiết sản phẩm</label>
              <textarea name="detail" id="editor" rows="10" class="form-control">{{ old('detail', $oldPro->detail) }}</textarea>
              @if ($errors->has('detail'))
                  <span class="text-danger">{{ $errors->first('detail')}}</span>
              @endif
          </div>
          </div>
        </div>

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('pro.index') }}" class="btn btn-danger">Huỷ</a>
      </div>
    </form>
  </div>
@endsection

@section('page-script')
<script>
  var editor_config = {
    path_absolute : "/",
    selector: '#editor',
    relative_urls: false,
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table directionality",
      "emoticons template paste textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    file_picker_callback : function(callback, value, meta) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
      if (meta.filetype == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.openUrl({
        url : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no",
        onMessage: (api, message) => {
          callback(message.content);
        }
      });
    }
  };

  tinymce.init(editor_config);
</script>
@endsection