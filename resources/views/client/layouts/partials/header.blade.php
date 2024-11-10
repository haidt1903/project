<nav class="navbar navbar-expand-md navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}">
            <img class="img-fluid logo" src="/content/images/logo.png" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('index')}}">Trang chủ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('indexProduct')}}">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('client.gioithieu') }}">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Liên hệ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Chính sách</a>
                </li>
            </ul>

            <form action="{{ route('search') }}" method="GET" class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="text" name="keyword" class="form-control input-custom" placeholder="Từ khóa...">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-info btn-number btn-custom">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <!-- user -->
            <div class="widgets-wrap float-md-right ml-4">
                <div class="widget-header  mr-3">
                    <a href="{{route('show.cart')}}" class="icon icon-sm rounded-circle border"><i
                            class="fa fa-shopping-cart"></i></a>
                    <span class="badge badge-pill badge-danger notify">0</span>
                </div>
                @if (Auth::check())
                <div class="action">
                    <div class="profile" onclick="menuToggle();">
                        <img src="{{Storage::url(Auth::user()->image)}}" />
                    </div>
                    <div class="menu">
                        <h3>{{Auth::user()->fullname}}<br /><span>Website Designer</span></h3>
                        <ul>
                            <li>
                                <img src="./content/icons/user.png" /><a href="#">My profile</a>
                            </li>
                            <li>
                            </li>
                            @if (Auth::user()->role =='admin')
                            <li>
                                <img src="./content/icons/settings.png" /><a href="{{Route('admin.index')}}">Admin</a>
                            </li>
                            @endif
                            <li>
                                <img src="./content/icons/log-out.png" /><a href="{{Route('logout')}}">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                @else
                <div class="widget-header icontext">
                    <div class="text">
                        <span class="text-white">Xin chào!</span>
                        <div>
                            <a class="text-info" href="{{Route('login')}}">Đăng nhập</a> |
                            <a class="text-info" href="{{Route('register')}}"> Đăng ký</a>
                        </div>
                    </div>
                </div>
                @endif


            </div> <!-- widgets-wrap.// -->

        </div>

    </div>

</nav>