@extends('admin.layouts.master')
@section('content')
    @if (session('message'))
        <div class="alert bg-success text-light">
            {{ session('message') }}
        </div>
    @endif
    <h1>Quản lý danh mục sản phẩm</h1>
    <a href="{{ Route('admin.category.create') }}" class="btn btn-primary mb-3">Add</a>
    <table class="table table-bordered table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $cate)
                <tr>
                    <td>{{ $cate->id }}</td>
                    <td>{{ $cate->name }}</td>
                    <td class="d-flex">
                        <a href="{{ Route('admin.category.edit', $cate->id) }}" class="btn btn-success mx-2">Edit</a>
                        <form action="{{ Route('admin.category.delete', $cate->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Có chắc chắn xóa chứ?')" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
