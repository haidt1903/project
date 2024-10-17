@extends('client.layouts.master')
@section('content')
    <section class="slider">
        <div id="carousel1_indicator" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel1_indicator" data-slide-to="0" class="active"></li>
                <li data-target="#carousel1_indicator" data-slide-to="1"></li>
                <li data-target="#carousel1_indicator" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/content/images/banners/1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/content/images/banners/2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/content/images/banners/3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel1_indicator" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel1_indicator" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- Special  -->
    <section class="section-specials padding-y border-bottom mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <figure class="itemside">
                        <div class="aside">
                            <span class="icon-sm rounded-circle bg-primary">
                                <i class="fa fa-money-bill-alt white"></i>
                            </span>
                        </div>
                        <figcaption class="info">
                            <h6 class="title">Giá cả hợp lý</h6>
                            <p class="text-muted">Chúng tôi cam kết cung cấp sản phẩm giá cả hợp lý </p>
                        </figcaption>
                    </figure> <!-- iconbox // -->
                </div><!-- col // -->
                <div class="col-md-4">
                    <figure class="itemside">
                        <div class="aside">
                            <span class="icon-sm rounded-circle bg-danger">
                                <i class="fa fa-comment-dots white"></i>
                            </span>
                        </div>
                        <figcaption class="info">
                            <h6 class="title">Hỗ trợ khách hàng 24/7 </h6>
                            <p class="text-muted">Luôn luôn sẵn sàng phục vụ khách hàng bất kể thời gian nào </p>
                        </figcaption>
                    </figure> <!-- iconbox // -->
                </div><!-- col // -->
                <div class="col-md-4">
                    <figure class="itemside">
                        <div class="aside">
                            <span class="icon-sm rounded-circle bg-success">
                                <i class="fa fa-truck white"></i>
                            </span>
                        </div>
                        <figcaption class="info">
                            <h6 class="title">Chuyển phát nhanh</h6>
                            <p class="text-muted">Giao hàng thần tốc - Giao hàng trong vòng 24h</p>
                        </figcaption>
                    </figure> <!-- iconbox // -->
                </div><!-- col // -->
            </div> <!-- row.// -->

        </div> <!-- container.// -->
    </section>

    <!-- Sản phẩm mởi nhất -->
    <section class="last-product">
        <div class="container mt-3">
            <div class="row">
                <div class="col-sm">
                    <div class="card">
                        <div class="card-header bg-success text-white text-uppercase text-center">
                            <i class="fa fa-star"></i> Sản phẩm mới nhất
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 mt-3">
                                    <div class="card">
                                        <img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title text-center"><a href="product-detail.html"
                                                    title="View Product">Product
                                                    title</a></h4>

                                            <div class="row">
                                                <div class="col">
                                                    <p class="btn text font-weight-bold btn-block">99.00 $</p>
                                                </div>
                                                <div class="col">
                                                    <a href="cart.html" class="btn btn-danger btn-block">Thêm vào giỏ
                                                        hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-3">
                                    <div class="card">
                                        <img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title text-center"><a href="product.html"
                                                    title="View Product">Product
                                                    title</a></h4>

                                            <div class="row">
                                                <div class="col">
                                                    <p class="btn text font-weight-bold btn-block">99.00 $</p>
                                                </div>
                                                <div class="col">
                                                    <a href="cart.html" class="btn btn-danger btn-block">Thêm vào giỏ
                                                        hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-3">
                                    <div class="card">
                                        <img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title text-center"><a href="product.html"
                                                    title="View Product">Product
                                                    title</a></h4>

                                            <div class="row">
                                                <div class="col">
                                                    <p class="btn text font-weight-bold btn-block">99.00 $</p>
                                                </div>
                                                <div class="col">
                                                    <a href="cart.html" class="btn btn-danger btn-block">Thêm vào giỏ
                                                        hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-3">
                                    <div class="card">
                                        <img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title text-center"><a href="product.html"
                                                    title="View Product">Product
                                                    title</a></h4>

                                            <div class="row">
                                                <div class="col">
                                                    <p class="btn text font-weight-bold btn-block">99.00 $</p>
                                                </div>
                                                <div class="col">
                                                    <a href="cart.html" class="btn btn-danger btn-block">Thêm vào giỏ
                                                        hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
