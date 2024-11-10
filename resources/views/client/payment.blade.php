@extends('client.layouts.master')
@section('content')
<h5 class="alert-secondary mb-3 pt-3 pb-3 pl-sm-4 shadow-sm text-center text-sm-center text-md-center text-lg-center text-xl-center"
    style="margin-top: 5rem; margin-bottom: 0rem">Thông tin nhận hàng </h5>
<div class="row m-1 pb-5">
    <form action="{{route('payOrder',$order->id)}}" method="POST" class="col-6 m-auto" id="invoice"
        enctype="multipart/form-data">
        @csrf
        <div class="form-group form">
            <label for="">Họ và tên</label>
            <input type="text" name="ho_ten" id="" class="form-control rounded-pill" value="{{$user->fullname}}"
                aria-describedby="helpId">
        </div>
        <div class="form-group">
         
        </div>
        <div class="form-group">
            <label for="">Địa chỉ email</label>
            <input type="text" name="email" id="" class="form-control rounded-pill" value="{{$user->email}}"
                aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Số điện thoại</label>
            <input type="text" name="sdt" id="" class="form-control rounded-pill" value="{{$user->phone_number}}" placeholder="" required
                aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Địa chỉ đơn hàng  </label>
            <textarea name="address" class="form-control" id="" required></textarea>
        </div>
        <div class="form-group">
            <label for="">Phương thức thanh toán </label>
            <br>
            <input type="radio" name="payment_method" id="tienmat" value="Money" checked placeholder="" aria-describedby="helpId">
            Tiền mặt
            <input type="radio" name="payment_method" id="chuyenkhoan" value="Bank Transfer" placeholder="" aria-describedby="helpId"> Chuyển
            khoản ngân hàng
            <input type="radio" name="payment_method" id="vidientu" value="Credit Card" placeholder="" aria-describedby="helpId"> Ví điện
            tử
           
        </div>
       
       <input type="hidden" value="1" name="id_trang_thai">
        <div class="d-flex justify-content-center">
            <button type="submit" name="btn_thanh_toan" class="btn btn-success btn-block pt-2 pb-2 rounded-pill">Xác
                nhận</button>
        </div>
    </form>

</div>
@endsection