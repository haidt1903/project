@extends('admin.layouts.master')
@section('content')
<form method="POST" action="{{Route('admin.category.update',$category->id)}}">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="text" class="form-control" value="{{$category->name}}" name="name">
    </div>
    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection