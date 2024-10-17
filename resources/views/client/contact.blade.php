@extends('client.layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> Liên hệ.
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="name">Tên</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
                                placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Địa chỉ email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                placeholder="Enter email" required>
                            <small id="emailHelp" class="form-text text-muted">Chúng tôi sẽ không bao giờ chia sẻ
                                email của bạn với bất kỳ ai khác.</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Nội dung</label>
                            <textarea class="form-control" id="message" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto">
                            <button type="submit" class="btn btn-primary text-right">Gửi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> Address
                </div>
                <div class="card-body">
                    <p>Trinh Văn Bô - Nam Từ Liêm</p>
                    <p>100000 Hanoi</p>
                    <p>Viet Nam</p>
                    <p>Email : hieunmph17303@fpt.edu.vn</p>
                    <p>SDT: 0982084197</p>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection