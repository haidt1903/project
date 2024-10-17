@extends('client.layouts.master')
@section('content')
    <section class="section-conten padding-y" style="min-height:84vh">

        <!-- ============================ COMPONENT REGISTER ================================= -->
        <div class="card mb-4 mx-auto" style="max-width: 500px; margin-top:100px;">
            <article class="card-body">
                <header class="mb-4">
                    <h4 class="card-title">Đăng ký</h4>
                </header>
                <form action="{{Route('postRegister')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="col form-group">
                            <label>Tên đăng nhập</label>
                            <input type="text" class="form-control" placeholder="Username" name="username">
                        </div> <!-- form-group end.// -->
                    </div>
                    @error('username')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <!-- form-row end.// -->
                    <div class="form-group">
                        <label>Họ và tên</label>
                        <input type="text" class="form-control" placeholder="Fullname" name="fullname">
                    </div>
                    @error('fullname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Nhập địa chỉ email..." name="email">
                        <small class="form-text text-muted">Chúng tôi sẽ không bao giờ chia sẻ email của bạn với bất kỳ
                            ai khác.</small>
                    </div>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror <!-- form-group end.// -->
                    <div class="form-group">
                        <label>Avatar</label>
                        <input type="file" class="form-control" name="image" placeholder="Nhập địa chỉ email...">
                    </div>
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Tạo mật khẩu</label>
                            <input class="form-control" type="password" name="password">
                        </div>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <!-- form-group end.// -->
                        <div class="form-group col-md-6">
                            <label>Nhập lại mật khẩu</label>
                            <input class="form-control" type="password" name="confirm_password">
                        </div>
                        @error('confirm_password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <!-- form-group end.// -->
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Đăng ký </button>
                    </div> <!-- form-group// -->

                </form>
                <hr>
                <p class="text-center">Đã có tài khoản? <a href="{{Route('login')}}">Đăng nhập</a></p>
            </article> <!-- card-body end .// -->
        </div> <!-- card.// -->
        <!-- ============================ COMPONENT REGISTER END .// ================================= -->
    </section>
@endsection
