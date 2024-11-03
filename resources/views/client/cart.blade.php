@extends('client.layouts.master')
@section('content')
    <section class="h-100 h-custom" style="background-color: #d2c9ff;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-8">
                                    <div class="p-5">
                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <h1 class="fw-bold mb-0">Shopping Cart</h1>
                                            <h6 class="mb-0 text-muted">3 items</h6>
                                        </div>
                                        <hr class="my-4">

                                        @php
                                            $total = 0;
                                        @endphp

                                        @foreach ($cart as $cartItems)
                                            @php
                                                $total += $cartItems['quantity'] * $cartItems['price'];
                                            @endphp
                                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <img src="{{ Storage::url($cartItems['image']) }}"
                                                        class="img-fluid rounded-3" alt="Product Image">
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-3">
                                                    <h6 class="mb-0">{{ $cartItems['name'] }}</h6>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                    <button class="btn btn-link px-2 decrease-btn">
                                                        <i class="fas fa-minus"></i>
                                                    </button>

                                                    <input style="width:50px" id="form1" min="1" name="quantity"
                                                        value="{{ $cartItems['quantity'] }}" type="number"
                                                        class="form-control form-control-sm quantity_input"
                                                        data-url="{{ route('update.quantity', ['id' => $cartItems['id']]) }}" />

                                                    <button class="btn btn-link px-2 increase-btn">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </div>
                                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h6 class="mb-0 price" data-price="{{ $cartItems['price'] }}">{{ number_format($cartItems['price']) }}</h6>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">{{ number_format($cartItems['price']*$cartItems['quantity']) }}</h6>
                                                </div>
                                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                    <a
                                                    data-url="{{ route('remove.cart', ['id' => $cartItems['id']]) }}"
                                                     href="{{route('remove.cart',$cartItems['id'])}}" class="remove-btn" class="text-muted"><i class="fas fa-times"></i></a>
                                                </div>
                                            </div>
                                        @endforeach


                                        <hr class="my-4">

                                        <div class="pt-5">
                                            <h6 class="mb-0"><a href="{{route('index')}}" class="text-body"><i
                                                        class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 bg-body-tertiary">
                                    <div class="p-5">
                                        <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                                        <hr class="my-4">

                                        <h5 class="text-uppercase mb-3">Give code</h5>

                                        <div class="mb-5">
                                            <div data-mdb-input-init class="form-outline">
                                                <input type="text" id="form3Examplea2"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplea2">Enter your code</label>
                                            </div>
                                        </div>

                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between mb-5">
                                            <h5 class="text-uppercase">Total price</h5>
                                            <h5>{{ number_format($total) }}</h5>
                                        </div>

                                        <button type="button" data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-dark btn-block btn-lg"
                                            data-mdb-ripple-color="dark">Register</button>

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
