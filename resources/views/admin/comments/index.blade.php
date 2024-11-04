@extends('admin.layouts.master')
@section('content')
    @if (session('message'))
        <div class="alert bg-success text-light">
            {{ session('message') }}
        </div>
    @endif
    <h1>Quản lý bình luận</h1>
    <table class="table table-bordered table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">User name</th>
                <th scope="col">Product name</th>
                <th scope="col">User photo</th>
                <th scope="col">Comment content</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $comment)
                <tr>
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->user->username }}</td>
                    <td>{{ $comment->product->name }}</td>
                    <td>
                        <img src="{{ Storage::url($comment->user->image) }}" alt="User Avatar" class="rounded-circle mr-3" style="width: 50px; height: 50px;">
                    </td>
                    <td>{{ $comment->content }}</td>

                    <td class="d-flex">
                        <form action="{{ Route('admin.comments.delete', $comment) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Có chắc chắn xóa chứ?')"
                                class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
