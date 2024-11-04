@extends('admin.layouts.master')
@section('content')
    @if (session('message'))
        <div class="alert bg-success text-light">
            {{ session('message') }}
        </div>
    @endif
    <h1>Quản lý sản phẩm</h1>
    <a href="{{ Route('admin.product.create') }}" class="btn btn-primary mb-3">Add</a>
    <table class="table table-bordered table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Description</th>
                <th scope="col">Name Category</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>
                        <img src="{{ Storage::url($product->image) }}" width="200px" alt="">
                    </td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->Category->name }}</td>
                    <td class="d-flex">
                        <a href="{{ Route('admin.product.edit', $product->id) }}" class="btn btn-success mx-2">Edit</a>
                        <form action="{{ Route('admin.product.delete', $product->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Có chắc chắn xóa chứ?')" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products->links() }}
@endsection
