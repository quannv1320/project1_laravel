@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h1 mb-2 text-gray-800">Sản phẩm</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Sản phẩm</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Ảnh</th>
                            <th>Danh mục</th>
                            <th>Thương hiệu</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>
                                <a href="{{ route('pro.add') }}" class="btn btn-sm btn-success">Thêm mới</a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>
                                <img src="{{ asset($item->image) }}" width="100" alt="image_err">
                            </td>
                            <td>{{ $item->category->name }}</td>
                            <td>
                                <img src="{{ asset($item->brand->logo) }}" width="70">
                            </td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>
                                <a href="{{ route('pro.detail', ['id' => $item->id]) }}" class="btn btn-sm btn-info">Chi tiết</a>
                                <a href="{{ route('pro.edit', ['id' => $item->id]) }}" class="btn btn-sm btn-primary">Sửa</a>
                                <a href="{{ route('pro.delete', ['id' => $item->id]) }}" class="btn btn-sm btn-danger">Xoá</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection