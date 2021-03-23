@extends('admin.layouts.main')

@section('content')
<h1>Thêm mới thương hiệu</h1>
<div class="card card-primary">
    <!-- form start -->
    <form action="" method="POST" role="form">
    @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1" class="font-weight-bold">Tên thương hiệu</label>
          <input type="text" class="form-control" name="name" placeholder="Tên thương hiệu" value="{{ old('name') }}">
            {{-- @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name')}}</span>
            @endif --}}
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="font-weight-bold">Logo</label>
            <input type="text" class="form-control" name="logo" placeholder="Logo" value="{{ old('logo') }}">
              {{-- @if ($errors->has('name'))
                      <span class="text-danger">{{ $errors->first('name')}}</span>
              @endif --}}
          </div>

        {{-- <div class="form-group">
          <label for="exampleInputFile" class="font-weight-bold">Logo</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text" id="">Upload</span>
            </div>
          </div>
        </div> --}}

        <div class="form-group">
            <label for="exampleInputPassword1" class="font-weight-bold">Mô tả</label>
            <input type="text" class="form-control" name="description" placeholder="Mô tả" value="{{ old('description') }}">
              {{-- @if ($errors->has('description'))
              <span class="text-danger">{{ $errors->first('description')}}</span>
              @endif --}}
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