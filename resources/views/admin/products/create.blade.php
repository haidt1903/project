@extends('admin.layouts.master')
@section('content')
<form method="POST" action="{{Route('admin.product.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="text" class="form-control" name="name">
    </div>
    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror
    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="file" class="form-control" name="image">
      </div>
      @error('image')
          <span class="text-danger">{{$message}}</span>
      @enderror
    <br>
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="number" class="form-control" name="price">
      </div>
      @error('price')
          <span class="text-danger">{{$message}}</span>
      @enderror
      <div class="mb-3">
        <label class="form-label">Quantity</label>
        <input type="number" class="form-control" name="quantity">
      </div>
      @error('quantity')
          <span class="text-danger">{{$message}}</span>
      @enderror
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
      </div>
      @error('description')
          <span class="text-danger">{{$message}}</span>
      @enderror
      <div class="mb-3">
        <label class="form-label">Category</label>
        <select class="form-select" name="category_id">
          @foreach ($category as $cate)
          <option value="{{$cate->id}}">{{$cate->name}}</option>
          @endforeach
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection