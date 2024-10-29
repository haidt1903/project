<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::query()->latest('id')->paginate(4);
        return view('admin.products.index', compact('products'));
    }
    public function create()
    {
        $category = Category::all();
        return view('admin.products.create',compact('category'));
    }
    public function uploadFile(Request $request, $filename)
    {
        if ($request->hasFile($filename)) {
            return $request->file($filename)->store('images');
        }
        return null;
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'quantity' => ['required'],
            'price' => ['required'],
            'image' => ['nullable','image'],
            'description' => ['required'],
            'category_id' => ['required'],
        ]);
        $data['image'] = $this->uploadFile($request,'image');
        Product::query()->create($data);
        return redirect()->route('admin.product.index')->with('message','Thêm thành công');
    }
    public function delete(Product $product)  {
        if ($product->image) {
            Storage::delete($product->image);
        }
        $product->delete();
        return redirect()->route('admin.product.index')->with('message','Xóa thành công');

    }
    public function edit(Product $product) {
        $category = Category::all();
        return view('admin.products.edit',compact('product','category'));
    }
    public function update(Request $request,Product $product) {
        $data = $request->validate([
            'name' => ['required'],
            'quantity' => ['required'],
            'price' => ['required'],
            'image' => ['nullable','image'],
            'description' => ['required'],
            'category_id' => ['required'],
        ]);
        if ($request->hasFile('image')) {
            Storage::delete($product->image);
            $data['image'] = $this->uploadFile($request,'image');
        }
        $product->update($data);
        return redirect()->route('admin.product.index')->with('message','Sửa thành công');
    }
}
