<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('admin.categories.index',compact('categories'));
    }
    public function create() {
        return view('admin.categories.create');
    }
    public function store(Request $request) {
        $data = $request->validate([
            'name'=> ['required'],
        ]);
        Category::query()->create($data);
        return redirect()->route('admin.category.index')->with('message','Thêm thành công');
    }
    public function edit(Category $category) {
        return view('admin.categories.edit',compact('category'));
    }
    public function update(Request $request,Category $category) {
        $data = $request->validate([
            'name'=> ['required'],
        ]);
        $category->update($data);
        return redirect()->route('admin.category.index')->with('message','Sửa thành công');
    }
    public function delete(Category $category) {
        $category->delete();
        return redirect()->route('admin.category.index')->with('message','Xóa thành công');
        
    }
}
