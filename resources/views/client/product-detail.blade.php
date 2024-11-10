@extends('client.layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="category.html">Sản phẩm</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chi tiết</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- Image -->
            <div class="col-12 col-lg-6">
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <a href="" data-toggle="modal" data-target="#productModal">
                            <img class="img-fluid" src="{{ Storage::url($product->image) }}" />
                            <p class="text-center">Phóng to ảnh</p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Add to cart -->
            <div class="col-12 col-lg-6 add_to_cart_block">
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <p class="price">{{ $product->price }} VND</p>
                        {{-- <p class="price_discounted">149.90 $</p> --}}
                        <form method="get" action="cart.html">
                            <div class="form-group">
                                <label for="colors">Color</label>
                                <select class="custom-select" id="colors">
                                    <option selected>Chọn</option>
                                    <option value="1">Blue</option>
                                    <option value="2">Red</option>
                                    <option value="3">Green</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Quantity :</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                            data-type="minus" data-field="">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control" id="quantity" name="quantity" min="1"
                                        max="100" value="1">
                                    <div class="input-group-append">
                                        <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                            data-type="plus" data-field="">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <a href="cart.html" class="btn btn-danger btn-lg btn-block text-uppercase">
                                <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng
                            </a>
                        </form>
                        <div class="product_rassurance">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-truck fa-2x"></i><br />Giao hàng nhanh</li>
                                <li class="list-inline-item"><i class="fa fa-credit-card fa-2x"></i><br />Bảo mật
                                </li>
                                <li class="list-inline-item"><i class="fa fa-phone fa-2x"></i><br />0982084197
                                </li>
                            </ul>
                        </div>
                        <div class="reviews_product p-3 mb-2 ">
                            3 reviews
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            (4/5)
                            <a class="pull-right" href="#reviews">Xem tất cả đánh giá</a>
                        </div>
                        <div class="datasheet p-3 mb-2 bg-info text-white">
                            <a href="" class="text-white"><i class="fa fa-file-text"></i> Download DataSheet</a>
                        </div>

                        <a href=""
                        data-url="{{route('add.cart',['id' => $product->id])}}"
                        class="btn btn-danger add_to_cart btn-lg btn-block text-uppercase">
                            <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng
                        </a>
                    </form>
                    <div class="product_rassurance">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-truck fa-2x"></i><br />Giao hàng nhanh</li>
                            <li class="list-inline-item"><i class="fa fa-credit-card fa-2x"></i><br />Bảo mật
                            </li>
                            <li class="list-inline-item"><i class="fa fa-phone fa-2x"></i><br />0982084197
                            </li>
                        </ul>
                    </div>
                    <div class="reviews_product p-3 mb-2 ">
                        3 reviews
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        (4/5)
                        <a class="pull-right" href="#reviews">Xem tất cả đánh giá</a>
                    </div>
                    <div class="datasheet p-3 mb-2 bg-info text-white">
                        <a href="" class="text-white"><i class="fa fa-file-text"></i> Download DataSheet</a>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Description -->
            <div class="col-12">
                <div class="card border-light mb-3">
                    <div class="card-header bg-info text-white text-uppercase"><i class="fa fa-align-justify"></i>
                        Mô tả sản phẩm</div>
                    <div class="card-body">
                        <p class="card-text">
                            {{ $product->description }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- commemts -->
            <div class="col-12" id="commemts">
                <div class="card border-light mb-3">
                    <div class="card-header bg-warning text-white text-uppercase"><i class="fa fa-comment"></i> Đánh giá
                    </div>
                    <div class="card-body">
                        <div class="commemts">
                            @foreach ($product->comments as $comment)
                                <div class="review d-flex align-items-start mb-3">
                                    <!-- Hiển thị ảnh đại diện của người dùng -->
                                    <img src="{{ Storage::url($comment->user->image) }}" alt="User Avatar" class="rounded-circle mr-3" style="width: 50px; height: 50px;">
                                    <div>
                                        <strong>{{ $comment->user->name }}</strong>
                                        ({{ $comment->created_at->format('d-m-Y') }})
                                        :
                                        <!-- Hiển thị số sao đánh giá -->
                                        <div>
                                            @for ($i = 1; $i <= 5; $i++)
                                                <span
                                                    class="fa fa-star {{ $i <= $comment->rating ? 'text-warning' : 'text-muted' }}"></span>
                                            @endfor
                                        </div>
                                        <p>{{ $comment->content }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="comment-box text-center">
                        <h4>Để lại bình luận</h4>
                        @auth
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show mt-3 m-3" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <form action="{{ route('comments.store', $product) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="rating">Đánh giá:</label>
                                    <div class="rating">
                                        <input type="radio" name="rating" value="5" id="star5">
                                        <label for="star5">☆</label>
                                        <input type="radio" name="rating" value="4" id="star4">
                                        <label for="star4">☆</label>
                                        <input type="radio" name="rating" value="3" id="star3">
                                        <label for="star3">☆</label>
                                        <input type="radio" name="rating" value="2" id="star2">
                                        <label for="star2">☆</label>
                                        <input type="radio" name="rating" value="1" id="star1">
                                        <label for="star1">☆</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="content">Nội dung:</label>
                                    <textarea name="content" id="content" rows="4" class="form-control" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-success mt-2">Đăng bình luận</button>
                            </form>
                        @else
                            <p class="mt-3">Vui lòng <a href="{{ route('login') }}">đăng nhập</a> để bình luận.</p>
                        @endauth


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Same product -->
    <section class="same-product mt-5">
        <h3 class="same-product-title text-center">Sản phẩm cùng loại</h3>
        <!-- ============== COMPONENT SLIDER ITEMS SLICK  ============= -->
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel">
                        <div class="product-card">
                            <div class="product-badge text-danger">23% Off</div><a class="product-thumb" href="#"
                                data-abc="true"><img class="product-img" src="../access/images/items/1.jpg"
                                    alt="Product"></a>
                            <h3 class="product-title"><a href="#" data-abc="true">Microsoft Surface Pro 4</a></h3>
                            <h4 class="product-price"> <del>$444.99</del>$344.99 </h4>
                            <div class="product-buttons"> <button class="btn btn-outline-primary btn-sm">Add to
                                    Cart</button> </div>
                        </div>
                        <div class="product-card">
                            <div class="product-badge text-danger">25% Off</div><a class="product-thumb" href="#"
                                data-abc="true"><img class="product-img" src="../access/images/items/2.jpg"
                                    alt="Product"></a>
                            <h3 class="product-title"><a href="#" data-abc="true">Dell Inspiration 4</a></h3>
                            <h4 class="product-price"> <del>$544.99</del>$444.99 </h4>
                            <div class="product-buttons"> <button class="btn btn-outline-primary btn-sm">Add to
                                    Cart</button> </div>
                        </div>
                        <div class="product-card">
                            <div class="product-badge text-danger">28% Off</div><a class="product-thumb" href="#"
                                data-abc="true"><img class="product-img" src="../access/images/items/3.jpg"
                                    alt="Product"></a>
                            <h3 class="product-title"><a href="#" data-abc="true">Dell Xtreame 5</a></h3>
                            <h4 class="product-price"> <del>$244.99</del>$144.99 </h4>
                            <div class="product-buttons"> <button class="btn btn-outline-primary btn-sm">Add to
                                    Cart</button> </div>
                        </div>
                        <div class="product-card">
                            <div class="product-badge text-danger">48% Off</div><a class="product-thumb" href=""
                                data-abc="true"><img class="product-img" src="../access/images/items/4.jpg"
                                    alt="Product"></a>
                            <h3 class="product-title"><a href="" data-abc="true">HP Pro 4</a></h3>
                            <h4 class="product-price"> <del>$544.99</del>$344.99 </h4>
                            <div class="product-buttons"> <button class="btn btn-outline-primary btn-sm">Add to
                                    Cart</button> </div>
                        </div>
                        <div class="product-card">
                            <div class="product-badge text-danger">29% Off</div><a class="product-thumb" href="#"
                                data-abc="true"><img class="product-img" src="../access/images/items/5.jpg"
                                    alt="Product"></a>
                            <h3 class="product-title"><a href="#" data-abc="true">Microsoft surface 5</a></h3>
                            <h4 class="product-price"> <del>$644.99</del>$344.99 </h4>
                            <div class="product-buttons"> <button class="btn btn-outline-primary btn-sm">Add to
                                    Cart</button> </div>
                        </div>
                        <div class="product-card">
                            <div class="product-badge text-danger">29% Off</div><a class="product-thumb" href="#"
                                data-abc="true"><img class="product-img" src="../access/images/items/5.jpg"
                                    alt="Product"></a>
                            <h3 class="product-title"><a href="#" data-abc="true">Microsoft surface 5</a></h3>
                            <h4 class="product-price"> <del>$644.99</del>$344.99 </h4>
                            <div class="product-buttons"> <button class="btn btn-outline-primary btn-sm">Add to
                                    Cart</button> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- ============== COMPONENT SLIDER ITEMS SLICK .end // ============= -->
    </section>
@endsection
