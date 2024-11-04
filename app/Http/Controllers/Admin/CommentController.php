<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $data = Comment::query()->latest('id')->paginate(5);
        return view('admin.comments.index', compact('data'));
    }

    public function delete(Comment $comment)  {
        $comment->delete();
        return redirect()->route('admin.comments.index')->with('message','Xóa thành công');

    }
}
