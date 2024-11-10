@extends('admin.layouts.master')
@section('content')
    @if (session('message'))
        <div class="alert bg-success text-light">
            {{ session('message') }}
        </div>
    @endif
    <h1>Quản lý liên hệ khách hàng</h1>
    <table class="table table-bordered table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Message</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->message }}</td>

                    <td class="d-flex">
                        <form action="{{ Route('admin.contact.delete', $contact) }}" method="post">
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
