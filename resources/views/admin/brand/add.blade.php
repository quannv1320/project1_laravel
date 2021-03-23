@extends('admin.layouts.main')

@section('content')
<h1>Thêm mới thương hiệu</h1>
<div class="card card-primary">
    <!-- form start -->
    <form action="" method="POST" role="form" enctype="multipart/form-data">
    @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1" class="font-weight-bold">Tên thương hiệu</label>
          <input type="text" class="form-control" name="name" placeholder="Tên thương hiệu" value="{{ old('name') }}">
            @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name')}}</span>
            @endif
        </div>

        <div class="form-group">
          <label for="exampleInputFile" class="font-weight-bold">Logo</label>
          <input type="file" class="form-control" name="logo"  id="exampleInputFile">
        </div>
            @if ($errors->has('logo'))
                    <span class="text-danger">{{ $errors->first('logo')}}</span>
            @endif

        <div class="form-group">
            <label for="exampleInputPassword1" class="font-weight-bold">Mô tả</label>
            <input type="text" class="form-control" name="description" placeholder="Mô tả" value="{{ old('description') }}">
              @if ($errors->has('description'))
              <span class="text-danger">{{ $errors->first('description')}}</span>
              @endif
          </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Tạo mới</button>
        <a href="{{ route('brand.index') }}" class="btn btn-danger">Huỷ</a>
      </div>
    </form>
  </div>
@endsection