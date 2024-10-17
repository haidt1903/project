@extends('client.layouts.master')
@section('content')

<section class="section-conten padding-y" style="min-height:84vh">

    <!-- ============================ COMPONENT LOGIN   ================================= -->
    <div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
        <div class="card-body">
            @if (session('message'))
    <span class="bg-danger text-light">{{session('message')}}</span>
@endif
            <h4 class="card-title mb-4">Đăng nhập</h4>
            <form action="{{ route('postLogin') }}" method="post">
                @csrf
                <a href="#" class="btn btn-facebook btn-block mb-2"> <i class="fab fa-facebook-f"></i> &nbsp Đăng
                    nhập bằng facebook</a>
                <a href="#" class="btn btn-google btn-block mb-4"> <i class="fab fa-google"></i> &nbsp Đăng nhập
                    bằng google</a>
                <div class="form-group">
                    <label for="email" class="form-label">Tài khoản</label>
                    <input class="form-control" placeholder="Username" name="username" type="text">
                </div> <!-- form-group// -->
                <div class="form-group">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input class="form-control" placeholder="Password" name="password" type="password">
                </div> <!-- form-group// -->

                <div class="form-group">
                    <a href="#" class="float-right">Quên mật khẩu?</a>
                    <label class="float-left custom-control custom-checkbox"> <input type="checkbox"
                            class="custom-control-input" checked="">
                        <div class="custom-control-label"> Ghi nhớ tài khoản </div>
                    </label>
                </div> <!-- form-group form-check .// -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Đăng nhập </button>
                </div> <!-- form-group// -->
            </form>
        </div> <!-- card-body.// -->
    </div> <!-- card .// -->

    <p class="text-center mt-4">Bạn chưa có tài khoản? <a href="{{Route('register')}}">Đăng ký</a></p>
    <br><br>
    <!-- ============================ COMPONENT LOGIN  END.// ================================= -->


</section>
@endsection