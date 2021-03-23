@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Thương hiệu</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Quản lý thương hiệu</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên thương hiệu</th>
                            <th>Logo</th>
                            <th>Miêu tả</th>
                            <th>
                                <a href="{{ route('brand.add') }}" class="btn btn-sm btn-success">Thêm mới</a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($brands as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                <img src="{{ $item->logo }}" width="100px">
                            </td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <a href="" class="btn btn-sm btn-primary">Sửa</a>
                                <a href="{{ route('brand.delete', ['id' => $item->id]) }}" class="btn btn-sm btn-danger">Xoá</a>
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