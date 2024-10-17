@extends('admin.layouts.master')
@section('content')
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Stt</th>
                    <th>UserName</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Avatar</th>
                    <th>Role</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->fullname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <img src="{{ Storage::url($user->image) }}" width="200px" alt="">
                        </td>
                        <td>{{ $user->role }}</td>
                        <td class="d-flex">
                            <form action="{{ route('admin.users.updateRole', $user->id) }}" method="POST">
                                @csrf
                                <select name="role" class="form-select">
                                    <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User
                                    </option>
                                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin
                                    </option>
                                </select>
                                <button type="submit" class="btn btn-primary">Update Role</button>
                            </form>
                                @if ($user->id == Auth::user()->id)
                                    <form action="{{ route('admin.user.delete', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button hidden class="btn btn-danger"
                                            onclick="confirm('Có chắc xóa không')">Xóa</button>
                                    </form>
                                @else
                                    <form action="{{ route('admin.user.delete', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"
                                            onclick="confirm('Có chắc xóa không')">Xóa</button>
                                    </form>
                                @endif

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection