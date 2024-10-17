<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUser extends Controller
{
    public function index()  {
        $users = User::all();
        return view('admin.user.index',compact('users'));
    }
    public function destroy($id) {
        $user = User::findOrFail($id);;
        $user->delete();
        return redirect()->route('admin.user.index');
    }

    public function updateRole(Request $request, $id)
    {
        // Tìm người dùng theo ID
        $user = User::findOrFail($id);

        // Lấy vai trò mới từ form
        $newRole = $request->input('role');

        // Kiểm tra vai trò hợp lệ (nếu cần)
        if (!in_array($newRole, ['admin', 'user'])) {
            return redirect()->back()->with('error', 'Invalid role selected.');
        }

        // Cập nhật vai trò
        $user->role = $newRole;
        $user->save();

        return redirect()->route('admin.user.index')->with('success', 'User role updated successfully.');
    }

}
