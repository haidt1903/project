@extends('client.layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-3">
                <div class="card bg-light mb-3">
                    <form action="{{ route('search') }}" method="GET" class="pb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" name="keyword" placeholder="Tìm kiếm sản phẩm...">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                    <div class="card-header bg-secondary text-white text-uppercase"><i class="fa fa-list"></i> Danh mục
                    </div>
                    <ul class="list-group category_block">
                        @foreach ($categories as $category)
                            <li class="list-group-item"><a
                                    href="{{ route('filter.product', $category->id) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="card bg-light mb-3">
                    <div class="card-header bg-success text-white text-uppercase">Sản phẩm hot nhất</div>
                    <div class="card-body">
                        <img class="img-fluid" src="https://dummyimage.com/600x400/55595c/fff" />
                        <h5 class="card-title">Product title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p class="red text-center font-weight-bold">99.00 $</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-12 col-md-6 col-lg-4 mt-2">
                            <div class="card">
                                <img class="card-img-top" src="{{ Storage::url($product->image) }}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title"><a href="{{ route('detail.product', $product->id) }}"
                                            title="View Product">{{ $product->name }}</a>
                                    </h4>
                                    <div class="row">
                                        <div class="col">
                                            <p class="btn font-weight-bold btn-block">{{ $product->price }}VNĐ</p>
                                        </div>
                                        <div class="col">
                                                <div class="product">
                                                    <form action="{{ url('/cart/add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id"
                                                            value="{{ $product->id }}">
                                                        <input type="hidden" name="name" value="{{ $product->name }}">
                                                        <input type="hidden" name="price" value="{{ $product->price }}">
                                                        <input type="number" name="quantity" value="1" min="1"
                                                            class="quantity-input">
                                                        <button type="submit" class="add-to-cart btn btn-primary">Add to Cart</button>
                                                    </form>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
